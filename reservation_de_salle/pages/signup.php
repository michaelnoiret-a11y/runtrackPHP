<?php

include("../include/config.php");

if (isset($_POST["submit"])) {
    if (!empty($_POST["login"] && (!empty($_POST["mdp"] && (!empty($_POST["mdp2"] && ($_POST["mdp"] == $_POST["mdp2"]))))))) {
$sql = "INSERT INTO user (username, password) VALUES (:login, :mdp)";
$query = $pdo -> prepare($sql);
$query->execute([':login' => $_POST["login"], ':mdp' => password_hash($_POST["mdp"], PASSWORD_DEFAULT)]);
echo "Compte crée";
header("Location: signin.php");
}  
else if (empty($_POST["login"]) || (empty($_POST["mdp"] || (empty($_POST["mdp2"]))))) {
    echo "Champ(s) non rempli(s)";
}
else {
    echo "Formulaire non transmis";
}
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
            Inscription
            <br>
            Identifiant
            <br>
            <input type="text" name="login" placeholder="">
            <br>
            Mot de passe
            <br>
            <input type="password" name="mdp" placeholder="">
            <br>
            Confirmation de mot de passe
            <br>
            <input type="password" name="mdp2" placeholder="">
            <br>
            <input type="submit" name="submit" value="Inscription">
        </form>
    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>