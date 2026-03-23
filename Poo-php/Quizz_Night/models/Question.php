<?php
require "Quizz.php";
Class Question extends Quizz{
    private $pdo;
    private $quiz_id;
    private $content;
    private $type;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function registerQuestion($content, $type, $quizz_id)
    {
        $this->content = $content;
        $this->type = $type;
        $this->quiz_id = $quizz_id;

    $sql = "INSERT INTO question (content, type, quizz_id)
            VALUES (:content, :type, :quizz_id)";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':content' => $content,
        ':type' => $type,
        ':quizz_id' => $quizz_id
    ]);

    return $this->pdo->lastInsertId();
}
    public function update($quizz_id, $content, $type)
    {
        $sql = "UPDATE question SET $content = :content, SET $type = :type WHERE quiz_id = :quiz_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':quiz_id' => $quizz_id,
            ':content' => $content,
            ':type' => $type
        ]);
    }
    public function delete($quizz_id, $content, $type)
    {
        $sql = "DELETE FROM question WHERE quiz_id = :quiz_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':quiz_id' => $quizz_id,
            ':content' => $content,
            ':type' => $type
        ]);
    }
    public function getByQuizz($quizz_id)
{
    $sql = "SELECT * FROM question WHERE quizz_id = :quizz_id";
    
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':quizz_id' => $quizz_id
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}