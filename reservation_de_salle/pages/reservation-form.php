<?php

include("../include/config.php");
// var_dump(   $_SESSION['id']);
// var_dump(   $_SESSION['user']);

$date = new DateTime("$dateChoisie");
$jour = $date->format("N");
// $heure = $date->format();
if ($jour == 6 || $jour == 7) {
    // if ($heure < 3600 || $heure < 28800 || $heure > 68400){
    echo "reservation impossible";
}
// }
if (isset($_POST["submit"])) {
    if (!empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["heure_de_debut"] && !empty($_POST["heure_de_fin"]))) {
        $sql = "INSERT INTO event (event_title, description, start_date, end_date, creator_id) VALUES (:titre, :description, :heure_de_debut, :heure_de_fin, :creator_id)";
        $query = $pdo -> prepare($sql);
        $result = $query->execute([':titre' => $_POST["titre"], ':description' => $_POST["description"], ':heure_de_debut' => $_POST["heure_de_debut"], ':heure_de_fin' => $_POST["heure_de_fin"], ':creator_id' => $_SESSION["user"]["id"]]);
        // var_dump($result);
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
        Reservation de salle:
        <?php if (isset($_SESSION["user"])) {
        echo "<button><a href='http://localhost/runtrackPHP/reservation_de_salle/index.php'>Accueil</a></button>";
        echo "<button><a href='http://localhost/runtrackPHP/reservation_de_salle/pages/schedule.php'>Planning</a></button>";
        echo "<button><a href='http://localhost/runtrackPHP/reservation_de_salle/pages/reservation-form.php'>Faire un réservation</a></button>";
        echo "<button><a href='http://localhost/runtrackPHP/reservation_de_salle/pages/profil.php'>Mon Profil</a></button>";
        echo "<button><a href='http://localhost/runtrackPHP/reservation_de_salle/pages/deconnexion.php'>Déconnexion</a></button>";
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
            <br>
            titre:
            <input type="text" name="titre" placeholder="">
            <br>
            description:
            <input type="text" name="description" placeholder="">
            <br>
            Heure de début:
            <input type="datetime-local" name="heure_de_debut">
            <br>
            Heure de fin:
            <input type="datetime-local" name="heure_de_fin">
            <br>
            <br>
            <input type="submit" name="submit" value="Soumettre ma réservation">
            <br>
        </form>
    </main>
    
</body>
<footer>
    <br>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>