<?php
session_start();

if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] !== 'OK') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>page login</title>
</head>
<body>
    <h2>bienvenue  <?php echo htmlspecialchars($_SESSION['login']); ?></h2>
    <a href="validation.php?afaire=deconnexion">Déconnexion</a>
</body>
</html>
