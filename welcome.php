<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
    <form action="/welcome.php" method="post">
       <label for="radius">Radius:</label>
       <input type="number" name="number" id="number">
       <input type="submit" value="calculate">
    </form>
            
</body> 
</html>

<?php
   $radius = $_POST["number"];
    $circumference = null;
    $volume = null;

   $pi = pi();
   $circumference = $radius * 2 * pi();
   $circumference = round($circumference,2);
   $volume = $radius * pi() * 4/3;
   $volume = round($volume, 2);

   echo "circumference = {$circumference}cm <br>";
   echo "volume = {$volume}"
?>