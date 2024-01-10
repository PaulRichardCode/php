<?php
    include("database.php");

    
     if(isset($_POST["submit"])){
        $product = $_POST["product"];
        $price = $_POST["price"];
        $product_image = $_FILES["file"]["name"];
        $messages = array();
        $product_image_folder = "product_image/". $product_image;

        if(empty($product) || empty($price) || empty($product_image)){
            $messages[] = "Please Fill Out All!";
        } else {
            $sql_insert = "INSERT INTO products(name,price,image)
                           VALUE($product, $price, $product_image)";      
            $upload = mysqli_query($conn, $sql_insert);
        }
    }
?>