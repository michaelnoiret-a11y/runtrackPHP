<?php
session_start();
require "config/Database.php";
require "models/User.php";

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

// include 'css/style.css';
include 'includes/header.php';

if (!empty($_POST)) {
                    // var_dump($pdo);

    if (strlen($_POST['password']) < 3) {
        echo "Nom trop court";
    } elseif (strlen($_POST['password']) < 6 || !preg_match('/[0-9]/', $_POST['password'])) {
        echo "Mot de passe invalide";
    } else {
        $user->register($_POST['email'], $_POST['password']);
        echo "Compte crée";
        header("Location: login.php");
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
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <button>Inscription</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>