<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 $host = "localhost";
 $username = "root";
 $password = " "; 
 $database = "crud";
 $conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

