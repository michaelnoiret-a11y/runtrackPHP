
<?php

// $leetAlphabet = ("a" =>"4","b" =>"13","c" =>"(","d" => "[)","e" => "3","f" => "|=","g" => "6","h" => "|-|","i" => "|","j" => ".]","k" => "|<","l" => "1","m" => "|Y|","o" => "O","p" => "|>","q" => "O,","r" => "|2","s" => "5","t" => "7","u" => "[_]","v" => "V","w" => "\v/","x" => "}{","y" => "'/","z" => "2");
// function leetspeak($str){
    
// return substr_replace($str, $leetAlphabet)
// } 

// echo leetspeak("assasins");

// leetAlphabet = ["a" => 4, "A" => 4,
//                 "b" => 8, "B" => 8,
//                 "" ]
// function leet($str){
    
// }

function leetspeak($str) {
    $leet = [
        'a' => '4', 'A' => '4',
        'b' => '8', 'B' => '8',
        'e' => '3', 'E' => '3',
        'g' => '6', 'G' => '6',
        'l' => '1', 'L' => '1',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7',
        'o' => '0', 'O' => '0'
    ];

    return strtr($str, $leet);
}
echo leetspeak("occurences");
?>