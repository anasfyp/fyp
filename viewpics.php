<?php

$link = mysqli_connect("localhost", "root", "", "econstruction");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id=$_REQUEST['id'];
$sql = "SELECT * FROM realstate_pics WHERE  customer_id=$id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border = 1>";
          echo " <thead>";
            echo "<tr>";
                echo "<th>Image Id</th>";
                echo "<th>Image</th>";


     echo "</thead>";
            echo "</tr>";
             echo " <tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['image_id'] . "</td>";
                echo "<td><img src='../real-state/uploads/".$row['image']. "' style='width:200; height:200;'></td>";
                
        


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
