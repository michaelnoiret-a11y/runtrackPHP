<?php
session_start();
require 'config/Database.php';
require 'models/User.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);



if(!empty($_POST)) {
    $user->update($_SESSION['user']['id'], $_POST['email']);
    $_SESSION['user']['email'] = $_POST['email'];
    password_verify();
    header("Location: profile.php");
}
include 'css/style.css';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <main>
        <form method="post">
    email:
    <input type="text" name="email" value="<?= $_SESSION['user']["email"] ?>">
    mdp:
    <input type="text" name="password" value="<?= $_SESSION['user']["password"]?>">
    <button>Modifier</button>
</form>
    </main>
</body>
</html>

<?php include 'includes/footer.php'; ?>