<?php
$conn = new mysqli("localhost", "root", "", "TP10");

$id = $_GET['id'];
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    $sql = "UPDATE exercice SET titre=?, auteur=?, date_creation=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $titre, $auteur, $date_creation, $id);

    if ($stmt->execute()) {
        header("Location: index.php?message=Exercice modifié avec succès");
        exit();
    } else {
        $message = "Échec de la modification.";
    }
}

$sql = "SELECT * FROM exercice WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<h2>Modifier un exercice</h2>
<?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>

<form method="POST">
    Titre : <input type="text" name="titre" value="<?= htmlspecialchars($data['titre']) ?>" required><br>
    Auteur : <input type="text" name="auteur" value="<?= htmlspecialchars($data['auteur']) ?>" required><br>
    Date : <input type="date" name="date_creation" value="<?= $data['date_creation'] ?>" required><br>
    <input type="submit" value="Enregistrer les modifications">
</form>
