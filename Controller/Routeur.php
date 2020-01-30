<?php
require_once 'Controller/ControleurAccueil.php';
require_once 'Controller/ControleurBillet.php';
require_once 'Controller/ControleurArticle.php';
require_once 'Controller/ControleurConnexion.php';
require_once 'Controller/ControleurAdmin.php';
require_once 'Controller/ControleurCommentaire.php';

class Routeur {
    private $ctrlAccueil;
    private $ctrlBillet;
    private $ctrlChapitre;
    private $ctrlConnexion;
    private $ctrlAdmin;
    private $ctrlCommentaire;
    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlChapitre = new ControleurChapitre();
        $this->ctrlConnexion = new ControleurConnexion();
        $this->ctrlAdmin = new ControleurAdmin();
        $this->ctrlCommentaire = new ControleurCommentaire();
    }
    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'billet') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBillet->billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                }
                else if ($_GET['action'] == 'chapitre') {
                    $this->ctrlChapitre->article();
                }
                else if ($_GET['action'] == 'connexion') {
                    $this->ctrlConnexion->connexion();
                }
                else if ($_GET['action'] == 'commentaire') {
                    
                    $this->ctrlCommentaire->commentaire();
                }
                
                else if ($_GET['action'] == 'login') {
                    $pseudo = $this->getParametre($_POST, 'pseudo');
                    $password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnexion->login($pseudo,$password);
                }
                else if ($_GET['action'] == 'modifier') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->modifier($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'save') {
                    $contenu = $this->getParametre($_POST, 'contenu2');
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->save($idBillet,$contenu);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'supprimer') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->delete($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'ajouter') {
                    $this->ctrlAdmin->ajouter();
                }
                else if ($_GET['action'] == 'saveNew') {
                    $titre = $this->getParametre($_POST, 'titre');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $this->ctrlAdmin->saveNewBillet($titre, $contenu);
                }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }
    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }
}
