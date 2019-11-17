
<?php
include("db.php");

$result_per_page=20;
session_start();

$name=$_SESSION['username'];

if(!isset($_SESSION['username']))
{header('location:index.php');}




?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
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

<span class="title"><span class="title"><a href="logout.php" >Logout</a></span></span>
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
   <div class="page-container">



<div class="main-content">
<div class="container-fluid">
<!-- <button><a href="logout.php" class="btn btn-dan">Logout</a></button> -->

<div class="row">
<div class="col-md-12">
  
  <div class="container">
    <div class="main-title">
        <h2>Our <span style="color: orange;">Services</span>
        </h2>
        <div class="line"></div>
      </div>
    <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark  text-white  text-center">
          <th>#</th>        
          <th>service Name</th>
          <th>service type</th>
          <th>price</th>
          <th>description</th>
          <th>Image</th>
          <th>Book</th>
          
        
<!-- 
          <li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li> -->
      </tr>
      <?php
$sql1="SELECT * FROM `serviceadd`";
$result1=mysqli_query($con,$sql1);
 $number_of_results=mysqli_num_rows($result1);

 
 

      ?>

<?php



 $number_of_pages=ceil($number_of_results/$result_per_page);
if(!isset($_GET['page']))
{

$page=1;

}
else
{

$page=$_GET['page'];

}



$this_page_first_result=($page-1)*$result_per_page;

$sql="SELECT * FROM `serviceadd`  Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  

  ?>

    <tr class="text-center">
      <th><?php echo $res['service_id']; ?></th>        
      <th><?php  echo $res['service_name'];?></th>
      <th><?php echo $res['service_type'];?></th>
      <th><?php echo $res['service_price'];?></th>
      <th><?php echo $res['service_Description'];?></th>
      
      <th style="width:200; height:200;"><img src="service/<?php echo $res['service_img'];?>" style="width:200px;height:200px"></th>
      <th><button class="btn-success btn text-white" id="a" ><a href="customerbook.php?service_id=<?php echo $res['service_id']; ?>" style="color:white;">book</a></button></th>
      

  </tr>
  <script type="text/javascript">
    $('.delete_link').click(function(e){
        var result = confirm("Are you sure you want to delete this user?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>














<?php

}

 if($page>1)
 {
   echo '<div class="pagination">
  


   <a href="index-3.php?page='.($page-1).'">Previous</a>





  
  
     </div>';

 }


for($i=1;$i<=$number_of_pages;$i++)
{
/*   echo '<div class="pagination">
  


  <a href="index-3.php?page='.$i.'">'.$i.'</a>





  
  
   </div>';
 */
 
}

if($i>$page)
 {
  /*  echo '<div class="pagination">
  


   <a href="index-3.php?page='.($page+1).'">Next</a>





  
  
     </div>'; */

 }




?>



    </table>
    
    </div>
    
  </div>

</div>
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
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>   
</body>
</html>

