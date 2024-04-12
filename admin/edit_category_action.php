<?php
require_once '../settings/connection.php'; // Assuming this file contains the database connection

// Check if ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $category_id = $_GET['id'];
    
    // Fetch the category information from the database based on the ID
    $sql = "SELECT * FROM categories WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $category = $result->fetch_assoc(); // Fetching category data

        // Check if form is submitted
        if(isset($_POST['cat_btn_up'])) {
            $new_category_name = $_POST['category_up'];

            // Update category name in the database
            $update_sql = "UPDATE categories SET category_name = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("si", $new_category_name, $category_id);
            if($update_stmt->execute()) {
                echo "<div class='alert alert-success'>Category updated successfully</div>";
            } else {
                echo "<div class='alert alert-danger'>Error updating category</div>";
            }
        }
    } else {
        echo "<div class='alert alert-danger'>Category not found</div>";
    }
} 
else {
    echo "<div class='alert alert-danger'>No category ID provided</div>";
}
?>