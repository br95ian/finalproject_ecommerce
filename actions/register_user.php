<?php 
session_start();
include "../settings/connection.php";

// * Handle Registering of users
if (isset($_POST['register'])) {
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $tel = mysqli_real_escape_string($con, $_POST['tel']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  $people_sql = "INSERT INTO users (rid, fname, lname, tel,email,  password) VALUES (2, '$fname', '$lname', '$tel', '$email', '$hash_password')";

  if (mysqli_query($con, $people_sql)) {
    header('Location: ../login/register.php?msg=success');
    header('Location: ../login/login.php');
  } else {
    header('Location: ../login/register.php?msg=error');
  }
}
