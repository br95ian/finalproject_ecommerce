<?php 

include "../settings/connection.php";

function roles($con){
    $sql="SELECT * FROM family_name";
    $result=mysqli_query($con,$sql);
    
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        return; 
    }

    while($w=mysqli_fetch_array($result)){
        echo "<option value='" . $w['fid'] ."'>" . $w['fam_name'] . "</option>";
    
    }
 
}

