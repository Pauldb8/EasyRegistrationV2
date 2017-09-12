<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 4:34 PM
 */
?>
<!DOCTYPE html>
<html>
<?php require 'header.view.php'; ?>
<body>
<div class="page login-page">
    <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <div class="logo text-uppercase"><span>Dash</span><strong class="text-primary">Express</strong></div>
                <p></p>
                <form id="login-form" method="post">
                    <div class="form-group">
                        <label for="login-username" class="label-custom">User Name</label>
                        <input id="login-username" type="text" name="loginUsername" required="">
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="label-custom">Password</label>
                        <input id="login-password" type="password" name="loginPassword" required="">
                    </div><a id="login" href="index.html" class="btn btn-primary">Login</a>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                </form><a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small>
                <a href="register.html" class="signup">Signup</a>
            </div>
            <div class="copyrights text-center">
                <p>&copy; EasyRegistration by <a href="http://onetec.be">OneTec</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Javascript files-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"> </script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>