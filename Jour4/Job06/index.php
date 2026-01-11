<?php
if (isset($_GET["submit"])){
    if (!empty($_GET["nombre"] && $_GET["nombre"] % 2 == 0)){
        echo "Nombre pair";
    }
    else{
        echo "Nombre impair";
    }
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
    <main>
        <form action="" method="get">
        <input type="number" name="nombre" placeholder="nombre">
        <input type="submit" name="submit" placeholder="envoyez">
        </form>
    </main>    
</body>
</html>