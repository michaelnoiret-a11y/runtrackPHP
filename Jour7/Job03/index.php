<?php
session_start();

if (isset($_POST["button"])){
    if (!isset($_SESSION["prenom"])){
    $_SESSION["prenom"] = [] ;
    } else{
        array_push($_SESSION["prenom"], $_POST["prenom"]);
    }
    print_r($_SESSION["prenom"]);
}

if (isset($_POST["button"])){
    if (!isset($_POST["prenom"])){
        $_SESSION["prenom"] = [];    
    }
    else {
        array_push($_SESSION["prenom"], $_POST["prenom"]);
    }
    print_r($_SESSION["prenom"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    
    </header>
    <main>
        <form action="" method = "post">
        <input type="text" name="prenom" placeholder="prenom">
        <button type="submit" name="button">send</button>
        <button type="submits" name="button1">Reset</button>
        </form>
    
    </main>
    
</body>
</html>