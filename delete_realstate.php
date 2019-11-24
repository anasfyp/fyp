<!-- Session Start -->


<?php
include 'db.php';


?>

<?php

$id=$_REQUEST['id'];
$query = "DELETE FROM realstate_admin WHERE realstate_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
echo "<script type='text/javascript'> document.location = 'realstateadmin.php'; </script>";
?>