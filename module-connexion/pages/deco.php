<?php

session_start();
session_destroy();
header("Location: ../index.php");
exit();


?>

<?php
//// include "deco.php";
// include ("inscription.php");
// include ("connexion.php");
// include ("profil.php");
// include ("admin.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <button><a href="http://localhost/runtrackPHP/module-connexion/index.php">Accueil</a></button>
            <button><a href="http://localhost/runtrackPHP/module-connexion/inscription.php">Inscription</a></button>
            <button><a href="http://localhost/runtrackPHP/module-connexion/connexion.php">Connexion</a></button>
            <?php if (isset($_SESSION["user"])) {
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/profil.php'>Profil</a></button>";
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/deco.php'>Deconnexion</a></button>";
            }
            ?>
    </header>
        </nav>
        <main>

        </main>
</body>            