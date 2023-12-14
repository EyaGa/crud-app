<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Records</title>
</head>
<body>
    <div id="main-content">
        <h2>All Records</h2>
        <?php

        $servername = "192.168.1.15"; // Remplacez cette valeur par l'adresse IP réelle du serveur de base de données
        $username = "root"; // Remplacez cette valeur par le nom d'utilisateur de la base de données
        $password = "NB*hGJh/bHEdDJwa"; // Remplacez cette valeur par le mot de passe de la base de données
        $database = "crud"; // Remplacez cette valeur par le nom de votre base de données
        $port = 3307; // Remplacez cette valeur par le port correct de votre base de données
error_reporting(E_ALL);
ini_set('display_errors', 1);
        // Créer une connexion à la base de données
        $conn = new mysqli($servername, $username, $password, $database, $port);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Erreur de connexion: " . $conn->connect_error);
        }

        // Exécutez la requête SQL pour récupérer les données des étudiants
        $sql = "SELECT * FROM student JOIN studentclass ON student.sclass = studentclass.cid";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        // Afficher les résultats dans un tableau
        if (mysqli_num_rows($result) > 0) {
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
                    while ($row = mysqli_fetch_assoc($result)) {
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

        // Fermer la connexion
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
