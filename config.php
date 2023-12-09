<?php
 $host = "localhost";
 $username = "root";
 $password = getenv('eYa2096.'); 
 $database = "crud";
 $conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>

