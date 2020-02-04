<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/basics.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <?
    include "header.php";

    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["password"]);

    ?>

    <h2>Vous avez bien été déconnecté, retour à l'accueil</h2>
    <?php
    header('Refresh:2 url=read.php');
    ?>
</body>
</html>