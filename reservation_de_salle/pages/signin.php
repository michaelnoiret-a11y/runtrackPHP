<?php

include("../include/config.php");

if (isset($_POST["submit"])) {
    if (!empty($_POST["login"] || (!empty($_POST["mdp"] )))) {
$sql = "SELECT * FROM user WHERE username = :login";
$query = $pdo -> prepare($sql);
$result = $query->execute([':login' => ($_POST['login'])]);
$result = $query->fetch(PDO::FETCH_ASSOC);
// var_dump($result);

 if ($result && password_verify($_POST["mdp"], $result['password'])) {
        echo "Identifiants correct";
        // var_dump($result["login"]);
        
            $_SESSION['user'] = $result;
            $_SESSION["login"] = $result["login"];
            $_SESSION["mdp"] = $result["password"]; // ne jamais stocker le mot de passe même hashé 

        header("Location: profil.php");
        exit;
        }
    
    } else {
        echo "Mot de passe n'est pas correct";
    }
}
else {
    echo "Identifiants incorrects";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <nav>
        <?php if (!isset($_SESSION["user"])) {
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/index.php'>Accueil</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/schedule.php'>Planning</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signup.php'>Inscription</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signin.php'>Connexion</a>";
        } else {
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/index.php'>Accueil</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/profil.php'>Mon Profil</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/deconnexion.php'>Déconnexion</a>";
        }
        ?>
    </nav>

</header>
<body>
    <main>
        <form method="post">
            Connexion
            <br>
            Identifiant
            <br>
            <input type="text" name="login" placeholder="">
            <br>
            Mot de passe
            <br>
            <input type="password" name="mdp" placeholder="">
            <br>
            <input type="submit" name="submit" value="Connexion">
        </form>
    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>