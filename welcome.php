<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
    <form action="/welcome.php" method="get">
    <Label>Username:
    <input type="text" name="name" id="">
    </Label>
    <Label>Password
        <input type="password" name="password" id="">
    </Label>
    <input type="submit" value="log in">
    </form>
   
</body> 
</html>

<?php 
$name = $_GET["name"];
echo "username = {$name}";
$password = $_GET["password"];
echo "<br>Password = $password";
?>
