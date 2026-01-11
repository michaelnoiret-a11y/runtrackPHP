<?php
if (isset($_POST["name"]) and isset($_POST["mdp"]) and isset($_POST["email"])){
    foreach($_GET as $key => $value){
        echo "<table>";
        
        echo "<td>".$key . " <td>" . $value;
        echo "</table>";

    }

}
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
<form action="index.php" method= "post">
<input type="texte" name="name" placeholder="name">
<input type="password" name="mdp" placeholder="password">
<input type="email" name="email" placeholder="email">
<input type="submit" name="submit" value="envoyez">
</form> 


<table>
<th>name</th>
<td></td>
<th>mdp</th>
<td></td>
<th>email</th>
<td></td>
</table>
</main>
</body>
</html>