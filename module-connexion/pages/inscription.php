<?php
require "../include/config.php";
if (isset($_POST["submit"])) {
    if (!empty($_POST["login"] && (!empty($_POST["mdp"] && (!empty($_POST["prenom"] && (!empty($_POST["nom"])))))))) {
$sql = "INSERT INTO utilisateurs (login, password, prenom, nom) VALUES (:login, :mdp, :prenom, :nom) ";
$query = $pdo -> prepare($sql);
$query->execute([':login' => $_POST["login"], ':mdp' => password_hash($_POST["mdp"], PASSWORD_DEFAULT), ':prenom' => $_POST["prenom"], ':nom' => $_POST["nom"]]);
echo "Compte crée";
header("Location: connexion.php");
}  
else if (empty($_POST["login"]) or (!empty($_POST["mdp"] or (empty($_POST["prenom"]) or (empty($_POST["nom"])))))) {
    echo "Formulaire incomplet";
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
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<header>
        <nav>
            <?php if (isset($_SESSION["user"])) {
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/../index.php'>Accueil</a></button>";
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
    <main>
        <form method="post">
            <h2>Création de compte:</h2>
            login: 
            <input type="text" name="login" placeholder="">
            mot de passe:
            <input type="password" name="mdp" placeholder="">
            prenom:
            <input type="text" name="prenom" placeholder="">
            nom:
            <input type="text" name="nom" placeholder="">
            <input type="submit" name="submit" value="envoyez">
        </form>
        <img src="../medias/Cvlte4.jpg" alt="Pochette album groupe Cvlte">
    </main>
</body>
<footer>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer> 
</html>