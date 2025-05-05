<?php
$conn = new mysqli("localhost", "root", "", "TP10");

$message = '';
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    $sql = "INSERT INTO exercice (titre, auteur, date_creation) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $titre, $auteur, $date_creation);

    if ($stmt->execute()) {
        header("Location: index.php?message=Exercice ajouté avec succès");
        exit();
    } else {
        $message = "Erreur d'ajout";
    }
}


$result = $conn->query("SELECT * FROM exercice ORDER BY id DESC");
?>

<h2>Ajouter un nouveau exercice</h2>
<?php if ($message) echo "<p style='color:green;'>$message</p>"; ?>
<form method="POST">
    Titre : <input type="text" name="titre" required><br>
    Auteur : <input type="text" name="auteur" required><br>
    Date : <input type="date" name="date_creation" required><br>
    <input type="submit" value="Ajouter">
</form>

<h2>Liste des exercices</h2>
<table border="1">
    <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Date</th><th>Actions</th></tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['titre']) ?></td>
            <td><?= htmlspecialchars($row['auteur']) ?></td>
            <td><?= $row['date_creation'] ?></td>
            <td>
                <a href="modifier.php?id=<?= $row['id'] ?>">Modifier</a> |
                <a href="supprimer.php?id=<?= $row['id'] ?>" onclick="return confirm('Confirmer la suppression ?');">Supprimer</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
