<?php
include('db_connect.php');
$type=$_GET['type'];
$sub_type=$_GET['sub_type'];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

 
$sql = "INSERT INTO `econstruction`.`property_type` (`type`, `sub_type`)
 VALUES ('$type', '$sub_type')";



if ($conn->query($sql) === TRUE) 
{
echo '<script language="javascript">';
  echo 'alert("Your Property Submit Sucssfully.")';
  echo '</script>';
    include ("type.php");
}

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


