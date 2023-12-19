<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
    <?php
    $name = "Richard";
    $food = "Jollof Rice";
    $quantity= 2;
    $age = "23";
    $price = 4.99;

    echo "You have ordered {$quantity} {$food} <br>";
    $total = $quantity * $price;
    echo "Your total is {$total}";

   ?>
    
</body> 
</html>