<?php

include "../include/config.php";
// var_dump( $_SESSION["user"]["id"]);
// var_dump(date("Y-m-d H:i:s"));

if (isset($_POST["submit"])) {
    if (!empty($_POST["message"])) {
        $sql = "INSERT INTO messages (message, id_user, date) VALUES (:message, :id_user, :date)";
        $query = $pdo -> prepare($sql);
        
        $query->execute([':message' => $_POST["message"], ':id_user' => $_SESSION["user"]["id"], ':date'=> date("Y-m-d H:i:s")]);
             
        header("Location: guestbook.php");
}
}
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
        <form method="post">
            <textarea name="message" rows="" cols="">
            </textarea>
            <input type="submit" name="submit" value="Publier mon message">
        </form>
    </main>
</body>
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
            if (isset($_SESSION["login"]) ) {
                // var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
        </footer>
</html>