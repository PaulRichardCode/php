<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
    <form action="/welcome.php" method="get">
        <label for="quantity">quantity:
            <input type="number" name="number" id="number">
        </label>
        <input type="submit" value="Total">
    </form>
            
</body> 
</html>

<?php
    echo "{$_GET["number"]}";
?>