<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="index.php" method="post" class="form">
            <label for="username">UserName:</label>
            <input type="text" name="username" placeholder="username" id="username" >
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*************" id="password">
            <input type="submit" value="login" name="login" class="btn">
        </form>
        
    </div>

</body>
</html>
<?php 
    include("../login-page/database.php");

    if(isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($username) && !empty($password)) {

        $hash = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "CREATE TABLE login(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
        $sql = "INSERT INTO login (username , password)
                VALUE ('$username', '$hash')";
        mysqli_query($conn, $sql);
        echo "You have succesfully logged in";
    } else {
        echo "please input required data";
    }
    }

    $conn -> close();
?>