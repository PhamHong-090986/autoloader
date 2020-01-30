<?php
require_once 'Modele/Manager.php';

class Commentaire extends Modele {
// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from t_commentaire'
                . ' where BIL_ID=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }
    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into t_commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(NOW(), ?, ?, ?)';
        $this->executerRequete($sql, array($auteur, $contenu, $idBillet));
    }
    // Modifier le commentaire
    public function commentaireEditer ($contenu, $idCommentaire) {
        $sql = 'update T_COMMENTAIRE SET COM_CONTENU = :contenu WHERE BIL_ID = :idc';
        $this->executerRequete($sql, array('contenu' => $contenu, 'idc' => $idCommentaire));
    }
    public function commentaireSupprimer($idCommentaire){
        $sql = 'delete FROM T_COMMENTAIRE WHERE COM_ID = :idCommentaire';

        return $this->executerRequete($sql, array(
                'idCommentaire' => $idCommentaire,
            ))->rowCount() == 1;
    }


    public function ajouterUnSignalement($id)
    {
        $sql = 'update T_COMMENTAIRE SET COM_SIGNALEMENT = COM_SIGNALEMENT + 1 WHERE COM_ID = :id';
        $this->executerRequete($sql, array('id' => $id));
    }

    public function supprimerSignalement($id)
    {
        $sql = 'update T_COMMENTAIRE SET COM_SIGNALEMENT = 0 WHERE COM_ID = :id';
        $this->executerRequete($sql, array('id' => $id));
    }

    
    public function getNombreSignalements()
    {
        $sql = 'select count(*) AS nbSignalements FROM T_COMMENTAIRE WHERE COM_SIGNALEMENT != 0';
        $reponse = $this->executerRequete($sql);
        $ligne = $reponse->fetch();
        return $ligne['nbSignalements'];
    }

    public function getAllCommentaires() {
        $sql = 'select t_commentaire.COM_ID as id, t_commentaire.COM_DATE as date,'
                . ' t_commentaire.COM_AUTEUR as auteur, t_commentaire.COM_CONTENU as contenu, t_billet.BIL_TITRE as titre '
                . ' from t_commentaire, t_billet where t_commentaire.BIL_ID=t_billet.BIL_ID';
        $commentaires = $this->executerRequete($sql);
        return $commentaires;
    }
}
