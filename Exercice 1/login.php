<?php
$erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
$message = '';

if ($erreur == 1) {
    $message = "Veuillez saisir un login et un mot de passe.";
} elseif ($erreur == 2) {
    $message = "Erreur de login.";
} elseif ($erreur == 3) {
    $message = "Vous avez été déconnecté du service.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>

    <form method="post" action="validation.php">
        <label>Login :</label>
        <input type="text" name="login"><br><br>
        <label>Mot de passe :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>
