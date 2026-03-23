<?php
session_start();
require "config/Database.php";
require "models/User.php";
require "models/Quizz.php";

if (!isset($_SESSION['admin'])) {
    header("Location:index.php");
}

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

$quizz = new Quizz($pdo);


// $title = $_POST["title"];
// $description = $_POST["description"];

//  // Créer le quizz lié à l'utilisateur
// $quizz_id = $quizz->registerQuizz($title, $description, $user_id);
// $user_id = $_SESSION['user_id'];

//  // Redirection vers le formulaire de questions
// header("Location: registerQuestion.php?quizz_id=$quizz_id");
//     exit;

// include 'css/style.css';
include 'includes/header.php';


if(!empty($_POST["submit"])) {
    $title = $_POST["title"] ?? '';
    $description = $_POST["description"] ?? '';
    $user_id = $_SESSION["user"]["id"] ?? '';

        if ($title && $description) {

        $quizz_id = $quizz->registerQuizz($title, $description, $user_id);

        header("Location: formQuestion.php?quizz_id=" . $quizz_id);
        exit;
    }
}
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
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="hidden" name="user_id" value=<?php echo $_SESSION["admin"]?>>
        <input type="submit" name="submit">
        
    </form>

</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>