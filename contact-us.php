<?php include("inc/header.php"); ?>
<section class="banner-row inner-banner-row">
    <div class="container-fluid">
        <div class="banner-inner-row">
            <div class="banner-sec" aos="fade-up" aos-duration="1500">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="account-row contact-row">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="account-sec contact-sec">
                    <h2>Information Request Form</h2>
                    <p>Select the items that apply, and then let us know how to contact you.</p>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="information" id="company" value="company">
                                <label class="form-check-label" for="company">Send company literature</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="information" id="salesperson" value="salesperson">
                                <label class="form-check-label" for="salesperson">Have a salesperson contact me</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="information" id="presentation" value="presentation">
                                <label class="form-check-label" for="presentation">Schedule me for a presentation of your services and software</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">name *</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="title">title *</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company *</label>
                            <input type="text" class="form-control" name="company" id="company" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address *</label>
                            <textarea class="form-control" name="address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number *</label>
                            <input type="text" class="form-control" name="number" id="number" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-btn">Submit</button>
                        <button type="reset" class="btn btn-primary w-btn">Reset</button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="contact-lft-sec">
                    <h2>Contact Details</h2>
                    <ul>
                        <li><i class="fa fa-mobile"></i>Phone Number: <a href="tel:1-800-854-2100">1-800-854-2100</a></li>
                        <li><i class="fa fa-phone"></i>FAX: <a href="tel:1-858-560-7626">1-858-560-7626</a></li>
                        <li><i class="fa fa-map-marker"></i>Address: 4345 Murphy Canyon Road, Ste 200, San Diego, CA 92123</a></li>
                        <li><i class="fa fa-envelope"></i>Electronic Mail: <a href="#">Click here to send an email to Deandrea, Customer Service Manager</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("inc/footer.php"); ?>