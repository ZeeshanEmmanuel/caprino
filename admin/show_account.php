<?php
include 'inc/header.php';
if (!isset($role) || $role == 'contractor') {
    echo '<script>window.location.href = "../login.php";</script>';
    exit;
}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Show Account Form Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="servicetable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Company Name</th>
                        <th>Company Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="sortable-services">
                    <?php
          $show_product = "SELECT * FROM `tbl_new_account`"; 
         $result = mysqli_query($conn, $show_product);
         if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
                             $id = $row['id'];
                            $name = $row['name'];
                             $title = $row['title'];
                            $company_name = $row['company_name'];
                            $company_street_address = $row['company_street_address'];
                            $city = $row['city'];
                            $state = $row['state'];
                            $zip = $row['zip'];
                            $created_date = $row['created_date']; 
                            
        ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $title ?></td>
                        <td><?php echo $company_name ?></td>
                        <td><?php echo $company_street_address ?></td>
                        <td><?php echo $city ?></td>
                        <td><?php echo $state ?></td>
                        <td><?php echo $zip ?></td>
                        <td><?php echo $created_date ?></td>
                         <td>
                            <a href="view_details_account.php?id=<?php echo $id ?>" class="badge badge-info">View Details</a>
                            
                        </td>
                    </tr>
                    <?php
    }
}
?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
?>
<script>
//Delete 
$(document).ready(function() {
    $('#servicetable').DataTable({
    });
});
</script>
