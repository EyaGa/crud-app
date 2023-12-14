<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'crud', 3307);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
mysqli_close($conn);
?>

