<?php
class Contact extends Manager{
    
        /**
         * all les contacts
         */
        const properties = array(
            "Id" => "id",
            "Nom" => "nom",
            "Prenom" => "prenom",
            "Email" => "email",
            "Message" => "message"
        );
        // pour enregistre les informations du formule contact dans la base de donnée
        public function register (Contact $contact)
        {
            $nom = $contact->getNom();
            $prenom = $contact->getPrenom();
            $email = $contact->getEmail();
            $message = $message->getMessage();
           
    
            try{
                $db = $this->dbConnect();
                $register = $db->prepare('INSERT INTO contact(nom, prenom, email, message) VALUES (?, ?, ?,?)');
                $contact = $register->executerRequete($register, array($nom, $prenom, $email, $message));
            } catch(\Exception $e){
                $contact = 'ne valide pas du formulaire de contact';
            }
            
            return $contact->fetch();
        }
        private function dbConnect()
        {
            $db = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'Camille', '123456');
            return $db;
        }
        
        
}