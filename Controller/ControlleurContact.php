<?php 
include 'Modele/Contact.php';
include 'Vue/Vue.php';

class ControlleurContact{
    private $contact;
    public function __construct() {
        $this->contact = new Contact();
        
    }
    public function contact() {
        // détermine la nouvelle vue. 
        $vue = new Vue("Contact");
        $vue->generer(array());
    }
   


}