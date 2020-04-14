<?php

class Connexion extends Manager {
    
    public function getConnect($login, $password)
    {
        $db = $this->dbConnect();
        $req = 'select id FROM users WHERE login=? AND password=?';
        $user = $this->executerRequete($req, array($login,$password));
        
        //$user = $req->fetch();
        return ($user->rowCount() == 1);
    }
    //Renvoie un utilisateur existant dans la BDD
    public function getUser($login)
    {
        $db = $this->dbConnect();
        $req = $db->query('select id as idUser, login, password FROM users WHERE login=?');
        $user = $this->executerRequete($req, array($login));
        if ($user->rowCount() == 1)
        {
            return $user->fetch(); // Accès à la première ligne de résultat
        }
        else
        {
            throw new \Exception("Aucun utilisateur ne correspond aux identifiants fournis.");
        }
    }
    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'Camille', '123456');
        return $db;
    }

        public function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}

