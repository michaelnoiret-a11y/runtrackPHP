<?php

include "../include/config.php";

// if (!isset($_SESSION["login"])) {
//     header("Location: connexion.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
    <body>
        <header>
            <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/Messages.php'>Messages</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
            }
            if (isset($_SESSION["login"])) {
                // var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </header>
    <main class="commentaire"> 
        <?php
        $sql = "SELECT * FROM `user` INNER JOIN messages ON user.id = messages.id_user";
        $query = $pdo -> prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo"<pre>";
        var_dump($result);
        echo"</pre> ";

        ?>
    </main>
        <footer>
            <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
            }
            if (isset($_SESSION["login"])) {
                // var_dump($_SESSION["login"]);
            }
            ?>
        </footer>
    </nav>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
    </body>
</html>