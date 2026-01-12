<?php
session_start();


if(empty($_SESSION)){
  header("Location: index.php");

}

if(isset($_COOKIE["theme"])){
  echo $_COOKIE["theme"];

}

var_dump($_SESSION);
var_dump($_COOKIE);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Bienvenue <?php echo $_SESSION["name"]?> ! j'ai <?php echo $_SESSION["age"]?></h1>
        <a href="deconnexion.php">logout</a>
    </main>
</body>
</html>