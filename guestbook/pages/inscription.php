<?php

 include "../include/config.php";


if (isset($_POST["submit"])) {

    if (!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        
        $sql = "INSERT INTO `user` (login, password) VALUES (:login, :mdp) ";
        $query = $pdo -> prepare($sql);
        
        $query->execute([':login' => $_POST["login"], ':mdp' => password_hash($_POST["mdp"], PASSWORD_DEFAULT)]);
             
        header("Location: connexion.php");
        exit();
   
    } else {
        echo "Formulaire incomplet";
    }
}

// var_dump();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
<body>
    <header>
        <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deco.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
                   
            }
            if (isset($_SESSION["login"]) ) {
                var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </header>
    <main>
        <form method="post">
            <table>
            <h2>Formulaire Inscription:</h2>
            login:
            <input type="text" name="login" placeholder="">
            password:
            <input type="password" name="mdp" placeholder="">
            <input type="submit" name="submit" value="Inscription">
            </table>
        </form>
    </main>

    <footer>
        <nav>
           <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deco.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
            }
            if (isset($_SESSION["login"]) ) {
                var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </footer>          
            Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</body>
</html>