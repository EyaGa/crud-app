<?php
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];
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

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: https://crud-appli.azurewebsites.net/index.php");

mysqli_close($conn);

?>
