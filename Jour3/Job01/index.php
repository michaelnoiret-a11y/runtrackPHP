<?php
$tableau = [200,204,173,98,171,404,459];
for ($i = 0; isset($tableau[$i]);$i++){
    if ($tableau[$i] % 2 == 0)
        echo "X est pair<br>";
    else
        echo "X est impair<br>";
}
?>