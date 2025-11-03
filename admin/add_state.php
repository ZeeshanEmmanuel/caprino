<?php
include('inc/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add Multiple States</h1>
                                </div>

                                <!-- FORM -->
                                <form class="user" id="stateForm" method="POST">
                                    <div class="form-group">
                                        <label for="states">Enter States (one per line)</label>
                                        <textarea class="form-control" id="states" name="states" rows="8" placeholder="Example:
Alabama
Alaska
Arizona
Arkansas
California"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Add States</button>
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

