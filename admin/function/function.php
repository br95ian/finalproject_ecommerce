<?php
include "../settings/connection.php";
function categories($con){
    $sql="SELECT * FROM categories";
    $result=mysqli_query($con,$sql);
    
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        return; 
    }

    while($w=mysqli_fetch_array($result)){
        echo "<option value='" . $w['id'] . "'>" . $w['catname'] . "</option>";
    
    }
 
}