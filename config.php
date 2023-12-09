<?php
$conn = mysqli_connect("localhost", "root", "eYa2096.", "crud");
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

