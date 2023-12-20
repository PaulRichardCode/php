<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
  
<form action="/welcome.php" method="post">
    <label for="quantity">
        Quantity:
        <input type="number" name="quantity" id="quantity">
    </label>
    <input type="submit" value="Total   ">
</form>
</body> 
</html>

<?php 
$quantity = $_POST["quantity"];
$price = 5.99;
$goodsType = "Belts";
$TOTAL = $quantity * $price;

echo "{$quantity} {$goodsType} costs {$TOTAL}";
?>
