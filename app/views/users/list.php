<?php Handler::include("inc.header");?>
<?php Handler::setPageTitle("User management");?>

<div class="container">
    <div class="sidebar">
    <?php Handler::include("inc.sidebar");?>
    </div>
    <div class="content">
        <h2>User List</h2>
        <?php 
            if($data['current_user_type'] == "admin"){
        ?>

        <form class="search-form" method="get" action="" id="SearchForm">
            <label for="search">Search by Username or Email:</label>
            <input type="text" name="search" id = "search">
            <button type="submit" onclick="handlePreFilterProcess()">Filter</button>
            <a href="<?php echo URLROOT; ?>/users">Show All</a>
        </form>

        <?php } ?>
        <div class="userlist">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Date of joined</th>
            </tr>

            <?php
            if(!empty($data['users'])){
                foreach ($data['users'] as $key => $user) : ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo strtoupper($user->status); ?></td>
                        <td><?php echo date("d-m-Y",strtotime($user->created_at)); ?></td>
                    </tr>
                <?php endforeach;
            }else{
                echo <<<HTML
                    <tr>
                        <td colspan="5" style="text-align:center">No Data Found.</td>
                    </tr>
                HTML;
            }
            ?>

        </table>
        </div>
</div>
</div>


<?php Handler::include("inc.footer");?>
