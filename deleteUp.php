<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter une randonnée</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <a href="read.php">Liste des données</a>
    <h1>Supprimer</h1>
    <h2>Attention ! Toute suppression est définitive !</h2>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reunion_island";
    $conn = new mysqli($servername, $username, $password);
    $deleteID = $_POST["delete"];

    if ($conn->connect_error):
        echo $conn->connect_error;
    else:
        $conn->select_db($dbname);
        $sql = "DELETE FROM `hiking` WHERE id=$deleteID";
        $result = $conn->query($sql);
        echo "La randonnée a été supprimée de la BDD";

    endif;
    ?>
</body>
</html>
