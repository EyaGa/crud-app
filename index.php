<?php
include 'header.php';
?>
<!DOCTYPE html>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

      try {
          $conn = new mysqli('', 'root', 'NB*hGJh/bHEdDJwa', 'crud');
          $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
          if ($conn->connect_error) {
              throw new Exception("Connection Failed: " . $conn->connect_error);
          }

          echo "Connected successfully";

          $sql = "SELECT * FROM student JOIN studentclass ON student.sclass = studentclass.cid";
          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
             echo "<tr>
             <td>{$row['sid']}</td>
             <td>{$row['sname']}</td>
             <td>{$row['saddress']}</td>
             <td>{$row['cname']}</td>
             <td>{$row['sphone']}</td>
             <td> 
             <a href='edit.php?id={$row['sid']}'>Edit</a> 
             <a href='delete-inline.php?id={$row['sid']}'>Delete</a>
             </td>
            </tr>";
          }
          ?>
        </tbody>
    </table>
    <?php 
      } else {
        echo "<h2>No Record Found</h2>";
      }
      mysqli_close($conn);

      } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      }
    ?>
</div>
</div>
</body>
</html>
