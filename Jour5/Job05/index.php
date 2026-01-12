<?php

// function occurences($str, $char){

//     if ($char in $str) {
//         count($char);
//         return $char;
//     }
        
// }

// echo occurences("Bonjour", "o");

# ChatGPT function substr_count:

function occurences($str, $char) {
    return substr_count($str, $char);
}

echo occurences("Bonjour", "o");

# Sans cette fonction:

// function occurences($str, $char) {
//     $count = 0;

//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] === $char) {
//             $count++;
//         }
//     }

//     return $count;
// }

// echo occurences("Bonjour", "o");

?>