<?php 
include_once("db_connect.php");
   $images = array();
   foreach($_FILES['images']['name'] as $key=>$val){        
        $upload_dir = "uploads/";
        $upload_image = $upload_dir.$_FILES['images']['name'][$key];
		$filename = $_FILES['images']['name'][$key];		
        if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$upload_image)){
            $images[] = $upload_image;
            $customer_id=$_POST['customer_id'];
            
			$insert_sql = "INSERT INTO realstate_pics(image_id, image, customer_id) 
				VALUES('', '".$filename."', '".$customer_id."')";
			mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));
        }
    }
?>

<?php
include 'config.php';   


if(isset($_POST['images']))
{
     if($_POST['Purpose']!=""&&$_POST['Property_type']!=""&&$_POST['subtype']!=""&&$_POST['Select_city']!=""&&$_POST['Location']!=""&&$_POST['Property_Title']!=""&&$_POST['Description']!=""&&$_POST['Price']!=""&&$_POST['Land_area']!=""&&$_POST['Unit']!=""&&$_POST['Bedrooms']!=""&&$_POST['Bathrooms']!=""&&$_POST['phone_no']!=""&&$_POST['cell_no']!=""&&$_POST['Email']!=""&&$_POST['customer_id']!="")
    {

$Purpose=$_POST['Purpose'];
$Property_type=$_POST['Property_type'];
$subtype=$_POST['subtype'];
$Select_city=$_POST['Select_city'];
$Location=$_POST['Location'];
$Property_Title=$_POST['Property_Title'];
$Description=$_POST['Description'];
$Price=$_POST['Price'];
$Land_area=$_POST['Land_area'];
$Unit=$_POST['Unit'];
$Bedrooms=$_POST['Bedrooms'];
$Bathrooms=$_POST['Bathrooms'];
$phone_no=$_POST['phone_no'];
$cell_no=$_POST['cell_no'];
$Email=$_POST['Email'];
$customer_id=$_POST['customer_id'];


      
  
          $insert="INSERT INTO `econstruction`.`realstate_admin` (`Purpose`, `Property_type`, `subtype`, `Select_city`, `Location`,`Property_Title`, `Description`, `Price`, `Land_area`, `Unit`,`Bedrooms`, `Bathrooms`, `phone_no`, `cell_no`,`Email`, `customer_id`) VALUES ('$Purpose', '$Property_type', '$subtype', '$Select_city','$Location','$Property_Title','$Description','$Price','$Land_area','$Unit','$Bedrooms','$Bathrooms','$phone_no','$cell_no','$Email','$customer_id')";
         $insert_pc=mysqli_query($conn,$insert);
       if($insert_pc)
    {
        echo "<script>alert('Property Has been Insert!')</script>";

}
    }
    else{
        echo "<script>alert('Please Fill All Fields!')</script>";
        }
}
?> 






<div class="row">
	<div class="image_gallery">
		<?php
		if(!empty($images)){ 
			foreach($images as $image){ ?>
			<ul>
				<li >
					<img class="images" src="<?php echo $image; ?>" alt="">
				</li>
			</ul>
		<?php }	}?>
	</div>
</div>
