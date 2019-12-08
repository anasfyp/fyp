<!DOCTYPE html>
<html>
<head>
	<title>Material Enstimation Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div id="navbar" class="navbar navbar-default">
   	<div class="container">
   		<div class="navbar-header">
   			<a href="index.php" class="navbar-brand">E-construction</a>
   		</div>
   		<div class="padding-nav"><!--padding-nav start-->
            <ul class="nav navbar-nav left"><!--navbar-nav start-->
               <li><a href="index.php">Home</a></li>
               <li><a href="shop.php">Shop</a></li>
               <li><a href="checkout.php">My Account</a></li>
               <li><a href="contact.php">Contact Us</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
   	</div>
   </div>

   <div id="breadcrumb"><!--breadcrumb start-->
		<div class="container"><!--container start-->
			<div class="col-sm-12"><!--col-sm-12 start-->
              <ul class="breadcrumb">
              	<li><a href="index.php">Home</a></li>
              	<li>Steel slab calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">Steel slab calculator</h3>
			</div>
		</div>
	</div>

    <div id="content"><!--content start-->
		<div class="container border"><!--container start-->    
           <!--products-->
		    <div class="article-content">
		    	<div class="about-calculator">
		    		<p>To calculate how much steel is used in slab. By entering your room dimension.Diameter of steel i.e main bar and distribution bar distance beteen bars.</p>
		    	</div>
		    	<div class="calculator-form-wrap">
		           <form method="post" class="calculator-form">
		           	 <div class="cb-calculator-form" id="cb-calculator-form">
		           	 	    
		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="length">Length: </label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="length" id="slabLength">
		           	 				<select name="" class="form-select">
		           	 					<option value="meter">meter</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Breadth: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" id="slabBrigth">
		           	 				<select name="" id="steelBreath" class="form-select">
		           	 					<option value="meter">meter</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Diameter of bar: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="diameter" id="diameter">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">mm</span>
		           	 			</div>
		           	 		</div>


		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Distance: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="distance" id="distance">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">mm</span>
		           	 			</div>
		           	 		</div>



		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Calculate" onclick="steelSlab();">
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result">
		           	 		<h3>Enstimate Material: </h3>
		           	 		<div class="form-result">
		           	 		   <strong>Total length of steel:</strong>
                               <div class="total-area" id="total-area">
                               	 
                               </div>
		           	 		   <br>
		           	 		   <strong>Main Bar length:</strong>
                                  <div class="main-bar" id="main-bar">
                                  	
                                  </div>
		           	 		   <br>
		           	 		   <strong>Distribution bar length:</strong>
		           	 		   <div class="distribution-bar" id="distribution-bar">
		           	 		   	
		           	 		   </div>

		           	 	    </div>
		           	 	</div>
		           	 	
		           	 </div>
		           </form>
		    	</div>
		    </div>
		    	
		    </div><!--container-->
		</div><!--content finish-->
        <script type="text/javascript" src="calculator.js"></script>
</body>
</html>