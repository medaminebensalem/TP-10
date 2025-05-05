<?php
class GuerrierManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function ajouter(Guerrier $g) {
        $stmt = $this->pdo->prepare("INSERT INTO guerriers (nom) VALUES (?)");
        $stmt->execute([$g->getNom()]);
    }

    public function supprimer(Guerrier $g) {
        $stmt = $this->pdo->prepare("DELETE FROM guerriers WHERE id = ?");
        $stmt->execute([$g->getId()]);
    }

    public function mettreAJour(Guerrier $g) {
        $stmt = $this->pdo->prepare("UPDATE guerriers SET degats = ? WHERE id = ?");
        $stmt->execute([$g->getDegats(), $g->getId()]);
    }

    public function trouverParNom($nom) {
        $stmt = $this->pdo->prepare("SELECT * FROM guerriers WHERE nom = ?");
        $stmt->execute([$nom]);
        $data = $stmt->fetch();
        if ($data) {
            return new Guerrier($data['nom'], $data['degats'], $data['id']);
        }
        return null;
    }

    public function lister() {
        return $this->pdo->query("SELECT * FROM guerriers")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>