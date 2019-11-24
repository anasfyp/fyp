<?php

$link = mysqli_connect("localhost", "root", "", "econstruction");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM realstate_admin";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border = 1>";
          echo " <thead>";
            echo "<tr>";
                echo "<th>realstate Id</th>";
                echo "<th>Purpose</th>";
                echo "<th>Property Type</th>";
                echo "<th>Sub Type</th>";
                echo "<th>Select City</th>";
                echo "<th>Location</th>";
                echo "<th>Property Title  </th>";
                echo "<th>Description</th>";
                echo "<th>Price</th>";
                echo "<th>Land Area</th>";
                echo "<th>Unit</th>";
                echo "<th>Bedrooms</th>";
                echo "<th>Bathrooms</th>";
                echo "<th>phone No</th>";
                echo "<th>Cell No</th>";
                echo "<th> Email</th>";
                echo "<th>Customer ID</th>";
                echo "<th>Action</th>";

     echo "</thead>";
            echo "</tr>";
             echo " <tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['realstate_id'] . "</td>";
                echo "<td>" . $row['Purpose'] . "</td>";
                echo "<td>" . $row['Property_type'] . "</td>";
                echo "<td>" . $row['subtype'] . "</td>";
                echo "<td>" . $row['Select_city'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . $row['Property_Title'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Land_area'] . "</td>";
                echo "<td>" . $row['Unit'] . "</td>";
                echo "<td>" . $row['Bedrooms'] . "</td>";
                echo "<td>" . $row['Bathrooms'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td>" . $row['cell_no'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                
        


        echo '<td>
                                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle-responsive" type="button" data-toggle="dropdown">Action
                                     <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
          <li><a  class="edit" href="view1.php?id=' . $row['customer_id'] . '">Picture</a></li>
          <li><a class="delete" href="approvead.php?id=' . $row['realstate_id'] . '">Approve</a></li>
          <li><a class="delete" href="delete_realstate.php?id=' . $row['realstate_id'] . '">Delete</a></li>
          
          
                                         </ul>
                                         </div>
                                            </div></td>';
                   echo " </tbody>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
