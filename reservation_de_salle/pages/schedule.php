<?php

include("../include/config.php");

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
        <table border="1">
            <tr>
                <?php
               
                // foreach($days as $day) {
                    
                // }
                // $d = strtotime("-4 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("-3 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("-2 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("-1 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("0 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("1 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("2 days");
                // echo date("l d F Y", $d);
                // $d = strtotime("3 days");
                // echo date("l d F Y", $d);
            
                // $d = strtotime("8h");
                // echo date("H", $d) . "<br>";
                // echo date("9") . "<br>";
                // echo date("10 - 11") . "h" . "<br>";
                // echo date("11 - 12") . "h" . "<br>";
                // echo date("12 - 13") . "h" . "<br>";
                // echo date("13 - 14") . "h" . "<br>";
                // echo date("14 - 15") . "h" . "<br>";
                // echo date("15 - 16") . "h" . "<br>";
                // echo date("16 - 17") . "h" . "<br>";
                // echo date("17 - 18") . "h" . "<br>";
                // echo date("18 - 19") . "h" . "<br>";
        //     ?>
<!-- </table>

    </tr>
    <td>""</td>
    <td>""</td>
    <td>""</td>
    </tr>
</table> -->
<?php
$sql = "SELECT * FROM user INNER JOIN event WHERE user.id = event.creator_id";
$query = $pdo->prepare($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
// echo $result;

$days = ["lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche"];
$hours = [8,9,10,11,12,13,14,15,16,17,18,19];
foreach ($hours as $hour) {
    foreach ($days as $day) {
    echo "<table border='1'>";
    echo" <tr>
    <th scope='row'>$hour</th>
    <th scope='col'>$day</th>
    <td scope='col'> </td>
      
    </tr>";

        // echo " <th>". $day ."</th>";
        // echo " <td>".  "</td>";
        // echo "<td>".  "</td>";
        // echo "<td>".  "</td>";
        // echo "<td>".  "</td>";
        // echo "</tr>";
    }
    echo "</table>";
}

    
?>
    </main>
    
</body>
<footer>
    Créer par Michaël Noiret Bachelor IT spécialisation développement web première année
</footer>
</html>