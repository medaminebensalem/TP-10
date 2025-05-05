<?php

require 'guerriers.php';
require 'guerriersM.php';

$pdo = new PDO('mysql:host=localhost;dbname=TP10', 'root', '');
$manager = new GuerrierManager($pdo);

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    if (!$manager->trouverParNom($nom)) {
        $guerrier = new Guerrier($nom);
        $manager->ajouter($guerrier);
        echo "Guerrier créé !";
    } else {
        echo "Ce nom est déjà utilisé.";
    }
}



if (isset($_POST['attaquant']) && isset($_POST['cible'])) {
    $attaquant = $manager->trouverParNom($_POST['attaquant']);
    $cible = $manager->trouverParNom($_POST['cible']);
    if ($attaquant && $cible) {
        $attaquant->frapper($cible, $manager);
        echo "{$attaquant->getNom()} frappe {$cible->getNom()}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Créer un guerrier</h2>
<form method="POST">
    <input type="text" name="nom" placeholder="Nom du guerrier" required>
    <button type="submit">Créer</button>
</form>

<h2>Combattre</h2>
<form method="POST">
    <input type="text" name="attaquant" placeholder="Nom de l'attaquant" required>
    <input type="text" name="cible" placeholder="Nom de la cible" required>
    <button type="submit">Frapper</button>
</form>

</body>
</html>