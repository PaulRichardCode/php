 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php body</title>
</head>
<body>
 <!-- #region -->
<form action="welcome.php" method="get">
    <input type="radio" name="visa" id="visa"> Visa <br>
    <input type="radio" name="visa" id="mastercard"> Mastercard <br>
    <input type="radio" name="visa" id="verve"> Verve <br>
    <input type="submit" name="submit">
</form>
            
</body> 
</html>

<?php
$debitcard = $_GET["visa"];

if (isset($_GET["submit"])) {
   
    if(isset($debitcard)) {
       echo "You have selected {$debitcard}";
    } else {
        echo "Please select a card";
    }

}












//isset
//emptynn
// $btn = $_POST["submit"];

// if(isset($btn)) {
//     if(isset($_POST["debit_card"])) {
//         $debitCard = $_POST["debit_card"];
//         echo $debitCard;
//     } else {
//         echo "Please make a selection dont be foolish";
//     }
// }



// $fruits = array("Rice", "Banana", "orange","pawpaw");
// array_push($fruits,"APPLE");

// foreach ($fruits as $fruit) {
//     echo "<br>". $fruit ."";
// }

//associative array projects
// $countrys = array(
//     "Nigeria"=> "Lagos",
//     "USA"=> "Washington DC",
//     "united kingdom"=> "London",
//     "Canada"=> "Ottawa",
// );

// $textValue = $_GET["text"];

// foreach ($countrys as $key => q$value) {
//     if($textValue == $key) {
//         echo "$value";
//     } 
// }

?> 