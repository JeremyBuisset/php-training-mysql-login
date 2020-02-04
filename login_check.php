<?php

/*Connexion variables*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reunion_island";



/*Initialize the connexion to database*/
$conn = new mysqli($servername, $username, $password);

/*Check if the connexion works*/
if ($conn->connect_error) {
    echo $conn->connect_error;
} else {
    /*Interact with the database for get the names of the form ID*/
    $conn->select_db($dbname);
    $sql = "SELECT * FROM `users` WHERE 1";
    //echo $sql;
    $result = $conn->query($sql);
    // echo $conn->error;

    /*Loop for stocks each names in a array*/
    while ($row = $result->fetch_assoc()) {
        if($row['name'] == $_POST['login'] && $row['code'] ==$_POST['pwd']){
            session_start();
            $_SESSION['name'] = $_POST['login'];
            $_SESSION['password'] = $_POST['pwd'];
            break;
        } else {
            echo "";
    }
    }
    if (isset($_SESSION['name'],$_SESSION['password'])){
        echo "Bienvenue"." ".$_SESSION['name'];
        header("Refresh:2 url=create.php");
    } else {
        echo "Cet utilisateur ne figure pas dans la BDD";
    }
}
