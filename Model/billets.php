<?php 
// récupérer tous les dernières posts de blog
function getBillets()
{
    $db = dbConnect();
   
   $req = $db->query('SELECT * FROM t_billet ORDER BY BIL_DATE DESC LIMIT 0,5');
return $req ;

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
// connexion à la base de donnée

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'root', '');
        return $db;
    }catch(Exception $e)
    {
        die('Erreur base de donnée: '. $e->getMessage());
    }
}

