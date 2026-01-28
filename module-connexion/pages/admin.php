<?php
require "../include/config.php";

//var_dump($_SESSION["user"]);

// var_dump($_SESSION["login"]);


if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'admin') {
    header("Location: connexion.php");
    exit;
}
// else {

// }

// if (isset($_POST["submit"])) {
$query = $pdo -> prepare("SELECT * FROM utilisateurs");
$query -> setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

// } 
// else {
//     echo "Pas d'utilisateurs enregistrés";
// }
$user = $query->fetchAll(PDO::FETCH_ASSOC);

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
            <?php if ($_SESSION["login"] == "admin") {
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/index.php'>Accueil</a></button>";
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/profil.php'>Profil</a></button>";
                echo "<button><a href='http://localhost/runtrackPHP/module-connexion/pages/deco.php'>Deconnexion</a></button>";
            }
        ?>
        </nav>
    </header>
<body>
    <main class="main">
        <!-- <table border="1">
            <tr>
            <th>login</th>
            <th>mdp</th>
            <th>prenom</th>
            <th>nom</th>

             </tr>
            <td><?//php echo $_SESSION["login"] ; ?></td>
            <td><?//php echo $_SESSION["mdp"] ; ?></td>
            <td><?//php echo $_SESSION["prenom"] ; ?></td>
            <td><?//php echo $_SESSION["nom"] ; ?></td>
            </tr>
            </table> -->
            <?php // var_dump($user); ?>
            <?php
            echo "<table border='1'>";
            echo" <tr>
            <th scope='col'>login</th>
            <th scope='col'>mdp</th>
            <th scope='col'>prenom</th>
            <th scope='col'>nom</th>
            </tr>";
    
            foreach ($user as $value) {
                echo "<tr>";
                echo " <td>". $value["login"] ."</td>";
                echo " <td>". $value["password"] ."</td>";
                echo " <td>". $value["prenom"] ."</td>";
                echo " <td>". $value["nom"] ."</td>";
                echo "</tr>";
            }
            echo"</table>";
            ?>
            <img src="../medias/Cvlte2.jpg" alt="Pochette album groupe Cvlte">
    </main>
    
</body>
<footer>
        Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer> 
</html>