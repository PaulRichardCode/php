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