<?php

include("../include/config.php");

if (isset($_POST["submit"])) {
    if (!empty($_POST["login"] || (!empty($_POST["mdp"] )))) {
$sql = "SELECT * FROM user WHERE username = :login";
$query = $pdo -> prepare($sql);
$result = $query->execute([':login' => ($_POST['login'])]);
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);

 if ($result && password_verify($_POST["mdp"], $result['password'])) {
        echo "Identifiants correct";
        
        
            $_SESSION['user'] = $result;
            $_SESSION["username"] = $result["username"];
            $_SESSION["id"] = $result["id"];
            // $_SESSION["mdp"] = $result["password"]; // ne jamais stocker le mot de passe même hashé 
            var_dump($result['username']);
            if ($result["username"] == "test") {
        header("Location: http://localhost/runtrackPHP/reservation_de_salle/pages/profil.php");
        }
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
    <link rel="stylesheet" href="../css/index.css">
</head>
<header>
    <nav>
        <?php if (isset($_SESSION["user"])) {
         echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/index.php'>Accueil</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/schedule.php'>Planning</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/reservation-form.php'>Faire une réservation</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/profil.php'>Mon Profil</a>";
        echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/deconnexion.php'>Déconnexion</a>";
        } else {
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/index.php'>Accueil</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/schedule.php'>Planning</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signup.php'>Inscription</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signin.php'>Connexion</a>";
        }
        ?>
    </nav>

</header>
<body>
    <img src="https://www.berthelotentreprises.com/wp-content/uploads/location-salle-reunion-03-1536x1023.jpg">
    <main>
        <form method="post">
            Connexion
            <br>
            <br>
            Identifiant
            <br>
            <input type="text" name="login" placeholder="">
            <br>
            Mot de passe
            <br>
            <input type="password" name="mdp" placeholder="">
            <br>
            <br>
            <input type="submit" name="submit" value="Connexion">
        </form>
    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>