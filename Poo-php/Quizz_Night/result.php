<?php
require "config/Database.php";
require "models/Answer.php";

$db = new Database();
$pdo = $db->getConnection();

$answerModel = new Answer($pdo);

$userAnswers = $_POST['answers'] ?? [];

$score = 0;
$total = count($userAnswers);

foreach ($userAnswers as $question_id => $answer_id) {

    if ($answerModel->isCorrect($answer_id)) {
        $score++;
    }
}

echo "<h1>Score : $score / $total</h1>";