<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = array('a','e','i','o','u');
 for ($i = 0; isset($str[$i]); $i++){
     if ($str[$i] == $voyelles){
        echo $str[$i];
     }
    else{
        echo " ";
    }
}

?>