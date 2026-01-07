<?php

for ($i = 0 ; $i < 101 ; $i++){
    if ( $i >= 0 and $i <= 20) {
        echo "<br>";
        echo "<em>" . $i . "</em>";
    }
    elseif ($i == 42){
            echo "<br>";
            echo "LaPlateforme";
    
    }
    elseif ( $i >= 25 and  $i <= 50) {
            echo "<br>";
            echo "<u>" . $i . "</u>";
    }
    else {
            echo "<br>";
            echo $i;
                }
            }

    // if(/* */ ){

    // }
    // elseif () {

    // }
    // else () {

    // }

?>