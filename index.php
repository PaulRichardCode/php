<?php 
        include("database.php");

        // $username = "Patrick";
        // $password = "rock3";

        // $hash = password_hash($password, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO users(user, password)
        //         VALUES('$username', '$hash')";

        // $sql = "SELECT * FROM users WHERE user = 'spongebob'";

        // try {
        //     mysqli_query($conn, $sql);
        //     echo "user is now registered";
        // } catch (mysqli_sql_exception) {
        //     echo "Could not register user";
        // }
       
        
        $username = "Thomas Shelby";
        $password = "godloveme123";

        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo "$username" . "$hash";

        mysqli_close($conn);
?>