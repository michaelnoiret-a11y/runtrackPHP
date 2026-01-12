<?php
$operations = ["+","-","*","/","%"];
function calcule($nombre1, $operations, $nombre2) {

    if ($operations == "+") {
        return $nombre1 + $nombre2;
    }
    elseif ($operations == "-") {
        return $nombre1 - $nombre2;
    }
    elseif ($operations == "*") {
        return $nombre1 * $nombre2;
    }
    elseif ($operations == "/") {
        return $nombre1 / $nombre2;
    }
    elseif ($operations == "%"){
        return $nombre1 % $nombre2;
    } else {
        return "opérateur inconnu";
    }
}
    
echo calcule(3, "+", 3);

?>

<!--ChatGPT-->

<?php

// function calcule($nombre1, $operation, $nombre2) {

//     if ($operation == "+") {
//         return $nombre1 + $nombre2;

//     } elseif ($operation == "-") {
//         return $nombre1 - $nombre2;

//     } elseif ($operation == "*") {
//         return $nombre1 * $nombre2;

//     } elseif ($operation == "/") {
//         return $nombre1 / $nombre2;

//     } elseif ($operation == "%") {
//         return $nombre1 % $nombre2;

//     } else {
//         return "Opérateur inconnu";
//     }
// }

// echo calcule(3, "*", 3);





// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <header>

//     </header>
//     <main>
//         <form action="" method="get">
//             <input type="number" name="nombre1" placeholder="nombre1">
//             <input type="number" name="nombre2" placeholder="nombre2">
//             <input type="submit" name="submit" value="envoyez">
//         </form>
//     </main>
// </body>
// </html>