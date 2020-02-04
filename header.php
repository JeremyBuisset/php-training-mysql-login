<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/basics.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <?php
    ?>
 <header>
        <div>Les randonnées</div>
        <div id="bar"></div>
        <?php
        session_start();
        if (($_SESSION['name']) && ($_SESSION['password'])):
            echo 'Bienvenue'." ".$_SESSION['name'];
            echo '<a href="logout.php">Déconnexion</a>';
        else:
            echo '<a href="login.php">Connexion</a>';
            echo '<a href="">Inscription</a>';
        endif;

        ?>

    </header>
</body>
</html>