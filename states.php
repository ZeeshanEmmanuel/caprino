<?php
include('inc/config.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fetch all states from tbl_state
$query = "SELECT state_name FROM tbl_state ORDER BY state_name ASC";
$result = mysqli_query($conn, $query);
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
    <div class="state-sidebar">
        <h3>Select a State</h3>
        <ul>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $state = $row['state_name'];
                    // Generate URL-friendly slug, e.g. "Alabama Mechanic's Lien" => "alabama-liens.php"
                    $slug = strtolower(str_replace([' ', '’', '’', '&'], ['-', '', '', 'and'], $state)) . '.php';
                    echo '<li><a href="' . $slug . '">' . $state . '</a></li>';
                }
            } else {
                echo '<li>No states found.</li>';
            }
            ?>
        </ul>
    </div>
</div>
