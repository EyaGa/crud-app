<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
 $conn = new mysqli( '192.168.1.15', 'root', 'NB*hGJh/bHEdDJwa', 'crud', 3307);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
mysqli_close($conn);
?>

