<?php
require_once("./models/Operation.php");

$operation = new Operation(2,4);

echo $operation->nombre1 . "<br>";
echo $operation->nombre2 . "<br>";
$operation->addition();
?>
