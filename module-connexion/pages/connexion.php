<?php
require "../include/config.php";

if (isset($_POST["submit"])) {
    if (!empty($_POST["login"] || (!empty($_POST["mdp"] )))) {
$sql = "SELECT * FROM utilisateurs WHERE login = :login ";
$query = $pdo -> prepare($sql);
$result = $query->execute([':login' => ($_POST['login'])]);
$result = $query->fetch(PDO::FETCH_ASSOC);
// var_dump($result);

 if ($result && password_verify($_POST["mdp"], $result['password'])) {
        echo "Identifiants correct";
        if ($result["login"] == "admin" ) {
            $_SESSION['login'] = "admin";
            header("Location: admin.php");
            exit;

        }else{
            $_SESSION['user'] = $result;
            $_SESSION["login"] = $result["login"];
            $_SESSION["mdp"] = $result["password"];
            $_SESSION["prenom"] = $result["prenom"];
            $_SESSION["nom"] = $result["nom"];
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
}

//if ()

// if (isset($_POST["submit"])) {
//     if (!empty($_POST["login"] && $_POST["mdp"] == "admin")) {
//         header("Location: admin.php");
//     } 
//     elseif (!empty($_POST["login"] && $_POST["mdp"] != "admin")) {
//         header("Location: profil.php");
//     } else {
//         echo "Aucun compte ne correpond à ces identifiants";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/index.css" rel="stylesheet">
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
    
    <main>
        <form method="post">
            <h2>Page de connexion</h2>
            login:
            <input type="text" name="login" placeholder="login">
            mot de passe:
            <input type="password" name="mdp" placeholder="mot de passe">
            <input type="submit" name="submit" value="connexion">
        </form>
        <img src="../medias/Cvlte1.jpg" alt="Pochette album groupe Cvlte">
    </main>
</body>
<footer>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer> 
</html>