<?php


class Guerrier {
    private $id;
    private $nom;
    private $degats;

    public function __construct($nom, $degats = 0, $id = null) {
        $this->nom = $nom;
        $this->degats = $degats;
        $this->id = $id;
    }

    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getDegats() { return $this->degats; }

    public function frapper(Guerrier $adversaire, $manager) {
        $adversaire->recevoirDegats(5, $manager);
    }

    public function recevoirDegats($quantite, $manager) {
        $this->degats += $quantite;
        if ($this->degats >= 100) {
            $manager->supprimer($this);
        } else {
            $manager->mettreAJour($this);
        }
    }
}


?>