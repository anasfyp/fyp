<!DOCTYPE html>
<html>
<head>
	<title>Material Enstimation Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		$(document).ready(function() {
          $("#myButton").click(function() {
             $("#myButton").after('<input type="text" id="textInput" value="">');
          });
        });

	</script>
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
              	<li>Paint calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">Paint calculator</h3>
			</div>
		</div>
	</div>

    <div id="content"><!--content start-->
		<div class="container border"><!--container start-->    
           <!--products-->
		    <div class="article-content">
		    	<div class="about-calculator">
		    		<p>Calculate how many paint are needed for your wall by entering your wall dimensions and by entering you ceiling dimensions.</p>
		    	</div>
		    	<div class="calculator-form-wrap">
		           <form method="post" class="calculator-form">
		           	 <div class="cb-calculator-form" id="cb-calculator-form">
		           	 	    <div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px;">Walls and surface to paint</label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>
		           	 	
		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Width: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 					<option value="in">in</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 					<option value="in">in</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Add Surface +">
		           	 		</div>
		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4 " style="margin-top: 10px;">

		           	 				<input type="checkbox" name="ceiling" value="ceiling" id="myButton"> Check if painting ceiling<br>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
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
		           	 				<input type="number" name="" for="width">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 					<option value="in">in</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Height: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>
		           	 					<option value="in">in</option>
		           	 				</select>
		           	 			</div>
		           	 		</div>
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Add Opening +">
		           	 		</div>
		           	 		
		           	 		
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Calculate">
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result">
		           	 		<h3>Enstimate Material: </h3>
		           	 	</div>
		           	 	<div class="form-result">
		           	 		
		           	 	</div>
		           	 </div>
		           </form>
		    	</div>
		    </div>
		    	
		    </div><!--container-->
		</div><!--content finish-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		

</body>
</html>