<?php
session_start();
require "config/Database.php";
require "models/User.php";
require "models/Quizz.php";

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

$quizz = new Quizz($pdo);
$quizzList = $quizz->getAll();
?>

<h1>Liste des quizz</h1>

<?php foreach ($quizzList as $q): ?>
    <div>
        <h3><?= $q['title'] ?></h3>
        <p><?= $q['description'] ?></p>

        <a href="play.php?quizz_id=<?= $q['id'] ?>">
            <button>Jouer</button>
        </a>
    </div>
<?php endforeach;

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

</header>
<main>
    
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>