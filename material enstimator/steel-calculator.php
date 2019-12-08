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
              	<li>Steel calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">Steel calculator</h3>
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
		           	 				<label id="width">Length:</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="length">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>		           	 	
		           	 				</select>
		           	 			</div>


			           	</div>

		           	 	

		           	 	

		           	 	<div class="row cb-form-group">
                             
		           	 	   <div class="col-xs-5 col-md-4">
		           	 				<label id="width">No of steel:</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="no-of-steel">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>		           	 	
		           	 				</select>
		           	 			</div>

		           	 	</div>

                        <div class="row cb-form-group">
                               <div class="col-xs-5 col-md-4">
		           	 				<label id="width">Diameter:</label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="number" name="" for="width" id="diameter-of-steel">
		           	 				<select name="" id="" class="form-select">
		           	 					<option value="ft">ft</option>		           	 	
		           	 				</select>
		           	 			</div>
                            
		           	 	</div>
	 		
		           	    <div class="">
                          <input type="button" name="" value="Calculate" onclick="steelCalculation();">
		           	 			
		           	 	</div>
		           	 	

		           	 	<div class="cb-form-result">
		           	 		<h3>Enstimate Material: </h3>
		           	 	</div>
		           	 	<div class="form-result">
		           	 		<strong>Steel</strong>
		           	 		<div id="result">
		           	 			
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