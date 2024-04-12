<?php
// Include the connection
include '../settings/connection.php';

// Function to get all chores
function getAllCategories() {
    global $con;

    // SELECT all chores query
    $query = "SELECT * FROM categories";

    $result = mysqli_query($con, $query);

    // Check if execution worked
    if (!$result) {
        die("Query execution failed: " . mysqli_error($con));
    }

    // Check if any record was returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch records and assign to variable
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $categories;
    } else {
        return null;
    }
}




?>