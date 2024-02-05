<?php Handler::include("inc.header"); ?>
<?php Handler::setPageTitle("Change Password"); ?>

<div class="container">
    <div class="sidebar">
    <?php Handler::include("inc.sidebar"); ?>
    </div>

    <div class="content">
        <h3>Change Password</h3>
        <p><?php echo Session::flash("password_response"); ?></p>
        <form action="<?php echo URLROOT;?>/profile/changePassword" method="post">

            <div>
                <label for="old-password">Old Password <sup class="text-danger">*</sup></label> <br>
                <input type="password" autocomplete="off" name="old-password" placeholder="*******" id="old-password" value="<?php echo $data['old-password'] ?? "";?>"> <br>
                <span class="invalid-feedback"><?php echo $data['old-password_error'] ?? "";?></span>
            </div>
            
            <div>
                <label for="new-password">New Password <sup class="text-danger">*</sup></label> <br>
                <input type="password" name="new-password" placeholder="*******" id="new-password" value="<?php echo $data['new-password'] ?? "";?>"> <br>
                <span class="invalid-feedback"><?php echo $data['new-password_error'] ?? "";?></span>
            </div>       

            <div>
                <label for="confirm-new-password">Confirm New Password <sup class="text-danger">*</sup></label> <br>
                <input type="password" name="confirm-new-password" placeholder="*******" id="confirm-new-password" value="<?php echo $data['confirm-new-password'] ?? "";?>"> <br>
                <span class="invalid-feedback"><?php echo $data['confirm-new-password_error'] ?? "";?></span>
            </div>
            
            <div>
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
</div>

<?php Handler::include("inc.footer"); ?>