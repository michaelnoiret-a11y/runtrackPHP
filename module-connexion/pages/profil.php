<?php
require "../include/config.php";
 
if(!isset ($_SESSION['user']) ){
    header("Location: ../index.php");
    exit;
}
else{
    $user = $_SESSION["user"];
}

// if($_SESSION['login'] !== "admin"){
//     header("Location: index.php");
//     exit;
// }


$sql = "SELECT login, password, prenom, nom FROM utilisateurs";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);


// if ($_SESSION["login"] && $_SESSION["password"] && $_SESSION["prenom"] && $_SESSION["nom"] != $result["login"] && $result["password"] && $result["prenom"] && $result["nom"]) {

// $sql = "UPDATE login, password, prenom, nom FROM utlisateurs";
// $query = $pdo->prepare($sql);
// $query->execute();
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
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/../index.php'>Accueil</a></button>";
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/connexion.php'>Connexion</a></button>";
                   echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/inscription.php'>inscription</a></button>";
            }
        ?>
        </nav>
    </header>
<body class="body-profil">
    

    <main class="main">
        <h1><?php if (isset($_SESSION["login"])) {
            echo "Bievenue" . " " . $_SESSION['login'] ;
        }
        else {
            echo "";
        }
    ?></h1>
         <table border="1">
            <tr>
            <th>login</th>
            <th>mdp</th>
            <th>prenom</th>
            <th>nom</th>

             </tr>
            <td><?php echo $_SESSION["login"] ; ?></td>
            <td><?php echo $_SESSION["mdp"] ; ?></td>
            <td><?php echo $_SESSION["prenom"] ; ?></td>
            <td><?php echo $_SESSION["nom"] ; ?></td>
            </tr>
            </table>

            <form method="post">
            login:
            <input type="text" name="login" placeholder="login">
            mot de passe:
            <input type="password" name="mdp" placeholder="mot de passe">
            prenom:
            <input type="text" name="prenom" placeholder="prenom">
            nom:
            <input type="text" name="nom" placeholder="nom">
            <input type="submit" name="submit" value="envoyez">
            </form>
            <img src="../medias/Cvlte3.jpg" alt="Image groupe Cvlte">
    </main>
</body>
<footer>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer> 
</html>