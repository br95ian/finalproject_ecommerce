<?php
$server= "localhost";
$username="root";
$password= "";
$dbname="ecommerce";


$con= mysqli_connect($server, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


?>