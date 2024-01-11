<?php
    include("database.php");

    
     if(isset($_POST["submit"])){
        $product = $_POST["product"];
        $price = $_POST["price"];
        $product_image = $_FILES["file"]["tmp_name"];
        $imageData = file_get_contents($product_image);
        $encodedImage = base64_encode($imageData);
        $messages = array();
        $product_image_folder = "product_image/". $product_image;

        if(empty($product) || empty($price) || empty($product_image)){
            $messages[] = "Please Fill Out All!";
        } else {
            $sql_insert = "INSERT INTO products(name,price,image)
                           VALUE($product, $price, $encodedImage";      
            mysqli_query($conn, $sql_insert);
        }
    }
?>