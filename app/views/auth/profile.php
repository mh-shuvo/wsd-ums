<?php Handler::include("inc.header"); ?>
<?php Handler::setPageTitle("Profile"); ?>

<div class="container">
    <div class="sidebar">
        <?php Handler::include("inc.sidebar"); ?>
    </div>
    <div class="content">
        <form action="<?php echo URLROOT;?>/profile/update" method="post">
            <h3>Update profile</h3>
            <p><?php echo Session::flash("profile"); ?></p>

                <div>
                    <label for="username">Username <sup class="text-danger">*</sup></label> <br>
                    <input type="text" name="username" id="username" placeholder="admin" value="<?php echo $data['username'] ?? "";?>"> <br>
                    <span class="invalid-feedback"><?php echo $data['username_error'] ?? "";?></span>
                </div>

                <div>
                    <label for="email">Email <sup class="text-danger">*</sup></label> <br>
                    <input type="email" name="email" id="email" placeholder="admin" value="<?php echo $data['email'] ?? "";?>"> <br>
                    <span class="invalid-feedback"><?php echo $data['email_error'] ?? "";?></span>
                </div>

                <div>
                    <button type="submit">Update</button>
                </div>

        </form>
    </div>
</div>

<?php Handler::include("inc.footer"); ?>