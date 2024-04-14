<?php
session_start();
include "../settings/connection.php";

if (isset($_POST['cat_btn_up'])) {
    
    global $con;
    $name_up = mysqli_real_escape_string($con, $_POST['category_up']);
    $id = $_POST['id'];

    if(empty($id)){
        echo "<div class='alert alert-danger'>Category field cannot be empty</div>";
    } 
    
    else {
        
        $edit_sql = "UPDATE categories SET catname='$name_up' WHERE id='$id'";
        $result= mysqli_query($con, $edit_sql);
        if ($result) {
            
            header('Location: manage_category.php?msg=success');
            
        } 
        else {
            echo "wrong destination";

            header('Location: delete_category.php?msg=error');
        }

    }
}
?>