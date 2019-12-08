<!DOCTYPE html>
<html>
<head>
	<title>Material Enstimation Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		           	 	
	   						<table class="table table-bordered" id="item_table">
						       <tr>
						       <th>Enter 1st wall Width</th>
						       <th>Enter 2nd wall Width</th>
						       <th>Enter Height of Wall</th>
						       <th ><button type="button" name="add" class="btn btn-sm add" ><span class="glyphicon glyphicon-plus"></span></button>
						       </th>
						       </tr>
			       			</table>

			       			<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4 " id="ceiling-checkbox">

		           	 				<input type="checkbox" name="checkbox" id="checkbox-ceiling" onclick="" class="checkbox-ceiling">
		           	 				<b> Check if painting ceiling</b>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
                            </div>

                            <table class="table table-bordered" id="ceiling-table" style="margin-top: 10px; display: none;">
						       <tr>
						        <th>Enter ceiling Width</th>
						        <th>Enter ceiling  Height</th>
						       </tr>
						       <tr>
						       	<td><input type="number" name="ceiling-width" class="form-control" value="0" id="ceiling-width"></td>
						       	<td><input type="number" name="ceiling-height" class="form-control" value="0" id="ceiling-height"></td>
						       </tr>
			       			</table>
                            


		           	 		<div class="row cb-form-group">

		           	 			<div class="col-xs-5 col-md-4">

		           	 				<label id="width" style="font-weight: bold; margin-bottom: 10px; font-size: 20px; margin-top: 20px;">Areas to exclude (Windows,Doors)</label>
		           	 			</div>
		           	 			<div class="col-xs-7 col-md-8">
		           	 				
		           	 			</div>
		           	 		</div>

                            <table class="table table-bordered" id="item_table2">
						       <tr>
						       <th>Enter opening Width</th>
						       <th>Enter opening Height</th>
						       <th><button type="button" name="add2" class="btn btn-sm add2" ><span class="glyphicon glyphicon-plus"></span></button></th>
						       </tr>
			       			</table>

		           	 		
		           	 		<div class="">
		           	 			<input type="button" name="calculate" value="Calculate" onclick="calculatePaint();">
		           	 		</div>
		           	 	

		           	 	<div class="cb-form-result" id="">
		           	 		<h3>Enstimate Material: </h3>
		           	 		<div class="form-result">
		           	 		   <strong>New Paint: </strong>
		           	 		   <span id="new-paint"></span><br> 
		           	 		   <strong>Re Paint:</strong>
		           	 		   <span id="re-paint"></span>
		           	 		   
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


<script>
$(document).ready(function(){
 
		 $(document).on('click', '.add', function(){
		  var html = '';
		  html += '<tr>';
		  html += '<td><input type="number" name="paint_1[]" class="form-control paint_1" id="wall1" value="0"/></td>';
		  html += '<td><input type="number" name="paint_2[]" class="form-control paint_2" value="0" id="wall2"/></td>';
		  html += '<td><input type="number" name="paint_3[]" class="form-control paint_3" value="0" id="height"/></td>';
		  html += '<td><button type="button" name="remove" class="btn btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
		  $('#item_table').append(html);
		 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.paint_1').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter paint Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.paint_2').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter paint Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.paint_3').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });


    $('.ceil1').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });


      $('.ceil2').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
 });
 
});

</script>


<script type="text/javascript">
$(document).ready(function(){
 
		 $(document).on('click', '.add2', function(){
		  var html = '';
		  html += '<tr>';
		  html += '<td><input type="number" name="open1[]" class="form-control open1" value="0" id="opening-width"/></td>';
		  html += '<td><input type="number" name="open2[]" class="form-control open2" value="0" id="opening-height"/></td>';
		  html += '<td><button type="button" name="remove" class="btn btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
		  $('#item_table2').append(html);
		 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.open1').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter paint Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.open2').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter paint Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  
 });
 
});

</script>
<script type="text/javascript">
  //  $(document).ready(function(){
  //     $(document).on('click','.checkbox-ceiling', function(){
  //        var html = '';
  //        html += '<tr>';
  //        html += '<td><input type="number" class="form-control" style="margin-top 5px;"/></td>';
  //        html += '<td><input type="number" class="form-control" style="margin-top 5px;"/></td>';
  //        html += '</tr>';
  //        $('#ceiling-table').append(html);         
	 // });

  //       $(document).on('click', '.checkbox-ceiling', function(){
	 //     $(this).closest('tr').remove();
	 // });
  //     });
  $(document).ready(function(){
  $(".checkbox-ceiling").click(function(){
    $("#ceiling-table").toggle();
  });
});
      
	 
   
</script>