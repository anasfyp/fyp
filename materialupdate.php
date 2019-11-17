
<?php
$id=$_GET['service_id'];



session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}




include_once("db.php");
$q="SELECT * FROM `products` WHERE 'product_id'='$id'";
$result=mysqli_query($con,$q);

?>

<html>

<head>
  <title>E-Construction</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Construction</title>
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


<body>
<div id="top" class="nav-fixed"><!--top begin-->
    <div class="container"><!--top container begin-->
      <!--col-md-6 offer-->
      <div class="col-md-5 offer"></div>
            <!--col-md-6 offer finish-->
      <div class="col-md-7"><!--col-md-6 begin-->
        <ul class="menu">
          <li>
            <a href="register.php"><i class="glyphicon glyphicon-user"></i> sign in</a>
          </li>
          <li>
            <a href="register.php"><i class="glyphicon glyphicon-user"></i> log in</a>
          </li>
        </ul>
      </div><!--col-md-6 finish-->
    </div><!--top container finish-->
  </div><!--top menu finish-->
  
  <!-- navbar -->
   <div class="brandWrap"> <!-- brandWrap start -->
      <div class="container top-margin">
        <div class="col-md-6">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <div class="navbar-header">
           <a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
           </div>
        </div>
        <div class="col-md-6">
          <div class="nav navbar-nav">
            <div class="search-box">
            <div class="input-group">
              <input type="search" name="search" class="search" placeholder="Search your product">
              <button type="submit" name="search" class="search-button">
                  <span class="glyphicon glyphicon-search" ></span>
              </button>   
            </div>
            </div>  
          </div>
        </div>
      </div>
   </div> <!-- brandWrap finish -->

   <!-- navbar start -->
   <div id="navbar" class="navbar navbar-default">
    <div class="container">
      <div class="padding-nav"><!--padding-nav start-->
            <ul class="nav navbar-nav left"><!--navbar-nav start-->
               <li><a href="index.php">Home</a></li>
               <li><a href="#">plots</a></li>
               <li><a href="#">Architectural Solution</a></li>
               <li><a href="#">Materials</a></li>
               <li><a href="#">Services</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
    </div>
   </div>


    <div class="container">
      <div class="main-title">
        <h2>Add <span style="color: orange;">Services</span>
        </h2>
        <div class="line"></div>
      </div>


        <?php
while ($row=mysqli_fetch_array($result)){
  
  ?>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Service Name</label>
          <input type="text" name="Service_Name" value="<?php echo $row['service_name']; ?>"> 
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">service image</label>
          
         <input type="file" name="service_image" class="form-control" value="<?php echo $row['service_img']; ?>"> 
                <img src="service/$row['service_img'];" /> 
        
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">service type</label>
          <input type="text" name="service_type" class="form-control" value="<?php echo $row['service_type']; ?>"> 
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Service Price</label>
          <input type="text" name="Service_price" class="form-control" value="<?php echo $row['service_price']; ?>"> 
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Service Description</label>
          <input type="text" name="Service_description" class="form-control" value="<?php echo $row['service_Description']; ?>"> 
        </div>
        <?php
}
?>

        <input type="submit" name="Submit" class="btn btn-primary">
    </form>





<form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">date</label>
          <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Name">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Product Title</label>
          <input type="text" name="product_title" class="form-control" value="<?php echo $row['product_title']; ?>" id="exampleInputPassword1" placeholder="Enter servicee Type">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">product image1</label>
          <input type="file" name="product_image1" class="form-control" value="<?php echo $row['product_img1']; ?>" id="exampleInputPassword1" placeholder="">
        </div>


         <div class="form-group">
          <label for="exampleInputPassword1">product image2</label>
          <input type="file" name="product_image2" class="form-control" value="<?php echo $row['product_img2']; ?>" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">product image3</label>
          <input type="file" name="product_image3" class="form-control" value="<?php echo $row['product_img3']; ?>" id="exampleInputPassword1" placeholder="">
        </div>       
      <div class="form-group">
          <label for="exampleInputPassword1">product Price</label>
          <input type="text" name="product_price" class="form-control" value="<?php echo $row['product_price']; ?>" id="exampleInputPassword1" placeholder="Enter servicee Type">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">sales Price</label>
          <input type="text" name="sales_Price" class="form-control" value="<?php echo $row['sales_price']; ?>" id="exampleInputPassword1" placeholder="Service Price">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Product Description</label>
          <input type="text" name="Product_Description" class="form-control" value="<?php echo $row['product_desc']; ?>" id="exampleInputPassword1" placeholder="Enter Discription">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Quantity</label>
          <input type="text" name="Quantity" class="form-control" value="<?php echo $row['qty']; ?>" id="exampleInputPassword1" placeholder="Enter Discription">
        </div>


<div class="form-group">
          <label for="exampleInputPassword1">Status</label>
          <input type="text" name="Status" class="form-control" value="<?php echo $row['status']; ?>" id="exampleInputPassword1" placeholder="Enter Discription">
        </div>


<div class="form-group">
          <label for="exampleInputPassword1">Product Keyword</label>
          <input type="text" name="Product_Keyword" class="form-control" value="<?php echo $row['product_keyword']; ?>" id="exampleInputPassword1" placeholder="Enter Discription">
        </div>

        <input type="submit" name="submit" class="btn btn-primary">
    </form>













</div>


<footer class="footer_area"><!-- footer start -->
     <div class="container"><!-- container start -->
      <div class="row footer-row"><!-- row start -->
        <div class="col-md-4">
          <div class="footer-widget">
            <div class="widget-title">
              <h4><strong>about us</strong></h4>
            </div>
            <div class="text-widget">
             <p>
              Building isn’t just a job. At the Construction Company, it is our passion. With every project we undertake, we set the bar high and provide the best people in the industry, with a true love of what we do to make our Customers’ vision a reality.
             </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          
            <div class="footer-widget">
              <div class="widget-title company-links">
                <h4><strong>Company links</strong></h4>
                <ul>
                  <li><a href="#aboutus-container">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              </div>
        </div>
        <div class="col-md-4">
          
            <div class="footer-widget">
              <div class="widget-title">
                <h4><strong>Contact info</strong></h4>
                <ul class="cantact-info">
                  <li> <i class=" fa fa-map-marker" aria-hidden="true"></i>   
                           <br> Karachi, Pakistan 
                  </li>
                  <li> <i class=" fa fa-phone" aria-hidden="true"></i>
                       (92-21)34025818-03343348028
                  </li>
                  <li> <i class=" fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#"> info@econstruction.com</a></li>
                </ul>
              </div>
              </div>
        </div>
      </div>

     </div>
   </footer>

</body>

</html>




<?php

if(isset($_POST['Submit']))
{
    $id=$_GET['service_id'];

    $Service_Name=$_POST['Service_Name'];

unlink("service/");

$name       = $_FILES['service_image']['name'];  
$temp_name  = $_FILES['service_image']['tmp_name'];  
if(isset($name)){
    if(!empty($name)){      
        $location = "service/";      
        if(move_uploaded_file($temp_name, $location.$name)){
            echo 'File uploaded successfully';
        }
    }       
}  else {
    echo 'You should select a file to upload !!';
}





$service_type=$_POST['service_type'];
$Service_price=$_POST['Service_price'];
$Service_description=$_POST['Service_description'];

if($Service_Name=="" or       $service_type=="" or $Service_price=="" or $Service_description=="")
{


 echo "<script>alert('Please fill all the fields')</script>";

}


else{
  
$q="UPDATE `serviceadd` SET `service_name`='$Service_Name',`service_img`='$name',`service_type`='$service_type',`service_price`='$Service_price',`service_Description`='$Service_description' WHERE `service_id`='$id'";


$query=mysqli_query($con,$q);
header('location:updateservices.php');


}
}
?>








