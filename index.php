<?php 
        include("database.php");

        $sql = "INSERT INTO users(user, password)
                VALUES('Richard', '123Rich')";

        mysqli_query($conn, $sql);

        mysqli_close($conn);
?>