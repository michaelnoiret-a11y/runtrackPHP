<?php
session_start();
require "config/Database.php";
require "models/User.php";

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

// include 'css/style.css';
include 'includes/header.php';

if (!empty($_POST)) {
    $result = $user->login($_POST['email'], $_POST['password']); // trim permet d'enlever les espaces au début et à la fin.
                                                                 // ?? vérifie si la clé existe avant d'y accéder, cela évite des warnings si le formulaire est vide.

    if ($result) {

        // stocker les infos en session
        $_SESSION['user'] = $result;
        $_SESSION["user_id"] = $result['id'];
        

        // 🔥 gestion du rôle
        if ($result['role'] === 'admin') {

            $_SESSION['admin'] = $result['id'];
            header("Location: admin.php");

        } else {

            header("Location: profile.php");
        }

        exit;

    } else {
        echo "Identifiants incorrects";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <form method="post">
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Mot de passe">
        <br>
        <button>Connexion</button>
        </form>
    </main>
</body>
</html>