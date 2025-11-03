// Reset border color on focus globally
$(
  "#name, #title, #company, #street, #city, #state, #zip, #company_phone, #furnish, #notice_monthly, #about_caprenos"
).on("focus", function () {
  $(this).css("border", "1px solid #ced4da");
});

// Reset border when user selects a radio option
$("input[name='categoryOptions']").on("change", function () {
  $("input[name='categoryOptions']")
    .closest(".form-group")
    .css("border", "none");
});

// Reset border when user changes <select>
$("#notice").on("change", function () {
  $(this).closest(".form-group").css("border", "none");
});

// Handle form submit
$("#account_from").submit(function (e) {
  e.preventDefault();

  var is_error = false; // ✅ declare first

  var name = $("#name").val().trim();
  var title = $("#title").val().trim();
  var company = $("#company").val().trim();
  var street = $("#street").val().trim();
  var city = $("#city").val().trim();
  var state = $("#state").val().trim();
  var zip = $("#zip").val().trim();
  var company_phone = $("#company_phone").val().trim();
  var furnish = $("#furnish").val().trim();
  var notice_monthly = $("#notice_monthly").val().trim();
  var about_caprenos = $("#about_caprenos").val().trim(); // ✅ fixed
  var category = $("input[name='categoryOptions']:checked").val();
  var notice = $("#notice").val();

  // Validate radios
  if (!category) {
    $("input[name='categoryOptions']")
      .closest(".form-group")
      .css({ border: "1px solid red", padding: "10px" });
    is_error = true;
  }

  // Validate select
  if (notice === "") {
    $("#notice")
      .closest(".form-group")
      .css({ border: "1px solid red", padding: "10px" });
    is_error = true;
  }

  // Validate text fields
  if (name === "") {
    $("#name").css("border", "1px solid red");
    is_error = true;
  }
  if (title === "") {
    $("#title").css("border", "1px solid red");
    is_error = true;
  }
  if (company === "") {
    $("#company").css("border", "1px solid red");
    is_error = true;
  }
  if (street === "") {
    $("#street").css("border", "1px solid red");
    is_error = true;
  }
  if (city === "") {
    $("#city").css("border", "1px solid red");
    is_error = true;
  }
  if (state === "") {
    $("#state").css("border", "1px solid red");
    is_error = true;
  }
  if (zip === "") {
    $("#zip").css("border", "1px solid red");
    is_error = true;
  }
  if (company_phone === "") {
    $("#company_phone").css("border", "1px solid red");
    is_error = true;
  }
  if (furnish === "") {
    $("#furnish").css("border", "1px solid red");
    is_error = true;
  }
  if (notice_monthly === "") {
    $("#notice_monthly").css("border", "1px solid red");
    is_error = true;
  }
  if (about_caprenos === "") {
    $("#about_caprenos").css("border", "1px solid red");
    is_error = true;
  }

  // If no error, submit
  if (!is_error) {
    var formData = new FormData(this);

    $.ajax({
      url: "account_query.php",
      type: "POST",
      data: formData,
      contentType: false, // ✅ important
      processData: false, // ✅ important
      success: function (response) {
        if (response == 1) {
          $("#account_from")[0].reset();
          toastr.success("Data Inserted!", "Success");
        } else {
          toastr.error("Failed to register. Please try again later.", "Error");
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        toastr.error(
          "An error occurred while processing your request.",
          "Error"
        );
      },
    });
  }
});

// Reset border color on focus globally
$(
  "#cname, #maname, #maphone, #startdate, #amount, #customer_name, #customer_phone, #customer_fax, #customer_address, #customer_address2, #customer_city, #state, #zipcode, #materials, #jobsite, #notes  "
).on("focus", function () {
  $(this).css("border", "1px solid #ced4da");
});

$("#miller_act_form").submit(function (e) {
  e.preventDefault();

  var is_error = false; // ✅ declare first

  var cname = $("#cname").val().trim();
  var maname = $("#maname").val().trim();
  var maphone = $("#maphone").val().trim();
  var startdate = $("#startdate").val().trim();
  var amount = $("#amount").val().trim();
  var customer_name = $("#customer_name").val().trim();
  var customer_phone = $("#customer_phone").val().trim();
  var customer_fax = $("#customer_fax").val().trim();
  var customer_address = $("#customer_address").val().trim();
  var customer_address2 = $("#customer_address2").val().trim();
  var customer_city = $("#customer_city").val().trim();
  var state = $("#state").val().trim();
  var zipcode = $("#zipcode").val().trim();
  var materials = $("#materials").val().trim();
  var jobsite = $("#jobsite").val().trim();
  var notes = $("#notes").val().trim();

  // Validate text fields
  if (cname === "") {
    $("#cname").css("border", "1px solid red");
    is_error = true;
  }
  if (maname === "") {
    $("#maname").css("border", "1px solid red");
    is_error = true;
  }
  if (maphone === "") {
    $("#maphone").css("border", "1px solid red");
    is_error = true;
  }
  if (startdate === "") {
    $("#startdate").css("border", "1px solid red");
    is_error = true;
  }
  if (amount === "") {
    $("#amount").css("border", "1px solid red");
    is_error = true;
  }
  if (amount === "") {
    $("#amount").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_name === "") {
    $("#customer_name").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_phone === "") {
    $("#customer_phone").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_fax === "") {
    $("#customer_fax").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_address === "") {
    $("#customer_address").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_address2 === "") {
    $("#customer_address2").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_city === "") {
    $("#customer_city").css("border", "1px solid red");
    is_error = true;
  }
  if (state === "") {
    $("#state").css("border", "1px solid red");
    is_error = true;
  }
  if (zipcode === "") {
    $("#zipcode").css("border", "1px solid red");
    is_error = true;
  }
  if (materials === "") {
    $("#materials").css("border", "1px solid red");
    is_error = true;
  }
  if (jobsite === "") {
    $("#jobsite").css("border", "1px solid red");
    is_error = true;
  }

  if (notes === "") {
    $("#notes").css("border", "1px solid red");
    is_error = true;
  }

  // If no error, submit
  if (!is_error) {
    var formData = new FormData(this);

    $.ajax({
      url: "miller_query.php",
      type: "POST",
      data: formData,
      contentType: false, // ✅ important
      processData: false, // ✅ important
      success: function (response) {
        if (response == 1) {
          $("#miller_act_form")[0].reset();
          toastr.success("Data Inserted!", "Success");
        } else {
          toastr.error("Failed to register. Please try again later.", "Error");
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        toastr.error(
          "An error occurred while processing your request.",
          "Error"
        );
      },
    });
  }
});


// Reset border color on focus globally
$(
  "#cname, #name, #cphone, #start_date, #amount, #person, #customer_phone, #customer_fax, #customer_address, #customer_address2, #customer_city, #state, #zip, #materials, #jobsite, #notes  "
).on("focus", function () {
  $(this).css("border", "1px solid #ced4da");
});

// Reset border when user changes <select>
$("#jobState").on("change", function () {
  $(this).closest(".form-group").css("border", "none");
});


$("#prelimari_form").submit(function (e) {
  e.preventDefault();

  var is_error = false; // ✅ declare first

  var cname = $("#cname").val().trim();
  var name = $("#name").val().trim();
  var cphone = $("#cphone").val().trim();
  var startdate = $("#start_date").val().trim();
 var amount = $("#amount").val().trim();
  var person = $("#person").val().trim();
  var customer_phone = $("#customer_phone").val().trim();
  var customer_fax = $("#customer_fax").val().trim();
  var customer_address = $("#customer_address").val().trim();
  var customer_address2 = $("#customer_address2").val().trim();
  var customer_city = $("#customer_city").val().trim();
  var state = $("#state").val().trim();
  var zipcode = $("#zip").val().trim();
  var materials = $("#materials").val().trim();
  var jobsite = $("#jobsite").val().trim();
var jobState = $("#jobState").val();
  var notes = $("#notes").val().trim();

  // Validate select
  if (jobState === "") {
    $("#jobState")
      .closest(".form-group")
      .css({ border: "1px solid red", padding: "10px" });
    is_error = true;
  }



  // Validate text fields
  if (cname === "") {
    $("#cname").css("border", "1px solid red");
    is_error = true;
  }
  if (name === "") {
    $("#name").css("border", "1px solid red");
    is_error = true;
  }
  if (cphone === "") {
    $("#cphone").css("border", "1px solid red");
    is_error = true;
  }
  if (startdate === "") {
    $("#start_date").css("border", "1px solid red");
    is_error = true;
  }
  if (amount === "") {
    $("#amount").css("border", "1px solid red");
    is_error = true;
  }
  if (amount === "") {
    $("#amount").css("border", "1px solid red");
    is_error = true;
  }
  if (person === "") {
    $("#person").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_phone === "") {
    $("#customer_phone").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_fax === "") {
    $("#customer_fax").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_address === "") {
    $("#customer_address").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_address2 === "") {
    $("#customer_address2").css("border", "1px solid red");
    is_error = true;
  }
  if (customer_city === "") {
    $("#customer_city").css("border", "1px solid red");
    is_error = true;
  }
  if (state === "") {
    $("#state").css("border", "1px solid red");
    is_error = true;
  }
  if (zipcode === "") {
    $("#zip").css("border", "1px solid red");
    is_error = true;
  }
  if (materials === "") {
    $("#materials").css("border", "1px solid red");
    is_error = true;
  }
  if (jobsite === "") {
    $("#jobsite").css("border", "1px solid red");
    is_error = true;
  }

  if (notes === "") {
    $("#notes").css("border", "1px solid red");
    is_error = true;
  }

  // If no error, submit
  if (!is_error) {
    var formData = new FormData(this);

    $.ajax({
      url: "prelimari_query.php",
      type: "POST",
      data: formData,
      contentType: false, // ✅ important
      processData: false, // ✅ important
      success: function (response) {
        if (response == 1) {
          $("#prelimari_form")[0].reset();
          toastr.success("Data Inserted!", "Success");
        } else {
          toastr.error("Failed to register. Please try again later.", "Error");
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        toastr.error(
          "An error occurred while processing your request.",
          "Error"
        );
      },
    });
  }
});



//login Form
$("#loginForm").submit(function (e) {
  e.preventDefault();
  var login_email = $("#login_email").val();
  var login_password = $("#login_password").val();
  var is_error = true;

  if (login_email == "") {
    $("#login_email").css("border", "1px solid red");
    is_error = false;
  }
  if (login_password == "") {
    $("#login_password").css("border", "1px solid red");
    is_error = false;
  }

  $("#login_email").focus(function () {
    $("#login_email").css("border", "1px solid #ced4da");
  });
  $("#login_password").focus(function () {
    $("#login_password").css("border", "1px solid #ced4da");
  });

  if (is_error) {
    var formData = $(this).serialize();
    $.ajax({
      url: "login_query.php",
      type: "POST",
      data: formData,
      success: function (response) {
        console.log("Server response:", response);

        if (response == "admin") {
          toastr.success("Login successful!", "Success");
          setTimeout(function () {
            window.location.href = "admin/show_account.php"; // Or change based on role
          }, 2000);
        } else if (response == "user" || response == "employee") {
          toastr.success("Login successful!", "Success");
          setTimeout(function () {
            window.location.href = "myaccount.php"; // Or change based on role
          }, 2000);
        }
        else if (response == "contractor") {
          toastr.success("Login successful!", "Success");
          setTimeout(function () {
            window.location.href = "admin/show_data.php"; // Or change based on role
          }, 2000);
        }
        
        else if (response == "inactive") {
          toastr.warning(
            "Your account is inactive. Please contact support.",
            "Inactive"
          );
        } else if (response == "invalid") {
          toastr.error("Invalid username or password", "Error");
        } else {
          toastr.error("Invalid:");
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  }
});

