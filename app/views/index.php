<?php Handler::include("inc.header");?>
<?php Handler::setPageTitle("Home");?>
<div class="container">
    <div class="sidebar">
        <h2>Dashboard</h2>
        <?php Handler::include("inc.sidebar");?>
    </div>

    <div class="content">
        <h2>Welcome, <?php echo $data['username']; ?>!</h2>
        <p>Email: <?php echo $data['email']; ?></p>
    </div>
</div>

<h2>Welcome, <?php echo $data['username']; ?>!</h2>
<p>Email: <?php echo $data['email']; ?></p>


<?php Handler::include("inc.footer");?>
