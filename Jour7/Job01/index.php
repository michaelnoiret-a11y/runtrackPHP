<?php
// session_start();
//     if (isset($_SESSION["visite"])){
//         $_SESSION["visite"] += 1;
//     }
//     else {
//         $_SESSION["visite"] = 1;
//     }
    
//     if (isset($_POST["button"])){
//         session_destroy();
//         exit();
//     }
//     echo $_SESSION["visite"];

session_start();

if (!empty($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] += 1;
} 
else {
    $_SESSION["nbvisites"] = 1;
}

if (isset($_POST["button"])){
    session_destroy();
    exit();
}

echo $_SESSION["nbvisites"];

// for ($nbvisites = 0; $nbvisites > 1 ; $nbvisites++){

//     $nbvisites += 1;
//     echo $nbvisites;
// } 
// else {
//     $nbvisites = 1;
// }
// ?>

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