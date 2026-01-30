<?php
 include "../include/config.php";

if (isset($_POST["submit"])) {
    if (!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        $sql = "SELECT * FROM `user` WHERE login = :login ";
$query = $pdo -> prepare($sql);
$result = $query->execute([':login' => ($_POST['login'])]);
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result );
if ($result && password_verify($_POST["mdp"], $result['password'])) {
        echo "Identifiants correct";
        var_dump($result["login"]);
        
            $_SESSION['user'] = $result;
            $_SESSION["login"] = $result["login"];
            
            header("Location: profil.php");
            exit;
        // if ($result["login"] == "admin" ) {
        //     header("Location: admin.php");
        //     exit;

        // }else{
      
        
        
} else {
    echo "Mot de passe n'est pas correct";
}     
} else {
    echo "Identifiants incorrects";
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
                var_dump($_SESSION["login"]);
            }
            ?>
    </header>
        </nav>
    <main>
        <form method="post">
            <h2>Formulaire Connexion:</h2>
            login:
            <input type="text" name="login" placeholder="">
            password:
            <input type="password" name="mdp" placeholder="">
            <br>
            <input type="submit" name="submit" value="Connexion">
        </form>
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
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
            }
            if (isset($_SESSION["login"]) ) {
                var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </header>
            <br>
            Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
    </footer>
    </body>
</html>