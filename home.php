<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the home page</h1>
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>

<?php

echo $_SESSION["username"] . "<br>"; 
echo $_SESSION["password"];

if(isset($_POST["logout"])) {
    session_destroy();
    header("Location: welcome.php");
}
?>
