<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">

  </head>
  <body>
    <?php include "header.php" ?>
    <h1>Liste des randonnées</h1>
    <table>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "reunion_island";
        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error){
            echo $conn->connect_error;
        } else {
            $conn->select_db($dbname);
            $sql = "SELECT * FROM `hiking` WHERE 1";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo utf8_encode("<tr><td>" . $row["name"] . "</td>" . "<td>" . $row["difficulty"] . "</td>" . "<td>" . $row["distance"] . " kilometres</td>" .
                    "<td>" . $row["duration"] . " heures</td>" . "<td>" . $row["height_difference"] . " metres</td></tr>");
            }
        }
        ?>
    </table>
  </body>
</html>
