<?php

if (isset($_POST["button"])){
    setcookie("name", $_POST["prenom"],time()+3600);
}
else {
    echo "Bonjour" . $_COOKIE["prenom"];
}

if (isset($_POST["button1"])){
    header("Location: index.php");
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
        <button type="submit" name="button">connexion</button>
        <button type="submits" name="button1">déconnexion</button>
        </form>
    
    </main>
    
</body>
</html>