<?php 
include('header.php');
include('db_connect.php');

session_start();

$name=$_SESSION['username'];

if(!isset($_SESSION['username']))
{header('location:index.php');}



?>
<!DOCTYPE html>
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
    <script type="text/javascript" src="scripts/jquery.form.js"></script>
    <script type="text/javascript" src="scripts/upload_image.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include('container.php');?>

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
                        <a href="logout.php"><i class="glyphicon glyphicon-user"></i> logout</a>
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
   <div id="navbar" class="navbar navbar-inverse" style="background-color: #232323;">
    <div class="container">
        <div class="padding-nav"><!--padding-nav start-->
            <ul class="nav navbar-nav left"><!--navbar-nav start-->
               <li><a href="index.php">Home</a></li>
               <li><a href="#">plots</a></li>
               <li><a href="#">Architectural Solution</a></li>
               <li><a href="#">Materials</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">Real State</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
    </div>
   </div>
   




       <div class="container main-heading">
        <div class="row">
            <div class="col-md-12 heading">
                <h1>Post Your Property Ad</h1>
                <div class="divider"></div>
            </div>
        </div>
       </div>

        <div class="container"> 


	<form method="post" name="image_upload_form" id="image_upload_form" enctype="multipart/form-data" action="upload_image.php" class="properity-form"> 


          <div class="row">
             <div class="col-md-4 form-group">
                    <h5 for="purpose"><b>Purpose:</b></h5>
                    <select id="Purpose" name="Purpose" class="form-control">
                        <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                    </select>
            </div>

            <div class="col-md-4 form-group">
                <h5 for="type"><b>Type:</b></h5>
                    <select id="Property_type" name="Property_type" class="form-control">
                        <option value="Home">Home</option>
                        <option value="Plot">Plot</option>
                        <option value="Commercial">Commercial</option>
                    </select>
            </div>
            
            <div class="col-md-4 form-group">
                <h5 for="stype"><b>Sub Type: </b></h5>
                    <select id="subtype" name="subtype" class="form-control">
                        <option value="House">House</option>
                        <option value="Flat">Flat</option>
                        <option value="Upper Portion">Upper Portion</option>
                        <option value="Lower Portion">Lower Portion</option>
                        <option value="Farmhouse">Farmhouse</option>
                        <option value="Room">Room</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="Residential Plot">Resitential Plot</option>
                        <option value="Commercial Plot">Commercial Plot</option>
                        <option value="Agricultural Plot">Agricultural Plot</option>
                        <option value="Industrial Land">Industrial Land</option>
                        <option value="Plot File">Plot File</option>
                        <option value="Plot Form">Plot Form</option>
                        <option value="Office">Office</option>
                        <option value="Shop">Shop</option>
                        <option value="Warehouse">Warehouse</option>
                        <option value="Factory">Factory</option>
                        <option value="Building">Building</option>
                        <option value="Other">Other</option>
                    </select>
            </div>
</div>



<div class="row">
            <div class="col-md-6 form-group">
                <h5><b>Select City:</b></h5>
 <select id="Select_city" name="Select_city" required class="form-control">
<option value="">Select City Name</option>
<?php 
$get_city="select * from cities order by city_name asc";
$run_city=mysqli_query($conn,$get_city);

while($row_city=mysqli_fetch_array($run_city))
{
$city_name=$row_city['city_name'];

echo "<option value='$city_name'>$city_name</option>";
}
?>
</select>
</div>

            <div class="col-md-6 form-group">
                <h5 for="location"><b>Enter Location:</b></h5>
                <input type="text" id="Location" name="Location" placeholder="Location" required class="form-control">
            </div>    
            </div><!-- row finish -->
            
        
        <div class="row">
            <div class="col-md-12 form-group">
                <h5 for="Property Title"><b>Property Title:</b></h5>
                <input type="text" id="Property_Title" name="Property_Title" placeholder="Property Title" required class="form-control">
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12 form-group">
                <h5><b>Discription:</b></h5>
                <textarea rows = "5" cols = "64" name = "Description" placeholder="Enter Description" class="form-control"></textarea>
            </div>
        </div>

      <div class="row">
            <div class="col-md-4 form-group">
                <h5 for="Price"><b>Price:</b></h5>
                <input type="number" id="Price" name="Price" placeholder="Price" required class="form-control">
            </div>

            <div class="col-md-4 form-group">
                <h5 for="Description"><b>Area Land:</b></h5>
                <input type="text" id="Land_area" name="Land_area" placeholder="Area Land" required class="form-control">
            </div>

            <div class="col-md-4 form-group">
                <h5 for="unit"><b>Unit:</b></h5>
                <select id="Unit" name="Unit" class="form-control">
                    <option value="Square Feet">Square Feet</option>
                    <option value="Square Yards">Square Yards</option>
                    <option value="Square Meters">Square Meters</option>
                    <option value="Marla">Marla</option>
                    <option value="Kanal">Kanal</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 form-group">
                <h5 for="Bedrooms"><b>Bedrooms:</b></h5>
                    <select id="Bedrooms" name="Bedrooms" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="1">6</option>
                        <option value="2">7</option>
                        <option value="3">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10+">10+</option>
                    </select>
            </div>

            <div class="col-md-6 form-group">
                <h5 for="Bathrooms"><b>Bathrooms:</b></h5>
                    <select id="Bathrooms" name="Bathrooms" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="1">6</option>
                        <option value="2">7</option>
                        <option value="3">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10+">10+</option>
                    </select>
            </div>
        </div>    
            
            
        <div class="row">
            

            <div class="col-md-4 form-group">
                <h5 for="phone_no"><b>Phone No:</b></h5>
                <input type="number" id="phone_no" name="phone_no" placeholder="Phone No" required class="form-control">
            </div>
            
            <div class="col-md-4 form-group">
                <label for="Cell No"><b>Cell No:</b></label>
                <input type="number" id="cell_no" name="cell_no" placeholder="Cell No" required class="form-control">
            </div>
            
            <div class="col-md-4 form-group has-feedback">
                <h5 for="Email"><b>Email:</b></h5>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input type="Email" id="Email" name="Email" placeholder="Property Title" required class="form-control">
            </div>
        </div>
                     
            <div class="form-group">
                <h4 for="customer_id"><b>Customer_id:</b></h5>
                <input type="text" id="customer_id" name="customer_id" placeholder="Customer ID" class="form-control"><br>
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Images (Choose Multiple Images to Upload)</label>
            </div>


    <input type="file" name="images[]" id="upload_files" multiple >
    <div class="image_uploading hidden">
        <label>&nbsp;</label>
        <img src="image_upload_status.gif" alt="Image Uploading......"/>
    </div>
    <input type="submit" name="images" value="submit">
	</form>
	<br>
	<div id="images_preview"></div>
	<br>	
	
</div>
<?php include('footer.php');?>

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
