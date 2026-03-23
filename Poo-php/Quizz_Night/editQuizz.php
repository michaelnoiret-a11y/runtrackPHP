<?php
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $quizz->update($id, $title, $description);

    header("Location: admin.php");
}