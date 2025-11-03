<?php include("inc/header.php"); ?>    
    <section class="banner-row inner-banner-row">
        <div class="container-fluid">
            <div class="banner-inner-row">
                <div class="banner-sec" aos="fade-up" aos-duration="1500">
                    <h1>Preliminary Notice</h1>
                    <p>To request that Caprenos prepare your Preliminary Notice, please complete the information below, then click on the "Submit" button.</p>
                    <p>Prelim Requests received by Caprenos before 1:30 pm will be processed the same day.  Those received after 1:30 pm will be processed the following day.</p>
                    <p>Please check your fax machine for a confirmation the morning following the processing of your prelim request to insure that your request was received by Caprenos.  If no confirmation is received, please contact Caprenos immediately.<br>
                    (* indicates required fields)</p>
                </div>
            </div>
        </div>
    </section>    
    <section class="account-row">
        <div class="container">
            <div class="account-sec">
                <form action="#" method="POST" id="prelimari_form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="cname" id="cname">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="">Company Phone</label>
                                <input type="text" class="form-control" name="cphone" id="cphone">
                            </div>
                            <div class="form-group">
                                <label for="">Start Date of work on project or delivery date of materials</label>
                                <input type="text" class="form-control" name="start_date" id="start_date">
                            </div>
                            <div class="form-group">
                                <label for="">Estimated Dollar Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="">Name of Person or Company that hired you</label>
                                <input type="text" class="form-control" name="person" id="person">
                            </div>
                            <div class="form-group">
                                <label for="">Customer's Phone</label>
                                <input type="text" class="form-control" name="customer_phone" id="customer_phone">
                            </div>
                            <div class="form-group">
                                <label for="">Customer's Fax</label>
                                <input type="text" class="form-control" name="customer_fax" id="customer_fax">
                            </div>
                            <div class="form-group">
                                <label for="">Customer's Address</label>
                                <input type="text" class="form-control" name="customer_address" id="customer_address">
                            </div>
                            <div class="form-group">
                                <label for="">Customer's Address 2</label>
                                <input type="text" class="form-control" name="customer_address2" id="customer_address2">
                            </div>
                            <div class="form-cout-flex">
                                <div class="form-group">
                                    <label for="">Customer's City</label>
                                    <input type="text" class="form-control" name="customer_city" id="customer_city"> 
                                </div>
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="state" id="state">
                                </div>
                                <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input type="text" class="form-control" name="zip" id="zip">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Materials delivered/provided:</label>
                                <textarea name="materials" id="materials" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jobsite Address</label>
                                <textarea name="jobsite" id="jobsite" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jobstate Address</label>
                                <select name="jobState" id="jobState" class="form-select" tabindex="22">
                                    <option value=""></option>
                                    <option selected="selected" value="">Please Select</option>
                                    <option value="AK">AK</option>
                                    <option value="AL">AL</option>
                                    <option value="AR">AR</option>
                                    <option value="AZ">AZ</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DC">DC</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="IA">IA</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="MA">MA</option>
                                    <option value="MD">MD</option>
                                    <option value="ME">ME</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MO">MO</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="NE">NE</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NV">NV</option>
                                    <option value="NY">NY</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VA">VA</option>
                                    <option value="VT">VT</option>
                                    <option value="WA">WA</option>
                                    <option value="WI">WI</option>
                                    <option value="WV">WV</option>
                                    <option value="WY">WY</option>
                                </select>
                            </div>
                            <h4>General Contractor Information (if known):</h4>
                            <div class="form-group">
                                <label for="">Contractor Name</label>
                                <input type="text" class="form-control" name="contractor_name">
                            </div>
                            <div class="form-group">
                                <label for="">Contractor Phone</label>
                                <input type="text" class="form-control" name="contractor_phone">
                            </div>
                            <div class="form-group">
                                <label for="">Contractor Fax</label>
                                <input type="text" class="form-control" name="contractor_fax">
                            </div>
                            <div class="form-group">
                                <label for="">Contractor Address</label>
                                <input type="text" class="form-control" name="contractor_address">
                            </div>
                            <div class="form-cout-flex">
                                <div class="form-group">
                                    <label for="">Contractor City</label>
                                    <input type="text" class="form-control" name="contractor_city">
                                </div>
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="contractor_state">
                                </div>
                                <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input type="text" class="form-control" name="contractor_zip">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4>Property Owner Information (if known):</h4>
                            <div class="form-group">
                                <label for="">Owner Name</label>
                                <input type="text" class="form-control" name="owner_name">
                            </div>
                            <div class="form-group">
                                <label for="">Owner Phone</label>
                                <input type="text" class="form-control" name="owner_phone">
                            </div>
                            <div class="form-group">
                                <label for="">Owner Fax</label>
                                <input type="text" class="form-control" name="owner_fax">
                            </div>
                            <div class="form-group">
                                <label for="">Owner Address</label>
                                <input type="text" class="form-control" name="owner_address">
                            </div>
                            <div class="form-cout-flex">
                                <div class="form-group">
                                    <label for="">Owner City</label>
                                    <input type="text" class="form-control" name="owner_city">
                                </div>
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="owner_state">
                                </div>
                                <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input type="text" class="form-control" name="owner_zip">
                                </div>
                            </div>
                            <h4>Lender Information (if known):</h4>
                            <div class="form-group">
                                <label for="">Lender Name</label>
                                <input type="text" class="form-control" name="lender_name">
                            </div>
                            <div class="form-group">
                                <label for="">Lender Phone</label>
                                <input type="text" class="form-control" name="lender_phone">
                            </div>
                            <div class="form-group">
                                <label for="">Lender Fax</label>
                                <input type="text" class="form-control" name="lender_fax">
                            </div>
                            <div class="form-group">
                                <label for="">Lender Address</label>
                                <input type="text" class="form-control" name="lender_address">
                            </div>
                            <div class="form-cout-flex">
                                <div class="form-group">
                                    <label for="">Lender City</label>
                                    <input type="text" class="form-control" name="lender_city">
                                </div>
                                <div class="form-group">
                                    <label for="">State</label>
                                    <input type="text" class="form-control" name="lender_state">
                                </div>
                                <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input type="text" class="form-control" name="lender_zip">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Special Notes:</label>
                                <textarea name="notes" id="notes" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-btn">Submit</button>
                            <button type="reset" class="btn btn-primary w-btn">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php include("inc/footer.php"); ?>