<?php
session_start();
require "config/Database.php";
require "models/User.php";
require "models/Question.php";

if (!isset($_SESSION['admin'])) {
    header("Location:index.php");
}

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

$question = new Question($pdo);

$quizz_id = $_GET['quizz_id'] ?? null;

if(!empty($_POST["submit"])) {
    $content = $_POST["content"] ?? '';
    $type = $_POST["type"] ?? '';
    

if ($content && $type && $quizz_id) {

$question_id = $question->registerQuestion($content, $type, $quizz_id);
header("Location: formAnswer.php?question_id=" . $question_id);

include 'includes/header.php';
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
    <?php $quizz_id = $_GET['quizz_id'] ?? null;  // récupéré depuis la redirection ?>

    <form action="post">
        <input type="text" name="content" placeholder="Question">
        <select name="type">
            <option value="qcm">QCM</option>
            <option value="truefalse">Vrai/Faux</option>
        </select>
        <!-- <input type="hidden" name="quizz_id" placeholder=<?php echo $_SESSION["quizz_id"] ?>> -->
        <input type="submit" name="submit">
    </form>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>