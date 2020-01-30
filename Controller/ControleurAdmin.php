<?php
require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';
class ControleurAdmin {
    private $billet;
    public function __construct() {
        $this->billet = new Billet();
    }
// Affiche la liste de tous les billets du blog
    public function modifier($idBillet) {
        $billet = $this->billet->getBillet($idBillet);
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        $vue = new Vue("Modifier");
        $vue->generer(array('billet' => $billet));
    }

    public function save($idBillet, $contenu) {
        $billet = $this->billet->saveBillet($idBillet, $contenu);
        $billets = $this->billet->getBillets();
        
        if ($billet == 1) {
            $billets = $this->billet->getBillets();
            $vue = new Vue("Admin");
            $vue->generer(array('billets' => $billets));
        }
        else {
            $this->connexion->erreur("Save not sucess");
        }
    }

    public function delete($idBillet) {
        $billet = $this->billet->deleteBillet($idBillet);
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        if ($billet == 1) {
            $billets = $this->billet->getBillets();
            $vue = new Vue("Admin");
            $vue->generer(array('billets' => $billets));
        }
        else {
            $this->connexion->erreur("Delete not sucess");
        }
    }

    public function ajouter() {
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        $vue = new Vue("Ajouter");
        $vue->generer(array());
    }

    public function saveNewBillet($titre, $contenu) {
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        $billet = $this->billet->saveNewBillet($titre, $contenu);
        // détermine la nouvelle vue. Appelle la protected function BuildView du Controller.php l.40
        if ($billet == 1) {
            $billets = $this->billet->getBillets();
            $vue = new Vue("Admin");
            $vue->generer(array('billets' => $billets));
        }
        else {
            $this->connexion->erreur("Save new not sucess");
        }
    }
}