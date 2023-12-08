<?php
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("127.0.0.1", "root", "", "crud");
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
