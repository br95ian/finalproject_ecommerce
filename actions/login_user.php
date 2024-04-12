<?php 
session_start();
include "../settings/connection.php";

// * Handle Login of users
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  // * Validating login details 
  if (!empty($email) && !empty($password) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../login/login.php?msg=error');
  } else {
    $query = "SELECT id ,rid ,email, password FROM users WHERE email = '$email';";

    $results = mysqli_query($con, $query);

    if (mysqli_num_rows($results) > 0) {
      $data = mysqli_fetch_assoc($results);

      if (password_verify($password, $data['password'])) {
        // Creating a Session for the user
        $_SESSION['user_id'] = $data['id'];

        $_SESSION['user_role'] = $data['rid'];

        header('Location: ../admin/dashboard.php?msg=success');
      }
    } else {
      header('Location: ../login/login.php?msg=usernotfound');
    }
  }
}
