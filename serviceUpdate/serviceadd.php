<?php
include("db.php");



if(!isset($_SESSION['username']))
{header('location:index.php');}



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
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Service Name</label>
          <input type="text" name="Service_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">service image</label>
          <input type="file" name="service_image" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">service type</label>
          <input type="text" name="service_type" class="form-control" id="exampleInputPassword1" placeholder="Enter servicee Type">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Service Price</label>
          <input type="text" name="Service_price" class="form-control" id="exampleInputPassword1" placeholder="Service Price">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Service Description</label>
          <input type="text" name="Service_description" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription">
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
                        86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road 
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
      </div><!-- row finish -->

     </div><!-- container finish -->
   </footer><!-- footer finish -->

</body>

</html>


<?php


if(isset($_POST['submit']) )
{
$Service_Name=$_POST['Service_Name'];
$service_type=$_POST['service_type'];
$Service_price=$_POST['Service_price'];
$Service_description=$_POST['Service_description'];

$filename=$_FILES['service_image']['name'];

$filetempname=$_FILES['service_image']['tempname'];
// $folder="service/$filename";
move_uploaded_file($filetempname,"serviceadd/".$filename);

if($Service_Name=="" or $service_type=="" or $Service_price=="" or $Service_description=="")
{


echo "<script>alert('Please fill all the fields')</script>";

}

else
{





$insert_service="INSERT INTO `serviceadd`(`service_name`, `service_img`, `service_type`, `service_price`, `service_Description`) VALUES ('$Service_Name','$filename','$service_type','$Service_price','$Service_description')";

    $run_customer=mysqli_query($con,$insert_service);
    if($run_customer)
    {
echo"<script>alert('Service Inserted');</script>";
}

    else

    {
echo"<script>alert('error');</script>";

    }


}
}
?>