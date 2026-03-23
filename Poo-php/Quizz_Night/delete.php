<?php
session_start();
require 'config/Database.php';
require 'models/User.php';

$db = new Database();
$pdo = $db->getConnection();
$user = new User($pdo);

$user->delete($_SESSION['user']['id']);
session_destroy();

header("Location: index.php");