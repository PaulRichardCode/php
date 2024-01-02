<?php 

    include("database.php");
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "storagedb";
    $conn = "";

    


    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "you are wasting time";
    }

    if($conn) {
        echo "It don connect";
    } 




























    // $db_server = "localhost";
    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "businessdb";
    // $conn = "";

   

    // try {
    //     $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    // } catch(mysqli_sql_exception) {
    //     echo "Could not connect";
    // }

    // if($conn){
    //     echo "You are connected";
    // } 

?>