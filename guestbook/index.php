<?php

include "include/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
                   
            }
            if (isset($_SESSION["login"]) ) {
                // var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </header>

    <main>
        <h1>Bienvenue sur livre d'or</h1>
        <p>Merci de laisser un like, un commentaire pour m'améliorer, j'espère que vous vous plairez ici</p>
    </main>

    <footer>
        <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
            }
            // if (isset($_SESSION["login"]) ) {
                // var_dump($_SESSION["login"]);
            // }
            ?> 
        </nav>
    </footer>
     Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</body>
</html>