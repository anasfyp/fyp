<?php
  include("../db/db.php");
  $id = $_GET['architecture_id'];
  $qty = "SELECT * FROM `add_architecture` WHERE architecture_id = $id";
  $result = mysqli_query($con,$qty);
  while($row = mysqli_fetch_assoc($result)){
    $name = $row['title'];
    $image_1 = $row['image_1'];
    $image_2 = $row['image_2'];
    $image_3 = $row['image_3'];
    $discription = $row['discription'];
    $price = $row['price'];
    $plot_area = $row['plot_area'];
    $building_type = $row['building_type'];
    $style = $row['building_style'];
    $badroom = $row['badroom'];
    $bathroom = $row['bathroom'];
    $floor = $row['floor'];
    $kitchen = $row['kitchen'];
    $foundation_type = $row['foundation_type'];            
  }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Architecture</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin-panel.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
  font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    
      <div class="main-wrapper">
        <header class="topbar">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
              <a href="#" class="navbar-brand">E-construction</a>
            </div>
            <ul class="navbar-nav float-right">
              <li class="nav-item">
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span><i class="fa fa-user-circle" style="font-size: 30px;padding: 10px; color: white; margin-right: 90px; padding-top: 15px;"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="fa fa-power-off" href="#"> Logout</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </header>
        <!-- sidebar -->
        <aside class="left-sidebar">
          <div  class="scroll-sidebar">
            <nav class="sidebar-nav">
              <ul class="sidebarnav">
                <li class="sidebar-item selected">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-dashboard"></i> Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="#" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Service</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="#" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Services</span>
                      </a>
                    </li>

                  </ul>
                </li>

                <li class="sidebar-item">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-home"></i> Real State</span>
                  </a>
                </li>

                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-building-o" aria-hidden="true"></i> Cities <span class="arrow"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../addcities.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Cities</span>
                      </a>
                    </li>
                    
                  </ul>
                </li>

                 <li class="sidebar-item">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    
                    <span class="hide-menu"><i class="fa fa-shopping-cart"></i>  E commerce</span>
                  </a>
                </li>
                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Architectural Solution <span class="arrow"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="addArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Architecture Design</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="showArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Architecture Design</span>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </aside>
      

        <div class="page-wrapper">
          <div class="container-fluid">
            
            <div class="row" style="margin-top: 20px; margin-right: 200px; margin-left: 20px;" class="border" >
              <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                  <h1 class="h1">Add architecture</h1>
                <form method="post" class="add-architecture" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="archi_name">Architecture Name:</label>
                     <input type="text" id="archi_name" name="title" placeholder="Architecture Name"  class="form-control" title="no special characters" pattern="^[0-9a-zA-Z\s]+$" value="<?php echo $name; ?>">
                  </div>
                  <div class="form-group">
                     <label for="image1">Image 1:</label>
                     <input type="file" id="image1" name="image_1" class="form-control">
                     <img src="architectureimg/<?php echo $image_1; ?>" style="height: 100px; margin-top: 5px;">
                  </div>
                  <div class="form-group">
                     <label for="image2">Image 2:</label>
                     <input type="file" id="image2" name="image_2"  class="form-control">
                     <img src="architectureimg/<?php echo $image_2; ?>" style="height: 100px; margin-top: 5px;">
                  </div>
                  <div class="form-group">
                     <label for="image2">Map image:</label>
                     <input type="file" id="image2" name="image_3"  class="form-control">
                     <img src="architectureimg/<?php echo $image_3; ?>" style="height: 100px; margin-top: 5px;">
                  </div>
                  <div class="form-group">
                    <label>Discription</label>
                    <textarea rows = "5" cols = "64" name="discription" placeholder="Enter Description" class="form-control" title="no special characters" pattern="^[0-9a-zA-Z\s]+$">
                      <?php echo $discription;?>
                    </textarea>
                  </div>
                  <div class="form-group">
                     <label for="price">price:</label>
                     <input type="text" id="price" name="price" placeholder="Enter Price"  class="form-control" pattern="^[0-9]+$" title="only numbers" value="<?php echo $price; ?>">
                  </div>
                  <div class="form-group">
                     <label for="plot_area">Plot Area:</label>
                     <input type="text" id="plot_area" name="plot_area" class="form-control" pattern="^[0-9]+$" title="only numbers" value="<?php echo $plot_area; ?>">
                  </div>
                  <div class="form-group">
                     <label for="building_type">Building type:</label>
                     <input type="text" id="building_type" name="building_type"  class="form-control" title="only alphabat" pattern="^[a-zA-Z\s]+$" value="<?php echo $building_type; ?>">
                  </div>
                  <div class="form-group">
                     <label for="style">Style:</label>
                     <input type="text" id="style" name="style" class="form-control" title="only alphabat" pattern="^[a-zA-Z\s]+$" value="<?php echo $style;?>">
                  </div>
                  <div class="form-group">
                     <label for="badroom">Badrooms</label>
                     <input type="number" id="badroom" name="badroom" class="form-control" min="1" pattern="^[0-9]+$" title="only numbers" value="<?php echo $badroom;?>">
                  </div>
                  <div class="form-group">
                     <label for="bathroom">Bathrooms</label>
                     <input type="number" id="bathroom" name="bathroom" class="form-control" min="1" pattern="^[0-9]+$" title="only numbers" value="<?php echo $bathroom?>">
                  </div>
                  <div class="form-group">
                     <label for="floor">Floor</label>
                     <input type="number" id="floor" name="floor" class="form-control" min="1" pattern="^[0-9]+$" title="only numbers" value="<?php echo $floor;?>">
                  </div>
                  <div class="form-group">
                     <label for="kitchen">Kitchen</label>
                     <input type="number" id="kitchen" name="kitchen" class="form-control" min="1" pattern="^[0-9]+$" title="only numbers" value="<?php echo $kitchen;?>">
                  </div>
                  <div class="form-group">
                    <label for="f_type">Foundation Type:</label>
                    <input type="text" id="f_type" name="f_type" class="form-control" title="only alphabat" pattern="^[a-zA-Z\s]+$" value="<?php echo $foundation_type;?>">
                  </div>

                  <!-- <button type="Submit" name="addcity">Submit</button> -->
                  <input type="submit" name="insert" value="INSERT">
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
    
    </div>
      
      
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
