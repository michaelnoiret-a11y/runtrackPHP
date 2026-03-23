<?php
session_start();
require "config/Database.php";
require "models/Question.php";
require "models/Answer.php";

$db = new Database();
$pdo = $db->getConnection();

$questionModel = new Question($pdo);
$answerModel = new Answer($pdo);

$quizz_id = $_GET['quizz_id'];

// récupérer questions
$questions = $questionModel->getByQuizz($quizz_id);
?>

<form method="post" action="result.php">

<input type="hidden" name="quizz_id" value="<?= $quizz_id ?>">

<?php foreach ($questions as $q): ?>

    <h3><?= $q['content'] ?></h3>

    <?php
    $answers = $answerModel->getByQuestion($q['id']);
    foreach ($answers as $a):
    ?>

        <label>
            <input type="radio" name="answers[<?= $q['id'] ?>]" value="<?= $a['id'] ?>">
            <?= $a['content'] ?>
        </label><br>

    <?php endforeach; ?>

<?php endforeach; ?>

<button>Valider</button>
</form>