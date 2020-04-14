<?php
require_once 'Modele/Manager.php';
class Billet extends Manager 
{
    // Renvoie la liste des billets du blog
     
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet'
                . ' order by BIL_ID DESC LIMIT 0,6';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
    // Renvoie les informations sur un billet
     
    public function getBillet($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
    public function lastBillet() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet'
                . ' order by BIL_ID desc LIMIT 0,1';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

    public function saveBillet($idBillet, $contenu) {
        $sql = 'update t_billet SET BIL_CONTENU = ? WHERE BIL_ID = ?';
        $billet = $this->executerRequete($sql, array($contenu,$idBillet));
        return $billet->rowCount();
    }

    public function deleteBillet($idBillet) {
        $sql = 'delete FROM t_billet WHERE BIL_ID = ?';
        $billet = $this->executerRequete($sql, array($idBillet));
        return $billet->rowCount();
    }

    public function saveNewBillet($titre, $contenu) {
        $sql ='insert INTO t_billet(BIL_TITRE, BIL_CONTENU, BIL_DATE)' . ' values(?,?, NOW())';
        $billet = $this->executerRequete($sql, array($titre, $contenu));
        return $billet->rowCount();
    }
}