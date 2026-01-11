<?php
if (isset($_GET["name"]) and isset($_GET["mdp"]) and isset($_GET["email"])){
    echo "<table>";
    echo '<tr>
        <th>Clé</th>
        <th>Valeur</th>
        <th>email</th>
        </tr>'
    foreach($_GET as $key => $value){
        
        echo "<td>".$key . " <td>" . $value;
        echo "</table>";

    }
    echo "</table>";
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
        <form action="index.php" method= "get">
            <input type="text" name="name" placeholder="name">
            <input type="password" name="mdp" placeholder="password">
            <input type="email" name="email" placeholder="email">
            <input type="submit" name ="submit" value="envoyez">
        </form> 





<?php if (isset($_GET["name"]) and isset($_GET["mdp"]) and isset($_GET["email"])){

    ?>
      <table border="1">
      <tr>
        <th>Clé</th>
        <th>Valeur</th>
        <th>email</th>
      </tr>
    <?php
       foreach($_GET as $key => $value){

    ?>
      <tr>
        <td><?php echo $key ?> </td>
        <td><?php echo $value ?></td>
      </tr>
    
<?php   } ?> 
   </table>
   <?php
} ?>
    </main>
</body>
</html>