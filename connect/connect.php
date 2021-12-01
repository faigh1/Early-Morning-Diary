<?php
    $host = "localhost";
    $user = "ducks1077";
    $pass = "Rkwhr8840*";
    $db = "ducks1077";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno() ){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>