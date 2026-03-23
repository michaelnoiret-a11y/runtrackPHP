<?php
session_start();
require "config/Database.php";
require "models/User.php";
require "models/Answer.php";

if (!isset($_SESSION['admin'])) {
    header("Location:index.php");
}

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

$answer = new Answer($pdo);

$question_id = $_GET['question_id'] ?? null;

if(!empty($_POST["submit"])) {
    $answers = $_POST['answers'] ?? [];
    $correct = $_POST['correct'] ?? null;

if ($question_id && !empty($answers)) {

        foreach ($answers as $index => $content) {

            $is_correct = ($index == $correct) ? 1 : 0;

            $answer->registerAnswer($content, $is_correct, $question_id);
        }

        echo "Réponses ajoutées !";

        // 🔁 possibilité d’ajouter une autre question
        echo '<a href="formQuestion.php?quizz_id=' . $_GET['quizz_id'] . '">Ajouter une autre question</a>';
    }
}

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

    <form method="post">

    <input type="text" name="answers[]" placeholder="Réponse 1" required>
    <input type="text" name="answers[]" placeholder="Réponse 2" required>
    <input type="text" name="answers[]" placeholder="Réponse 3">
    <input type="text" name="answers[]" placeholder="Réponse 4">

    <p>Bonne réponse :</p>
    <input type="radio" name="correct" value="0"> 1
    <input type="radio" name="correct" value="1"> 2
    <input type="radio" name="correct" value="2"> 3
    <input type="radio" name="correct" value="3"> 4

    <button>Valider</button>
</form>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>