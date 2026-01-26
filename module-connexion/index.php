<?php
require "include/config.php";
// include "deco.php";
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
    <link href="css/index.css" rel="stylesheet">
    <title>Document</title>
</head>
<header>
        <nav>
            
            <?php if (isset($_SESSION["user"])) {
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/index.php'>Accueil</a></button>";
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/profil.php'>Profil</a></button>";
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/deco.php'>Deconnexion</a></button>";
            }else {
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/index.php'>Accueil</a></button>";
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/connexion.php'>Connexion</a></button>";
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/inscription.php'>inscription</a></button>";
            }
            ?>
        </nav>
    </header>
<body>
    <main class="bg-index">
                <img src="medias/Cvlte.jpg" alt="Image groupe Cvlte">
                <!-- <form method="post">
                <input type="text" name="login" placeholder="login">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="submit" value="connexion">
                <button>Connexion</button>
                </form> -->
                
    </main>
        
</body>
<footer>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer> 
</html>