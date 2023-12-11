<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 $conn = mysqli_connect('localhost', 'root','1234','crud');
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

