<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learn</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <input type="checkbox" name="food" id="pizza" value="PIZZA"> pizza: <br>
        <input type="checkbox" name="food" id="Hamburger" value="HAMBURGER"> Hamburger: <br>
        <input type="checkbox" name="food" id="Hotdog" value="HOTDOG"> Hotdog: <br>
        <input type="checkbox" name="food" id="Taco" value="TACO"> Taco: <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>             

<?php

    if(isset($_POST["submit"])) {
       
        if(isset($_POST["food"])) {
            $food = $_POST["food"];
            echo $food;
        }
    }




?>