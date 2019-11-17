<?php
include_once("db.php");


$id=$_GET['product_id'];

$q="DELETE FROM `products`where `product_id`=$id";

mysqli_query($con,$q);   
header('location:updatematerial.php');
?>




