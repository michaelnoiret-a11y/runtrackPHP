<?php

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function register($email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (email, password)
                VALUES (:email, :password)";

        $stmt = $this->pdo->prepare($sql);
         $result =  $stmt->execute([
            ':email' => $email,
            ':password' => $hash
        ]);
        // var_dump($result);
        return $result;
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email
        ]);

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function update($id, $email)
    {
        $sql = "UPDATE user SET email = :email WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':email' => $email
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id
        ]);
    }
}