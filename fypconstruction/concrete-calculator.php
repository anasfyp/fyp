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
              	<li>Concrete calculator</li>
              </ul>
			</div><!--col-sm-12 finish-->
		</div>	
	</div>

	<div class="container">
		<div class="col-sm-12">
			<div class="title-page">
				<h3 class="page-title">concrete calculator</h3>
			</div>
		</div>
	</div>

    <div id="content"><!--content start-->
		<div class="container border"><!--container start-->    
           <!--products-->
		    <div class="article-content">
		    	<div class="about-calculator">
		    		<p>Calculate how many bags of sand,cement and agregate are needed for your project by entering concrete structure.</p>
		    	</div>
		    	<div class="calculator-form-wrap">
		           <form method="post" class="calculator-form">
		           	 <div class="cb-calculator-form" id="cb-calculator-form">
		           	 	    		           	 	    
		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width">Width: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="text" id="n1" />
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Lenght: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="text" id="n2" />
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Thickness/Hieght: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				<input type="text" id="n3" />
		           	 				<span class="unit" style="margin-left: 30px; font-weight: normal;">ft</span>
		           	 			</div>
		           	 		</div>

		           	 		<div class="row cb-form-group">
		           	 			<div class="col-xs-5 col-md-4">
		           	 				<label id="width">Concrete Mix: </label></div>
		           	 			<div class="col-xs-7 col-md-8">
								
								<select id="combo" class="select-form" onchange="doMath()">
								<label>Select Ratio:</label>
								<option value="1">1:2:4</option>
								<option value="2">1:1.5:3</option>
								<option value="3">1:1:2</option>
								</select>
		           	 			</div>


		           	 		</div>
		           	 		
		           	 		<div class="">
		           	 			<input type="button" onclick="doMath();" value="Calculate">
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result">
		           	 		<h3>Enstimate Material: </h3>
		           	 	</div>
		           	 	<div class="form-result" id="res1"></div>
		           	 	<div class="form-result" id="res2"></div>
		           	 	<div class="form-result" id="res3"></div>
		           	 </div>
		           </form>
		    	</div>
		    </div>
		    	
		    </div><!--container-->
		</div><!--content finish-->


<script type="text/javascript">
    function doMath()
    {
    	if (combo.value == 1){
        var n1 = document.getElementById('n1').value;
        var n2 = document.getElementById('n2').value;
        var n3 = document.getElementById('n3').value;
        // Add them together and display
        var v = parseFloat(n1) * parseFloat(n2) * parseFloat(n3);
        var q = parseFloat(v) * 1.54;
        var r = (1/7) * q;
        var s = Math.round(r / 1.25);

        var t = (2/7) * q;
        var u = Math.round(t / 1.25);

        var v = (4/7) * q;
        var w = Math.round(v / 1.25);


        document.getElementById("res1").innerHTML = "No of Cement Begs required are : "+s;
        document.getElementById("res2").innerHTML = "No of Sand Begs required are : "+u;
     	document.getElementById("res3").innerHTML = "No of Agrigate Begs required are : "+w;
           }

           else if (combo.value == 2) {
           	var n1 = document.getElementById('n1').value;
        var n2 = document.getElementById('n2').value;
        var n3 = document.getElementById('n3').value;
        // Add them together and display
        var v = parseFloat(n1) * parseFloat(n2) * parseFloat(n3);
        var q = parseFloat(v) * 1.54;
        var r = (1/7) * q;
        var s = Math.round(r / 1.25);

        var t = (1.5/7) * q;
        var u = Math.round(t / 1.25);

        var v = (3/7) * q;
        var w = Math.round(v / 1.25);


        document.getElementById("res1").innerHTML = "No of Cement Begs required are : "+s;
        document.getElementById("res2").innerHTML = "No of Sand Begs required are : "+u;
     	document.getElementById("res3").innerHTML = "No of Agrigate Begs required are : "+w;
           }

           else if(combo.value == 3){
           	           	var n1 = document.getElementById('n1').value;
        var n2 = document.getElementById('n2').value;
        var n3 = document.getElementById('n3').value;
        // Add them together and display
        var v = parseFloat(n1) * parseFloat(n2) * parseFloat(n3);
        var q = parseFloat(v) * 1.54;
        var r = (1/7) * q;
        var s = Math.round(r / 1.25);

        var t = (1/7) * q;
        var u = Math.round(t / 1.25);

        var v = (2/7) * q;
        var w = Math.round(v / 1.25);


        document.getElementById("res1").innerHTML = "No of Cement Begs required are : "+s;
        document.getElementById("res2").innerHTML = "No of Sand Begs required are : "+u;
     	document.getElementById("res3").innerHTML = "No of Agrigate Begs required are : "+w;
           }
    }
</script>
</body>
</html>