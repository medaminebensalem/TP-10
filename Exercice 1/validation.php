<?php
session_start();
require 'utilisateur.php';

if (isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
    session_destroy();
    header("Location: login.php?erreur=3");
    exit();
}

$login = isset($_POST['login']) ? trim($_POST['login']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if (empty($login) || empty($password)) {
    header("Location: login.php?erreur=1");
    exit();
}

if ($login === USERLOGIN && $password === USERPASS) {
    $_SESSION['CONNECT'] = 'OK';
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location: accueil.php");
    exit();
} else {
    header("Location: login.php?erreur=2");
    exit();
}
