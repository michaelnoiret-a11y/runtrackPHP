<?php
require_once("./models/Forme.php");
require_once("./models/Rectangle.php");

$rectangle = new Rectangle(5,3);
echo $rectangle->aire();
?>