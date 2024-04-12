<?php

function add_category(){
    if (isset($_POST['cat_btn'])) {
        global $con;
        $category = mysqli_real_escape_string($con, $_POST['category']);
    }
    if(empty($category)){
        echo "<div class='alert alert-danger'>Category field cannot be empty</div>";
    } else {
        $cat_sql = "INSERT INTO category (catname,status) VALUES ('$category','1')";
        if (mysqli_query($con, $cat_sql)) {
            echo "<div class='alert alert-success'>Category added successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Category not added</div>";
        }
    }
}
?>