//Caprenos Form
$("#caprenos_form").submit(function (e) {
        e.preventDefault();

        let is_error = false;
        let caprenos_log = ($("#caprenos_log").val() || "").trim();
        let customer = ($("#customer").val() || "").trim();
        let customer_number = ($("#customer_number").val() || "").trim();
        let job_sites = ($("#job_sites").val() || "").trim();
        let prelim_no = ($("#prelim_no").val() || "").trim();
        let contractor = ($("#contractor").val() || "").trim();
        let owner = ($("#owner").val() || "").trim();
        let lender = ($("#lender").val() || "").trim();
        let ref_no = ($("#ref_no").val() || "").trim();

        // reset all borders first
        $("#caprenos_log, #customer, #customer_number, #job_sites, #prelim_no, #contractor, #owner, #lender, #ref_no").css("border", "1px solid #ced4da");

        // add live reset on focus/input
        $("#caprenos_log, #customer, #customer_number, #job_sites, #prelim_no, #contractor, #owner, #lender, #ref_no").on("input focus", function () {
            $(this).css("border", "1px solid #ced4da");
        });

        // validations
        if (caprenos_log === "") {
            $("#caprenos_log").css("border", "1px solid red");
            is_error = true;
        }
        if (customer === "") {
            $("#customer").css("border", "1px solid red");
            is_error = true;
        }
        if (customer_number === "") {
            $("#customer_number").css("border", "1px solid red");
            is_error = true;
        }
        if (job_sites === "") {
            $("#job_sites").css("border", "1px solid red");
            is_error = true;
        }
        if (prelim_no === "") {
            $("#prelim_no").css("border", "1px solid red");
            is_error = true;
        }
        if (contractor === "") {
            $("#contractor").css("border", "1px solid red");
            is_error = true;
        }
        if (owner === "") {
            $("#owner").css("border", "1px solid red");
            is_error = true;
        }
        if (lender === "") {
            $("#lender").css("border", "1px solid red");
            is_error = true;
        }
        if (ref_no === "") {
            $("#ref_no").css("border", "1px solid red");
            is_error = true;
        }
        

        if (!is_error) {
            let formData = new FormData(this);

            $.ajax({
                url: "caprenos_query.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.trim() === "success") {
                        $("#caprenos_form")[0].reset();
                        toastr.success("Data inserted successfully!", "Success");
                          setTimeout(() => window.location.href = window.location.href, 1500);
                    } else if (response.trim() === "2") {
                        toastr.error("Data not inserted!", "Error");
                    } else {
                        toastr.error(response, "Error");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("XHR Error:", xhr.responseText);
                    toastr.error("An error occurred. Please try again later.", "Error");
                }
            });
        }
    });
    
    
//state form    
$("#stateForm").submit(function (e) {
  e.preventDefault();

  let states = $("#states").val().trim();
  if (states === "") {
    $("#states").css("border", "1px solid red");
    return;
  }

  let formData = new FormData(this);

  $.ajax({
    url: "add_state_query.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
      if (response.trim() === "success") {
        $("#stateForm")[0].reset();
        toastr.success("All states inserted successfully!", "Success");
      } else {
        toastr.error(response, "Error");
      }
    },
    error: function (xhr) {
      toastr.error("An error occurred. Please try again later.", "Error");
    },
  });
});