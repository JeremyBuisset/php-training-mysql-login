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




    <form action="deleteUp.php" method="post">
        <label for="delete">Votre choix</label>
        <select id="delete" name="delete">
    <?php
    /**** Supprimer une randonnée ****/

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reunion_island";
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error):
        echo $conn->connect_error;
    else:
        $conn->select_db($dbname);
        $sql = "SELECT * FROM `hiking` WHERE 1";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()):
            echo utf8_encode("<option value=".$row['id'].">".$row['name']."</option>");
        endwhile;


    endif;
    ?>
            <input type="submit">


</body>
</html>



