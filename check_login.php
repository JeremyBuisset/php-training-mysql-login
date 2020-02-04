<?php
    if (isset($_SESSION["name"], $_SESSION["pwd"])):
        echo "<h6>OK</h6>";

        else:
            echo "<h2>Les contenus de modifications sont réservés aus personnes authentifiés</h2>";

        endif;

?>