<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>un article qui associé à des commentaires</h1>
        <p><a href="..\index.php">Retour à la liste des billets</a></p>
 
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération du billet
$req = $bdd->prepare('SELECT * FROM t_billet WHERE BIL_ID = ?');
$req->execute(array($_GET['article']));
$post = $req->fetch();
?>

<div class="news">
    <h3>
        <?php echo htmlspecialchars($post['BIL_TITRE']); ?>
        <em>le <?php echo $post['BIL_DATE']; ?></em>
    </h3>
    
    <p>
    <?php
    echo nl2br(htmlspecialchars($post['BIL_CONTENU']));
    ?>
    </p>
</div>

<h2>Commentaires</h2>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

// Récupération des commentaires
$req = $bdd->prepare('SELECT * FROM t_commentaire WHERE BIL_ID = ? ORDER BY COM_DATE');
$req->execute(array($_GET['article']));

while ($comments = $req->fetch())
{
?>
<p><strong><?php echo htmlspecialchars($comments['COM_AUTEUR']); ?></strong> le <?php echo $comments['COM_DATE']; ?></p>
<p><?php echo nl2br(htmlspecialchars($comments['COM_CONTENU'])); ?></p>
<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
</body>
</html>