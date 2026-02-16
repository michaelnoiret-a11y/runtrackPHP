<?php

include("../include/config.php");

// if(!isset ($_SESSION['login']) ) {
//     header("Location: ../index.php");
//     exit;
// }
// else{
//     $user = $_SESSION["login"];
// }

$sql = "SELECT username, password FROM user";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);


if(isset ($_POST["submit"])) {
    if(!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        if($_POST["login"] !== $_SESSION["username"] && password_verify($_POST["mdp"], $result['password'])!== true) {
        $sql = "UPDATE `user` SET login = $_POST[login] WHERE username = $_SESSION[username]";
        $query = $pdo->prepare($sql);
        $query->execute();
    }
}       else {
        echo "no";
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
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signup.php'>Inscription</a>";
            echo "<a href='http://localhost/runtrackPHP/reservation_de_salle/pages/signin.php'>Connexion</a>";
        }
        ?>
    </nav>

</header>
<body>
    <main>
        <form method="post">
            Modification
            <br>
            <br>
            Identifiant:
            <br>
            <input type="text" name="login" placeholder="login" value= <?php echo $_SESSION["username"] ?>>
            <br>
            Mot de passe:
            <br>
            <input type="password" name="mdp" placeholder="mot de passe">
            <br>
            <br>
            <input type="submit" name="submit" value="envoyez">
        </form>
    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>