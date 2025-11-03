<?php include("inc/header.php"); ?>
<section class="banner-row inner-banner-row">
    <div class="container-fluid">
        <div class="banner-inner-row">
            <div class="banner-sec" aos="fade-up" aos-duration="1500">
                <h1>Login</h1>
            </div>
        </div>
    </div>
</section>
<section class="login-row">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 offset-lg-2">
                <div class="w-sec login-sec">
                    <h2>Welcome Back</h2>
                    <p>Enter your username and password to continue.</p>
                    <form id="loginForm" action="javascript:;" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="login_email" id="login_email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="login_password" id="login_password" class="form-control" />
                        </div>
                        <button type="submit" class="w-btn">Login</button>
                    </form>
                    <p>Don't have and account? <a href="register.php">Register</a></p>

                    <div id="loginMsg"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("inc/footer.php"); ?>