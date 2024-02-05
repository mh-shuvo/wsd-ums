<?php Handler::include("inc.header"); ?>
<?php Handler::setPageTitle("Login"); ?>

<div class="container">
    <form class="form" action="<?php echo URLROOT;?>/login/submit" method="post">

        <h2>Login</h2>
        <p><?php echo Session::flash("login_error"); ?></p>

        <div>
            <label for="username">Username <sup class="text-danger">*</sup></label>
            <input type="text" name="username" id="username" placeholder="admin" value="<?php echo $data['username'] ?? "";?>">
            <span class="invalid-feedback"><?php echo $data['username_error'] ?? "";?></span>
        </div>


        <div>
            <label for="password">Password <sup class="text-danger">*</sup></label>
            <input type="text" name="password" placeholder="*******" id="password">
            <span class="invalid-feedback"><?php echo $data['password_error'] ?? "";?></span>
        </div>


        <div>
            <button type="submit">Login</button>
        </div>

    </form>
</div>

<?php Handler::include("inc.footer"); ?>