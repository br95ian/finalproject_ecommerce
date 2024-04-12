<?php
session_start();
include "../settings/connection.php";

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['cat_btn'])) {
    global $con;
    $category = mysqli_real_escape_string($con, $_POST['category']);

    if(empty($category)){
        echo "<div class='alert alert-danger'>Category field cannot be empty</div>";
    } 
    
    else {
        $cat_sql = "INSERT INTO categories (catname,status) VALUES ('$category',1)";
        $result= mysqli_query($con, $cat_sql);
        if ($result) {
            header('Location: add_category.php?msg=success');
            header('Location: manage_category.php');
        } 
        else {
            header('Location: add_category.php?msg=error');
        }

    }
}
?>