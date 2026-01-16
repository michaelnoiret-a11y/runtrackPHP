<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8","root", "");
$sql = " SELECT * FROM etudiants WHERE naissance >= '2008-01-01' ";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <?php
    echo "<table border='1'>";
    echo" <tr>
      <th scope='col'>prenom</th>
      <th scope='col'>nom</th>
      <th scope='col'>naissance</th>
    </tr>";
    
    foreach ($result as $value) {
        echo "<tr>";
        echo " <td>". $value["prenom"] ."</td>";
        echo " <td>". $value["nom"] ."</td>";
        echo "<td>". $value["naissance"] ."</td>";
        echo "<td>". $value["sexe"] ."</td>";
        echo "<td>". $value["email"] ."</td>";
        echo "</tr>";
    }
    echo"</table>";
    ?>
    </main>
</body>
</html>