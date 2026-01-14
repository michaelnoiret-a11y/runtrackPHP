<?php
// setcookie("visite", "1", time() + 3600);

// if (isset($_COOKIE["visite"])){

//     $visite = $_COOKIE["visite"];

// setcookie("visite", $nbvisites +1, time() + 3600);
//     }
//     else {
//         $_COOKIE["visite"] = 1;
//     }
    
//     if (isset($_POST["button"])){
//         setcookie("visite", "", time() - 3600);
//         exit();
//     }

//     echo $_COOKIE["visite"];

// echo $_COOKIE["test"];

setcookie("nbvisites", "1",time() + 3600);
if (isset($_COOKIE["nbvisites"])){
    $nbvisites = $_COOKIE["nbvisites"];
    setcookie("nbvisites",$nbvisites+1,time() + 3600);
} 
else {
    $nbvisites = 1;
}

if (isset($_POST["button"])){
    setcookie("nbvisites","1",time() - 3600);
    exit();
}

echo $nbvisites;
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
        <button type="submits" name="button1">+ 1</button>
        <button type="submit" name="button">Reset</button>
        </form>
    </main>
    
</body>
</html>