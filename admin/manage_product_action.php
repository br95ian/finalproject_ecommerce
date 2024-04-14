<?php
// Include the connection
include '../settings/connection.php';

// Function to get all chores
function getAllProducts() {
    global $con;

    // SELECT all products query
    $query = "SELECT products.pid, categories.catname, products.pname, products.MRP, products.price, products.qty, products.img, products.description, products.status from products INNER
    JOIN categories on products.category_name = categories.id";

    $result = mysqli_query($con, $query);

    // Check if execution worked
    if (!$result) {
        die("Query execution failed: " . mysqli_error($con));
    }

    // Check if any record was returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch records and assign to variable
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    } else {
        return null;
    }
}




?>