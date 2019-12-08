<!DOCTYPE html>
<html>
<head>
	<title>Material Enstimation Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script type="text/javascript" src="calculator.js"></script> -->
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
              	<li>Flooring Calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">Flooring Calculator</h3>
			</div>
		</div>
	</div>

    <div id="content"><!--content start-->
		<div class="container border"><!--container start-->    
           <!--products-->
		    <div class="article-content">
		    	<div class="about-calculator">
		    		<p>Calculate how many tiles are needed for your project by entering your wall dimensions and size of tile.</p>
		    	</div>
		    	<div class="calculator-form-wrap">
		           <form method="post" class="calculator-form">
		           	 <div class="cb-calculator-form" id="cb-calculator-form">
		           	 	    <div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px;">Area of room</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>
		           	 	    
		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">
		           	 			    <label id="width">Width: </label>
		           	 		    </div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="roomWidth" required="">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height: </label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" id="roomHeight" required="">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px;">Tile Size </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Width: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" id="tileWidth" required="">
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">cm</span>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height: </label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" id="tileHeight" required="">
                                    <span class="unit" style="margin-left: 30px; font-weight: normal;">cm</span>
		           	 			</div>
		           	 		</div>

		           	 		
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Calculate" onclick="calculateTile();" class="button">
		           	 			<!-- <button type="submit" value="calculate" onclick="calculateTile();">Calculate</button> -->
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result" id="">
		           	 		<h3>Enstimate Material: </h3>
		           	 		<div class="form-result">
		           	 		   <strong>Tiles Needed:</strong>
		           	 		   <span id="result"></span><br> 
		           	 		   <strong>For cutting purpose:</strong>
		           	 		   <span id="cutting"></span>
		           	 		   <strong>boxes</strong>
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