<?php
session_start();

function getHello(){
    return "Hello LaPlateforme";
}

$retour = getHello();
echo $retour;

$_SESSION["name"] = "Michael";
$_SESSION["age"] = 25;

setcookie("theme","beard",time() + 3600);


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
        <form action="" method="get">
            <input type="text" name="return" placeholder="">
            <input type="submit" value="envoyez">
        </form>
        <a href="test.php">mon profil</a>
    </main>
</body>
</html>