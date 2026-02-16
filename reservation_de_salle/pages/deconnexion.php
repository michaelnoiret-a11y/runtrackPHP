<?php

session_start();
session_destroy();
header("Location:http://localhost/runtrackPHP/reservation_de_salle/index.php");
exit();

?>