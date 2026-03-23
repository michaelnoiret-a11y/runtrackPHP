<?php
session_start();
require "config/Database.php";
require "models/User.php";

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// if (isset($_SESSION['admin']))
//     include 'formQuizz.php';
//     include 'formQuestion.php';
//     include 'formAnswer.php';



$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

// include 'css/style.css';
include 'includes/header.php';
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
    <a href="edit.php">Modifier</a><br>
    <a href="delete.php">Supprimer</a><br>
    <a href="logout.php">Déconnexion</a><br>
    </header>
    <main>
        <h1>Bienvenue <?= $_SESSION['user']['email'] ?> </h1>
    </main>
<?php include 'includes/footer.php'; ?>
</body>
</html>