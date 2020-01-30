<?php 

require ("Model\Manager.php");
class Billet extends Manager
{

// récupérer tous les dernières posts de blog
public function getBillets()
{    
     $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet'
                . ' order by BIL_ID DESC LIMIT 0,6';
    $billets = $this->executerRequete($sql);
        return $billets;
}
// récupère un post selon BIL_ID
function getPost($BIL_ID)
{ 
    $bdd = dbConnect();
    $post = $bdd-> prepare('SELECT * FROM t_billet WHERE BIL_ID = ?');
   $req->execute(array($BIL_ID));
   $post = $req->fetch();
   return $post; 

}
// récupère des commentaires associés à un ID de post

function getCommentaires($BIL_ID)
{
   $bdd = dbConnect();
   $comments = $bdd->prepare('SELECT * FROM t_commentaire WHERE BIL_ID = ? ORDER BY COM_DATE');
$req->execute(array($BIL_ID));
return $comments;
}



}