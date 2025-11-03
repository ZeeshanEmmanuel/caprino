<?php include("inc/header.php"); ?>
<section class="banner-row inner-banner-row">
    <div class="container-fluid">
        <div class="banner-inner-row">
            <div class="banner-sec" aos="fade-up" aos-duration="1500">
                <h1>Open an Account</h1>
                <p>To open an account, please fill out the following form and then click Submit. Someone from CAPRENOS
                    will contact you shortly. <br>
                    (* indicates required fields)</p>
            </div>
        </div>
    </div>
</section>
<section class="account-row">
    <div class="container">
        <div class="account-sec">
            <form action="#" method="POST" id="account_from">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="name">name: *</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="title">title: *</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="company">Company name: *</label>
                            <input type="text" class="form-control" name="company" id="company">
                        </div>
                        <div class="form-group">
                            <label for="email">email address:</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="street">address: *</label>
                            <input type="text" class="form-control" name="street" id="street">
                        </div>
                        <div class="form-group">
                            <label for="city">City: *</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State: *</label>
                            <input type="text" class="form-control" name="state" id="state">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP: *</label>
                            <input type="text" class="form-control" name="zip" id="zip">
                        </div>
                        <h4>Mailing address if different than company address</h4>
                        <div class="form-group">
                            <label for="po_box">Street / P.O. Box (if any):</label>
                            <input type="text" class="form-control" name="po_box" id="po_box">
                        </div>
                        <div class="form-group">
                            <label for="m_city">City:</label>
                            <input type="text" class="form-control" name="m_city" id="m_city">
                        </div>
                        <div class="form-group">
                            <label for="m_state">State:</label>
                            <input type="text" class="form-control" name="m_state" id="m_state">
                        </div>
                        <div class="form-group">
                            <label for="m_zip">ZIP:</label>
                            <input type="text" class="form-control" name="m_zip" id="m_zip">
                        </div>
                        <div class="flx-group">
                            <div class="form-group">
                                <label for="company_phone">Company phone: *</label>
                                <input type="text" class="form-control" name="company_phone" id="company_phone">
                            </div>
                            <div class="form-group">
                                <label for="ext">Ext.</label>
                                <input type="text" class="form-control" name="ext" id="ext">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fax">Company fax:</label>
                            <input type="text" class="form-control" name="fax" id="fax">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="category">Is your company a: *</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categoryOptions" id="supplier"
                                    value="Supplier">
                                <label class="form-check-label" for="supplier">Supplier</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categoryOptions" id="subContractor"
                                    value="SubContractor">
                                <label class="form-check-label" for="subContractor">SubContractor</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="furnish">What materials or service do you furnish: *</label>
                            <input type="text" class="form-control" name="furnish" id="furnish">
                        </div>
                        <div class="form-group">
                            <label>Are you filing preliminary notices now? *</label>
                            <select class="form-select" id="notice" name="notice">
                                <option value="">-- Select --</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="furnish">If yes, how are you filing them?</label>
                            <input type="text" class="form-control" name="filling" id="filling">
                        </div>
                        <div class="form-group">
                            <label for="furnish">Approximately how many notices do you send out monthly? *</label>
                            <input type="text" class="form-control" name="notice_monthly" id="notice_monthly">
                        </div>
                        <div class="form-group">
                            <label for="furnish">How did you hear about <strong>CAPRENOS?</strong> *</label>
                            <input type="text" class="form-control" name="about_caprenos" id="about_caprenos">
                        </div>
                        <button type="submit" class="btn btn-primary w-btn">Submit</button>
                    </div>
                </div>
            </form>
            <p>There is a one-time new customer setup fee of $45</p>
            <p>Do you wish to submit a prelim request at this time? If so, please click on "Request For Service" and
                then "Preliminary Notice" on the top links menu. We must have the signed <a href="assets/pdf/ScopeOfService.pdf">Scope of Service Agreement</a> in
                our office before we can prepare your Preliminary Notice. Please print and sign the <a href="assets/pdf/ScopeOfService.pdf">Scope of Service
                Agreement</a> and return it to CAPRENOS by fax or mail.</p>
        </div>
    </div>
</section>
<?php include("inc/footer.php"); ?>