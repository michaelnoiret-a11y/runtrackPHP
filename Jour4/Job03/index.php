<?php
if (!empty($_POST["submit"])){
    //var_dump ($_POST);
    echo count($_POST);
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
<form action="index.php" method= "post">
<input type="text" name="name" placeholder="name">
<input type="password" name="mdp" placeholder="password">
<input type="email" name="email" placeholder="email">
<input type="submit" name="submit" value="envoyez">
</main>
</form> 
</body>
</html>