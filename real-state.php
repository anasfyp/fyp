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
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
   <div><!-- main div -->
    
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
               <li><a href="#">Real State</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
   	</div>
   </div>
   <!-- nav bar finish -->
   <!-- slider -->
   <section class="slidebar">
      <div id="carousel-example-generic" class="carousel slide adjust" data-ride="carousel">
  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="slider/sample-1.jpg" alt="">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	    <div class="item">
	      <img src="slider/sample-2.jpg" alt="" title="">
	      <div class="carousel-caption">
	      </div>
	    </div>
      <div class="item">
        <img src="slider/sample-3.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
	    
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
    </div>
   </section>

   <section class="search-section">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="section-title center">
             <h1>Search property for sale</h1>
           </div>
         </div>
       </div>
       <div class="">
         <form method="post" action="" class="property-search-form">
           <div class="row">
             <div class="col-md-2" style="margin-top: -2px;">
               <div class="select-option">
                 <select class="select-city">
                   <option>Type</option>
                 </select>
               </div>
             </div>
             <div class="col-md-6">
               <div class="search-input">
                 <input type="text" name="search-location" class="from-control v2" placeholder="Enter Location..." >
               </div>
             </div>
             <div class="col-md-2" style="margin-top: -2px;">
               <div class="select-option">
                 <select class="select-city">
                   <option>Purpose</option>
                 </select>
               </div>
             </div>
             <div class="col-md-2" style="margin-top: -2px;">
               <div class="submit-btn">
                 <input type="submit" name="find" value="Search" class="btn search">
               </div>
             </div>
           </div>
           
          <div class="row">
             <div class="col-md-3" style="margin-top: -2px;">
               <div class="select-option">
                 <select class="select-city">
                   <option>Bads</option>
                 </select>
               </div>
             </div>
             <div class="col-md-3">
               <div class="search-input">
                 <input type="text" name="search-location" class="from-control v2" placeholder="Min Price">
               </div>
             </div>
             <div class="col-md-3" style="margin-top: -6px;">
               <div class="select-option">
                 <input type="text" name="search-location" class="from-control v2" placeholder="Max Price">
               </div>
             </div>
             <div class="col-md-3" style="margin-top: -2px;">
               <div class="submit-btn">
                 <input type="text" name="search" class=" from-control" placeholder="Total Area">
               </div>
             </div>
           </div>
         </form>
       </div>
      
     </div>
   </section>
   <!-- start of view property -->
   <section class="search-property">
     <div class="container">
       <div class="row">
         <div class="col-md-12 heading" style="text-align: center; margin-top: 50px;">
           <h1>Houses For Sale All Over Pakistan</h1>
         </div>
       </div>

       <div class="row property-border" style="margin-bottom: 10px;">
         <div class="col-md-4 image">
           <a href=""><img src="archetectural-solution/architectureimg/home.jpg" style="width: 400px;" class="img-responsive"></a>
         </div>
         <div class="col-md-8 property-information">
           <div class="property-content">
             <span class="currency">
               PKR
             </span>
             <span class="property-price">
               75,000,000
             </span>
           </div>
           <div class="property-title">
             <span class="property-location">
               <!-- <h4>DHA Phase 8,DHA Phase</h4> -->
               DHA Phase 8,DHA Phase
             </span>
           </div>
           <div class="property-rooms">
             <span><i class="fa fa-bed"></i> 8</span>
             <span><i class="fa fa-shower">8</i></span>
           </div>
           <div class="property-discription">
             <p>
               Rare opportunity to move in your dream home! Offering this 9 marla boulevard corner house for sale in Bahria Town Phase 8. The &nbsp;fully furnished house is well constructed, comprises of spacious rooms, wide lounge and airy kitchen. The area is connected to all parts of Rawalpindi via the GT Road. You won't have to worry about any living facility with provision of electricity, gas and water supply. Residents of Bahria Town Phase 8 enjoy a variety of living amenities situated in the vicinity such as schools, parks, shops and restaurants. Contact the agent for more information. Just mention graana.com to get a better response.
             </p>
           </div>
             
           
         </div>
       </div>
     </div>
   </section>

   
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

    </div><!-- <main div closed -->
   
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>