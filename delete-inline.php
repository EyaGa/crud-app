<?php

$stu_id = $_GET['id']; //get id from url bar 

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: https://crud-appli.azurewebsites.net/index.php");

mysqli_close($conn);

?>
