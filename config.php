<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $conn = mysqli_connect('localhost', 'root', 'eYa2096.', 'crud', 3307, '/tmp/mariadb.sock');
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

