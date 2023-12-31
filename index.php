<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learn</title>
</head>
<body>
    <form action="{<?php htmlspecialchars( $_SERVER["PHP_SELF"])?>}" method="post">
        input password?: <br>
        <input type="text" name="password" id="password"> <br><br>
        <input type="submit" value="log in" name="submit">
    </form>
</body>
</html>             

<?php




//    if(isset($_POST["submit"])){

//     if(!empty($_POST["username"]) && !empty($_POST["number"])){

//      $_SESSION["username"] = $_POST["username"];
//      $_SESSION["password"] = $_POST["number"];

//      header("Location: home.php");
//     } else{
//         echo "Missing username and password";
//     }
//    }

//sanitize yyour input
//DONT DELETE
//  if(isset($_POST["submit"])){
//     $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
//     //validate email
//     $age = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);
//     if(empty($age)) {
//         echo"your number isn't valid!";
//     } else {
//         echo "your are {$age} years old";
//     }

    
//  }
?>
