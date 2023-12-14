<?php
include 'header.php';
?>
<!DOCTYPE html>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $servername = "192.168.1.15"; // Remplacez cette valeur par l'adresse IP réelle du serveur de base de données
    $username = "root"; // Remplacez cette valeur par le nom d'utilisateur de la base de données
    $password = "NB*hGJh/bHEdDJwa"; // Remplacez cette valeur par le mot de passe de la base de données
    // Créer une connexion à la base de données
    $conn = new mysqli($servername, $username, $password);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion: " . $conn->connect_error);
    }

    // Obtenir l'adresse IP du serveur de base de données
    $sql = "SELECT @@global.hostname, @@global.port FROM dual;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Adresse IP du serveur de base de données: " . $row["@@global.hostname"] . " (port: " . $row["@@global.port"] . ")";
    } else {
        echo "Erreur: aucune ligne trouvée";
    }

    // Fermer la connexion
    $conn->close();
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
  ?>
</div>
</div>
</body>
</html>
