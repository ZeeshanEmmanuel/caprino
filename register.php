<?php include("inc/header.php"); ?>    
    <section class="banner-row inner-banner-row">
        <div class="container-fluid">
            <div class="banner-inner-row">
                <div class="banner-sec" aos="fade-up" aos-duration="1500">
                    <h1>Singup</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="login-row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 offset-lg-2">
                    <div class="w-sec login-sec register-sec">
                        <h2>Create Your Account</h2>
                        <!-- <p>Sign up to acess comprehensive cargo feature</p> -->
                        <form id="registerForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-primary w-btn">Sign Up</button>
                        </form>
                        <p>Already have and account? <a href="login.php">Log In</a></p>

                        <div id="registerMsg"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("inc/footer.php"); ?>