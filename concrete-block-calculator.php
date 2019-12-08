<!DOCTYPE html>
<html>
<head>
	<title>Material Enstimation Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="app.js"></script>
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
              	<li>concrete block calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">concrete block calculator</h3>
			</div>
		</div>
	</div>

    <div id="content"><!--content start-->
		<div class="container border"><!--container start-->    
           <!--products-->
		    <div class="article-content">
		    	<div class="about-calculator">
		    		<p>Calculate how many block are needed for your project by entering your wall dimensions and size of block.</p>
		    	</div>
		    	<div class="calculator-form-wrap">
		           <form method="post" class="calculator-form">
		           	 <div class="cb-calculator-form" id="cb-calculator-form">
		           	 	    <div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px;">Walls/Surface</label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>

		           	 	
		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Width Wall1: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="width-room1">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>


		           	 			 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Width wall2:</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="width-room2">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>


		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height:</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" id="height-room">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>
		           	 		

		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px; margin-top: 20px;">Opening of a wall</label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>

                            <div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Width: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="width-opening" for="width" id="opening-width" value="0">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="height-opening" id="opening-height" value="0">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>
		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Block Size: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<select name="" id="size-of-block" class="select-form" id="size-of-block">
		           	 					<option value="128">16"x8"</option>
		           	 					<option value="64">16"x4"</option>
		           	 					<option value="48">12"x4"</option>
		           	 					<option value="96">
		           	 						12"x8"
		           	 					</option>
		           	 					<option value="32">8"x4"</option>
		           	 					<option value="64">8"x8"</option>
		           	 						
		           	 				</select>
		           	 			</div>
		           	 		</div>
		           	 		
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Calculate" id="submit" onclick="concreteblockcalculator();">
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result">
		           	 		<h3>Enstimate Material: </h3>
		           	 	</div>
		           	 	<div class="form-result" id="form-result">
		           	 		
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