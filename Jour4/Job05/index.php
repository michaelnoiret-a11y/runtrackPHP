<?php
// if(!empty $_POST){
//     if($_POST["name"] == "John" and $_POST["password"] == "Rambo"){
//         echo "C'est pas ma guerre";
//     }
//     else {
//         echo "Mon pire cauchemar";
//     }    
//     }



// if($_POST["name"] == "John" and $_POST["password"] == "Rambo"){
//         echo "C'est pas ma guerre";
//     }
//     else {
//         echo "Mon pire cauchemar";
//     } formulaire non soumis donc erreur

// if (isset($_POST["submit"])){
// if($_POST["name"] == "John" and $_POST["password"] == "Rambo"){
//         echo "C'est pas ma guerre";
//     }
//     else {
//         echo "Mon pire cauchemar";
//     }
// } 
// if (isset($_POST["submit"])){

//   if(!empty($_POST["name"]) and !empty($_POST["mdp"])){
//         $name = htmlentities( $_POST["name"]);
//         $mdp = htmlentities( $_POST["mdp"]);
//         echo $name ." " . $mdp;

//     }
//     else {
//         echo "Tous les champs ne sont pas remplis";
//     }
// }

// if (isset($_POST["submit"])){
    
//   if(!empty($_POST["name"]) and !empty($_POST["mdp"])){
//         $name = htmlentities( $_POST["name"]);
//         $mdp = htmlentities( $_POST["mdp"]);
//     if (strlen($name)<3  && (strlen($mdp))  <3){
//         echo"pas ok";
//     }else {
//         //requete sql 
//                 echo $name ." " . $mdp;
//     }
    
//     }
//     else {
//         echo "Tous les champs ne sont pas remplis";
//     }
// }
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
<input type="text" name="name" placeholder="name">
<input type="password" name="mdp" placeholder="password">
<input type="submit" name="submit" value="envoyez">
</main>
</form> 
</body>
</html>