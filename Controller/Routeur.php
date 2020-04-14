<?php
include 'Controller/ControleurAccueil.php';
include 'Controller/ControleurBillet.php';
include 'Controller/ControleurArticle.php';
include 'Controller/ControleurConnexion.php';
include 'Controller/ControleurAdmin.php';
include 'Controller/ControleurCommentaire.php';
include 'Controller/ControlleurContact.php';

class Routeur {
    private $ctrlAccueil;
    private $ctrlBillet;
    private $ctrlChapitre;
    private $ctrlConnexion;
    private $ctrlAdmin;
    private $ctrlCommentaire;
    private $ctrlContact;
    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlChapitre = new ControleurChapitre();
        $this->ctrlConnexion = new ControleurConnexion();
        $this->ctrlAdmin = new ControleurAdmin();
        $this->ctrlCommentaire = new ControleurCommentaire();
        $this->ctrlContact = new ControlleurContact();
    }
    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        $page =  $_GET['action'];
        try {
            if (isset( $page)) {
                if ( $page == 'billet') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBillet->billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ( $page == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                }
                else if ( $page == 'chapitre') {
                    $this->ctrlChapitre->article();
                }
                else if ( $page == 'connexion') {
                    $this->ctrlConnexion->connexion();
                }
                else if ( $page == 'commentaire') {
                    
                    $this->ctrlCommentaire->commentaire();
                }
                
                else if ( $page == 'login') {
                    $pseudo = $this->getParametre($_POST, 'pseudo');
                    $password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnexion->login($pseudo,$password);
                }
                else if (htmlspecialchars( $page) == 'contact') {
                    $nom = $this-> getParametre ($_POST, 'nom');
                    $prenom = $this->getParametre ($_POST, 'prenom');
                    $email = $this->getParametre ($_POST, 'email');
                    $message = $this->getParametre ($_POST, 'message');
                    $this->ctrlContact->contact($nom,$prenom, $email, $message);
                }
                else if ( $page == 'modifier') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->modifier($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ( $page == 'save') {
                    $contenu = $this->getParametre($_POST, 'contenu2');
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->save($idBillet,$contenu);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ( $page == 'supprimer') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlAdmin->delete($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ( $page == 'ajouter') {
                    $this->ctrlAdmin->ajouter();
                }
                else if ( $page == 'saveNew') {
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
