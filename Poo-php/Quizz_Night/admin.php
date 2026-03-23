<?php
session_start();

if (!isset($_SESSION['user'])) {
    die("Accès refusé");
}


require "config/Database.php";
require "models/Quizz.php";

$db = new Database();
$pdo = $db->getConnection();

$quizz = new Quizz($pdo);
$quizzList = $quizz->getAll();
?>

<h1>Dashboard Admin</h1>

<a href="formQuizz.php">Créer un quizz</a>

<?php foreach ($quizzList as $q): ?>

    <div>
        <h3><?= $q['title'] ?></h3>

        <a href="editQuizz.php?id=<?= $q['id'] ?>">Modifier</a>
        <a href="deleteQuizz.php?id=<?= $q['id'] ?>">Supprimer</a>
    </div>

<?php endforeach;
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
    <?php if (isset($_SESSION['admin'])) {
        echo "<a href='formQuizz.php'</a>Créer un quizz<br>";
        echo "<a href='formQuestion.php'</a>Créer une question<br>";
        echo "<a href='formAnswer.php'</a>Créer une réponse<br>";
    }
    ?> 
    </header>
    <main>
        <h1>Bienvenue <?= $_SESSION['user']['email'] ?> !</h1>
    </main>
<?php include 'includes/footer.php'; ?>
</body>
</html>