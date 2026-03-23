<?php 
Class Quizz {
    private $pdo;
    private $title;
    private $description;
    private $user_id;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function registerQuizz($title, $description, $user_id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->user_id = $user_id;

        $sql = "INSERT INTO quizz (title, description, user_id) VALUES (:title, :description, :user_id)";
        $stmt = $this->pdo->prepare($sql);
         $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':user_id' => $user_id
        ]);
        
        return $this->pdo->lastInsertID(); // retourne l'ID du quizz créé
        
        // $sql1 = "INSERT INTO question (quizz_id, content, type) VALUES (:quizz_id, :content, :type)";
        // stmt1 = $this->pdo->prepare($sql);
        // stmt1 = execute([
        //     ':quizz' => $quizz_id,
        //     ':content' => content,
        //     ':type' => type
        // ]);

    }
    public function update($title, $description, $user_id)
    {
        $sql = "UPDATE quizz SET $title = :title, SET $description = :description WHERE user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':user_id' => $user_id
        ]);
    }
    public function delete($title, $description, $user_id)
    {
        $sql = "DELETE FROM quizz WHERE user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':user_id' => $user_id
        ]);
    }
    public function getAll()
{
    $stmt = $this->pdo->query("SELECT * FROM quizz");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}

