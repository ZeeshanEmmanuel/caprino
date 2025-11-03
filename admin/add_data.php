<?php
include('inc/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add Data Form</h1>
                                </div>

                                <!-- FORM -->
                                <form class="user" id="dataForm" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="product_name">Caprenos Log#</label>
                                                <input type="number" class="form-control form-control-user" id="product_name" name="product_name" placeholder="e.g: 104022">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="price">Customer</label>
                                                <input type="text" class="form-control form-control-user" id="price" name="price" placeholder="e.g: BOOGIE PARKER">
                                            </div>
                                        </div>

                                        

                                       <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="price">Customer Number</label>
                                                <input type="text" class="form-control form-control-user" id="price" name="price" placeholder="e.g: 657-276-0600">
                                            </div>
                                        </div>


                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Add Product</button>
                                </form>
                                <!-- END FORM -->

                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('inc/footer.php');
?>
<script>
document.getElementById("product_image").addEventListener("change", function(event) {
    const input = event.target;
    const preview = document.getElementById("imagePreview");

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        }

        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = "#";
        preview.style.display = "none";
    }
});
</script>
