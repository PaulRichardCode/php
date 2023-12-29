<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learn</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <input type="checkbox" name="food" id="pizza"> pizza: <br>
        <input type="checkbox" name="food" id="Hamburger"> Hamburger: <br>
        <input type="checkbox" name="food" id="Hotdog"> Hotdog: <br>
        <input type="checkbox" name="food" id="Taco"> Taco: <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>             

<?php

    if(isset($_POST["submit"])) {
        echo "it works";
    }




?>