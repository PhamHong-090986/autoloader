<?php
require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';
class ControleurAccueil {
    private $billet;
    public function __construct() {
        $this->billet = new Billet();
    }
// Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = $this->billet->lastBillet();
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        $vue = new Vue("Accueil");
        $vue->generer(array('billets' => $billets));
    }
}