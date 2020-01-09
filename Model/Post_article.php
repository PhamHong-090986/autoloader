<?php 
// connextion à la base de donnée
try {
    $bdd = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'root', '');
}catch(Exception $e)
{
    die('Erreur base de donnée: '. $e->getMessage());
}
// récupérer les 5 dernières billet
$reponse = $bdd->query('SELECT * FROM t_billet ORDER BY BIL_ID DESC LIMIT 0,5');
while  ($donnees=$reponse->fetch()){
    ?>
    <?php echo htmlspecialchars ($donnees['BIL_TITRE']); ?><br/>
    <em><a href ="cible.php?billet=<?php echo $donnees ['BIL_ID']; ?>">Commentaire</a></em>
    <?php echo htmlspecialchars ($donnees['BIL_CONTENU']); ?><br/>
     <?php
}

$reponse ->closeCursor();

?>
