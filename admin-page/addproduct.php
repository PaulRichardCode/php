<?php 
     if(isset($_POST["submit"])){
        $product = $_POST["product"];
        $price = $_POST["price"];
        $file = $_POST["file"];
        $messages = array();

        if(empty($product) || empty($price) || empty($file)){
            $messages[] = "Please Fill Out All!";
            
        } else {
            $messages[] = "Product added succesfully";
        }
    }
?>
a
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

</body>
</html>