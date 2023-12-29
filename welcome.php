<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learn</title>
</head>
<body>
    <form action="welcome.php" method="post">
        username: <br>
        <input type="text" name="username" id="username"> <br>
        <input type="text" name="number" id="number"> <br>
        <input type="submit" value="log in" name="submit">
    </form>
</body>
</html>             

<?php
//sanitize yyour input
//DONT DELETE
 if(isset($_POST["submit"])){
    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"number", FILTER_SANITIZE_NUMBER_INT);

    echo $username . " is " . $password . " years";
 }
?>
