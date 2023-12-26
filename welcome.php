 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
   <form action="/welcome.php" method="get">
    <label for="numbs">
        Enter a number to count down from:
        <input type="number" name="number" id="number">
        <input type="submit" value="start">
    </label>
   </form>
            
</body> 
</html>

<?php
// $fruits = array("Rice", "Banana", "orange","pawpaw");
// array_push($fruits,"APPLE");

// foreach ($fruits as $fruit) {
//     echo "<br>". $fruit ."";
// }

//associative array
$cars = array(
    "Toyota" => "Camry",
    "Benz" => "4matic", 
    "Honda" => "C-Class", 
    "Audi" => "motosport",
    "Toyota2" => "Corrola"
);

echo $cars("Toyota");


?> 