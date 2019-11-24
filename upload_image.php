<?php 
include_once("db_connect.php");


$images = array();
   foreach($_FILES['images']['name'] as $key=>$val){        
        $upload_dir = "uploads/";
        $upload_image = $upload_dir.$_FILES['images']['name'][$key];
    $filename = $_FILES['images']['name'][$key];    
        if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$upload_image)){
            $images[] = $upload_image;
            $customer_id=$_POST['customer_id'];
            $max_num=$_POST['max_num'];
            


            
      $insert_sql = "INSERT INTO realstate_pics(image_id, image, customer_id,max_num) 
        VALUES('', '".$filename."', '".$customer_id."','".$max_num."')";
      mysqli_query($conn, $insert_sql);
        }
    }
?> 



<div class="row">
  <div class="image_gallery">
    <?php
    if(!empty($images)){ 
      foreach($images as $image){ ?>
      <ul>
        <li >
          <img class="images" src="<?php echo $image; ?>" alt="">
        </li>
      </ul>
    <?php } }?>
  </div>
</div>
