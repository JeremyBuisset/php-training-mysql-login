<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/basics.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
    <?php include "header.php" ?>
    <form action="login_check.php" method="post">
        <label for="login">Votre nom :</label>
        <input type="text" id="login" name="login">
        <br />
        <label for="pass">Votre mot de passe : </label>
        <input id="pass" type="password" name="pwd"><br />
        <input type="submit" value="Connexion">
    </form>
</body>
</html>