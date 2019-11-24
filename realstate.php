<script src="js/app.js" type="text/javascript"></script>
<?php 
include('header.php');
include('db_connect.php');

require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct type FROM property_type";
$results = $db_handle->runQuery($query);

session_start();

$name=$_SESSION['username'];


if(!isset($_SESSION['username']))
{header('location:../login.php');}




if(isset($_POST['addcat']))
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
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getProname(val) {
    $.ajax({
    type: "POST",
    url: "getProname.php",
    data:'type='+val,
    success: function(data){
        $("#state-list").html(data);
        getCity();
    }
    });
}

</script>

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


	<form method="post" enctype="multipart/form-data" class="properity-form"> 


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
                    
<select name="Property_type" id="Property_type" class="form-control" onChange="getProname(this.value);">
<option value disabled selected>Select Type</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["type"]; ?>"><?php echo $country["type"]; ?></option>
<?php
}
?>
</select>
            </div>
            
            <div class="col-md-4 form-group">
                <h5 for="stype"><b>Sub Type: </b></h5>
<select name="subtype" id="state-list" class="form-control select2" onChange="getCity(this.value);">
<option value="">Select Sub Type</option>
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
                <input type="number" id="Price" name="Price" placeholder="Price" required class="form-control" min=1 oninput="validity.valid||(value='');">
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

<?php 
$sql = "SELECT * FROM login where username = '".$_SESSION['username'] ."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
         
            
        while($row = mysqli_fetch_array($result)){
                echo '<input type="hidden" id="customer_id" name="customer_id" value='.$row['id'].'><br/>';

        }
        
        // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records matching your query were found.";
    }
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
//mysqli_close($conn);
?>
    <button type="submit" class="btn btn-responsive btn-primary btn-sm"  name="addcat" data-toggle="tooltip" data-placement="bottom" title="Insert Data!">Submit</button>
    </form>


            <form method="post" name="image_upload_form" id="image_upload_form" enctype="multipart/form-data" action="upload_image.php" class="properity-form"> 

            <?php
            $sql = "SELECT * FROM login where username = '".$_SESSION['username'] ."'";
            if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
            echo '<input type="hidden" id="customer_id" name="customer_id" value='.$row['id'].'><br/>';
        }
        
        mysqli_free_result($result);
    } 
    else{
        echo "No records matching your query were found.";
    }
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} ?>


<input type="hidden" name="max_num" id="max_num" required value="<?php 
$randomid = mt_rand(100000,999999); 
echo $randomid; 
?>">

            <div class="form-group">
              <label for="exampleInputPassword1">Images (Choose Multiple Images to Upload)</label>
            </div>


    <input type="file" name="images[]" id="upload_files" multiple >
    <div class="image_uploading hidden">
        <label>&nbsp;</label>
        <img src="image_upload_status.gif" alt="Image Uploading......"/>
    </div>
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
