<?php 
require_once 'Modele/User.php';
require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';
//session_start();
//if (isset($_POST['submit'])) {
//    $loginl = $_POST['login'];
//    $password = $_POST['password'];
//    $user= getConnect($login, $password);
//    header('location: admin.php');
//}else {
//    echo "Tu n'est pas connecté";
//}

class ControleurConnexion {
    private $connexion;
    private $billet;
    public function __construct() {
        $this->connexion = new Connexion();
        $this->billet = new Billet();
    }
// Affiche la liste de tous les billets du blog
    public function connexion() {
        // détermine la nouvelle vue. 
        $vue = new Vue("Connexion");
        $vue->generer(array());
    }
    public function login($pseudo, $password) {
        $connexion = $this->connexion->getConnect($pseudo, $password);
        // détermine la nouvelle vue.
        
        //$vue = new Vue("Admin");
        //vue->generer(array('billets' => $billets));
        if ($connexion == 1) {
            $billets = $this->billet->getBillets();
            $vue = new Vue("Admin");
            $vue->generer(array('billets' => $billets));
        }
        else {
            $this->connexion->erreur("Mot de passe erreur");
        }
    }
}
