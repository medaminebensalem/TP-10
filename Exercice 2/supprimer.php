<?php
$conn = new mysqli("localhost", "root", "", "TP10");

$id = $_GET['id'];
$sql = "DELETE FROM exercice WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php?message=Exercice supprimé avec succès");
} else {
    header("Location: index.php?message=Échec de la suppression");
}
exit();
