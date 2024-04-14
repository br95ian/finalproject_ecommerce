<?php
session_start();
include "../settings/connection.php";

if (isset($_POST['p_btn'])) {
    global $con;
    $category = mysqli_real_escape_string($con, $_POST['cat_id']);
    $pname = mysqli_real_escape_string($con, $_POST['product_name']);
    $mrp = mysqli_real_escape_string($con, $_POST['mrp']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $qty = mysqli_real_escape_string($con, $_POST['qty']);
    $desc = mysqli_real_escape_string($con, $_POST['description']);


    $img = $_FILES['img']['name'];
    $type= $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];

    $img_ext = explode('.',$img);
    $img_correct_ext = strtolower(end($img_ext));
    $allow = array('jpg', 'png', 'jpeg');
    $path ="../images/".$img;

    if(in_array($img_correct_ext,$allow)) {
        if($size<5000000000){
            $sql= "INSERT INTO products (category_name,pname,MRP,price,qty,img,description,status) VALUES ('$category','$pname','$mrp','$price','$img','$qty','$desc',1)";
            $result= mysqli_query($con, $sql);
            if ($result) {
                move_uploaded_file($tmp_name,$path);
                header('Location: add_product.php?msg=success');
            } 
            else {
                header('Location: add_product.php?msg=error');
            }
        } else{
            echo "<script>alert('Image size is too large')</script>";
        }
    }else{
        echo "<script>alert('Image format is not supported')</script>";
    } 
}
    
 
?>