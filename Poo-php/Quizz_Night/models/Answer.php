<?php
require "Question.php";
Class Answer extends Question {
    private $pdo;
    private $question_id;
    private $content;
    private $is_correct;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function registerAnswer($question_id, $content, $is_correct)
    {
        $this->question_id = $question_id;
        $this->content = $content;
        $this->is_correct = $is_correct;

    $sql = "INSERT INTO answer (content, is_correct, question_id)
            VALUES (:content, :is_correct, :question_id)";

    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([
        ':content' => $content,
        ':is_correct' => $is_correct,
        ':question_id' => $question_id
    ]);
}
    public function update($question_id, $content, $is_correct)
    {
        $sql = "UPDATE answer SET $content = :content, SET $is_correct = :is_correct WHERE question_id = :question_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':question_id' => $question_id,
            ':content' => $content,
            ':is_correct' => $is_correct
        ]);
    }
    public function delete($question_id, $content, $is_correct)
    {
        $sql = "DELETE FROM answer WHERE question_id = :question_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':question_id' => $question_id,
            ':content' => $content,
            ':is_correct' => $is_correct
        ]);
    }
    public function isCorrect($answer_id)
{
    $sql = "SELECT is_correct FROM answer WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':id' => $answer_id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result && $result['is_correct'] == 1;
}
public function getByQuestion($question_id)
{
    $sql = "SELECT * FROM answer WHERE question_id = :question_id";
    
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':question_id' => $question_id
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
?>