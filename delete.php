<?php
include("../db/db.php");
$architecture_id = $_GET['architecture_id'];
$sql = "DELETE FROM `add_architecture` WHERE architecture_id=$architecture_id";
$query = mysqli_query($con,$sql);
if($query){
	unlink('architectureimg/'.$_GET['image_1']);
	unlink('architectureimg/'.$_GET['image_2']);
	unlink('architectureimg/'.$_GET['image_3']);
}
header('location:showArchetecturalDesign.php');

?>