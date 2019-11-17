<?php include("../db/db.php"); ?>



<!DOCTYPE html>
<html>
<head>
  <title>Show Architecture Details</title>
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
              <a href="admin-panel.php" class="navbar-brand">E-construction</a>
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
                  <a href="admin-panel.php" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-dashboard"></i> Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="services/serviceadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Service</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="services/updateservices.php" class="sidebar-link">
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
                      <a href="addcities.php" class="sidebar-link">
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
                      <a href="archetectural-solution/addArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Architecture Design</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="services/updateservices.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Architecture Design</span>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </aside>
      

        <div class="fluid-container">
          <div class="row">
            <div class="col-md-12" style="margin-left: -30px;  margin-top: 40px;">
             <div class="data" style="overflow-x:auto;">
              <?php
                $sql = "SELECT * FROM `add_architecture`";
                $result = mysqli_query($con,$sql);
              ?>
               <table class="table table-striped">
                 
                   <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>image 1</th>
                     <th>image 2</th>
                     <th>image 3</th>
                     <th>Discription</th>
                     <th>Price</th>
                     <th>Plot Area</th>
                     <th>Building Type</th>
                     <th>Style</th>
                     <th>Badrooms</th>
                     <th>Bathrooms</th>
                     <th>Floor</th>
                     <th>Kitchen</th>
                     <th>Foundation</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </tr>
                  <?php
                    while ($rows = mysqli_fetch_assoc($result))
                     {
                  ?>
                  <tr>
                    <td><?php echo $rows['architecture_id']; ?></td>
                    <td><?php echo $rows['title']; ?></td>
                    <td><img src="architectureimg/<?php echo $rows['image_1']; ?>" class="img-responsive"></td>
                    <td><img src="architectureimg/<?php echo $rows['image_2']; ?>" class="img-responsive"></td>
                    <td><img src="architectureimg/<?php echo $rows['image_3']; ?>" class="img-responsive"></td>
                    <td><?php echo $rows['discription']; ?></td>
                    <td><?php echo $rows['price']; ?></td>
                    <td><?php echo $rows['plot_area']; ?></td>
                    <td><?php echo $rows['building_type']; ?></td>
                    <td><?php echo $rows['building_style']; ?></td>
                    <td><?php echo $rows['badroom']; ?></td>
                    <td><?php echo $rows['bathroom']; ?></td>
                    <td><?php echo $rows['floor']; ?></td>
                    <td><?php echo $rows['kitchen']; ?></td>
                    <td><?php echo $rows['foundation_type']; ?></td>
                    <td><a href="updateArchetectureDetails.php?architecture_id=<?php echo $rows['architecture_id'] ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="delete.php?architecture_id=<?php echo $rows['architecture_id']?>.&image_1=<?php echo $rows['image_1'] ?>.&image_2=<?php echo $rows['image_2']?>&.image_3=<?php echo $rows['image_3']?>" class='btn btn-danger' onclick="return confirm('are you sure want to delete this')">Delete</a></td>
                  </tr>
                 <?php
                   }
                 ?>             

                </table>
             </div>
          </div>
        </div>
    
    </div>
      
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
