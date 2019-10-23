<?php
include_once("db.php");


$id=$_GET['service_id'];

$q="DELETE FROM `serviceadd`where `service_id`=$id";

mysqli_query($con,$q);   
header('location:updateservices.php');
?>