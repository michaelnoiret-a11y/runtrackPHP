<?php

include("include/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
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
    <img src="https://tse1.mm.bing.net/th/id/OIP.Iy8qxLxXM9_70AZMtbN2WgHaEK?rs=1&pid=ImgDetMain&o=7&rm=3">
    <main>

    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>