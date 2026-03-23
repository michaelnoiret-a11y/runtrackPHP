<?php

class Database
{
    private $host = "localhost";
    private $dbname = "quizz-night";
    private $user = "root";
    private $pass = "";
    private $pdo;

    public function getConnection()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return $this->pdo;
    }
}

