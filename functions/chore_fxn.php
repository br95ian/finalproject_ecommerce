<?php
include '../actions/get_all_chores.php';

// Call the function and assign the output to a variable
$var_data = getAllChores();

// Create display table rows and elements
function displayChores($var_data) {
    foreach ($var_data as $row) {
        echo '<tr>';
        echo '<td>' . $row['cid'] . '</td>';
        echo '<td>' . $row['chorname'] . '</td>';
        echo '<td><a href="../actions/edit_chore.php?id=' . $row['cid'] . '"><i class="bx bx-edit-alt"></i></a></td>';
        echo '<td><a href="../actions/delete_chore.php?id=' . $row['cid'] . '"><i class="bx bx-trash"></i></a></td>';
        echo '</td>';
        echo '</tr>';
    }
}
?>