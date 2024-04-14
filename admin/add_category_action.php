<?php
session_start();
include "../settings/connection.php";

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['cat_btn'])) {
    global $con;
    $category = mysqli_real_escape_string($con, $_POST['category']);

    if(empty($category)){
        echo "<script>alert('Category field cannot be empty')</script>";
    } 
    
    else {
        $check= "SELECT * FROM categories WHERE catname='$category'";
        $result= mysqli_query($con, $check);
        $count= mysqli_num_rows($result);
        if ($count>0) {
            echo "<script>alert('Category already exists')</script>";
           
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
}
?>