<?php 
  include("addproduct.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php 
     foreach($messages as $message) {
        echo "<span> {$message}</span>";
     }
    ?>
 <div class="container">
 <h1>ADD A NEW PRODUCT</h1>
       <form action="./index.php" method="post">
        <input type="text" name="product" placeholder="enter the product name" id="name">
        <input type="number" name="price" placeholder="enter the product price" id="price">
        <input type="file" name="file" id="file">
        <input type="submit" value="Add Product" name="submit" class="submitBtn">
       </form>
    </div>

</body>
</html>

<?php 
 
?>