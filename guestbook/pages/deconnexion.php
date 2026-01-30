<?php

session_start();
session_destroy();
header("Location: ../index.php");
exit();

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
            <a href="http://localhost/runtrackPHP/guestbook/index.php"></a>
            <a href="http://localhost/runtrackPHP/module-connexion/inscription.php">Inscription</a>
            <a href="http://localhost/runtrackPHP/module-connexion/connexion.php">Connexion</a>
            <?php if (isset($_SESSION["user"])) {
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }
            ?>
    </header>
        </nav>
        <main>

        </main>
</body>