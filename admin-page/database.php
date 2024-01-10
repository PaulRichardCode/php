<?php
    $db_server = "Localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "storagedb";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
      
    } catch (Exception $e) {
        echo "Not connected, Try again!";
    }

?>