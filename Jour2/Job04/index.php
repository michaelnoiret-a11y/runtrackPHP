<?php
for ($i = 0 ; $i <= 101 ; $i++){
    if ($i % 3 == 0 and $i % 5 == 0){
        echo "<br>";
        echo "FizzBuzz";
    }    
    elseif ($i % 3 == 0){
        echo "<br>";
        echo "Fizz";
    }
    elseif ($i % 5 == 0){
        echo "<br>";
        echo "Buzz";
    }
    else{
        echo "<br>";
        echo $i;
    }
}
            
    

?>