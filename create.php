<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <?php
    session_start();
    $name = " ";
    $difficulty = " ";
    $distance = " ";
    $duration = " ";
    $height = " ";

    if (isset($_SESSION["name"], $_SESSION["password"])):
        echo "<h6>OK</h6>"; ?>
        <a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty" id="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="text" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "reunion_island";
        $conn = new mysqli($servername, $username, $password);

        $name = utf8_decode($_POST["name"]);
        $difficulty = utf8_decode($_POST["difficulty"]);
        $distance = $_POST["distance"];
        $duration = $_POST["duration"];
        $height = $_POST["height_difference"];



        if ($conn->connect_error):
            echo $conn->connect_error;
        else:
            $conn->select_db($dbname);


            echo $name.$difficulty;

            $sql = utf8_decode('INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES (?, ?, ?, ?, ?)');
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssiii',$name, $difficulty, $distance, $duration, $height);


            $stmt->execute();

        endif;

    else:
        echo "<h2>Les contenus de modifications sont réservés aus personnes authentifiés</h2>";


    endif;
    ?>
</body>
</html>
