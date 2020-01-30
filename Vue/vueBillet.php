<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
<?php $this->titre = "Mon Blog - " . $billet['titre']; ?>

<article>
    <header>
        <h2 class="titreBillet"><?= $billet['titre'] ?></h2>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />

<div class="container-fluid">
    <div class="row">
       <form class="col-lg-8" method="post" action="index.php?action=commenter">
    Votre pseudo: <input id="auteur" name="auteur" type="text" class ="form-control" placeholder="Votre pseudo" 
           required /><br />
    Votre commentaire: <textarea id="txtCommentaire" class="form-control" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
     <input type="submit" value="Envoyer" />
</form>
</div>
</div>
<header>
    <h4 class="com">Le commentaire à <?= $billet['titre'] ?></h4>
    
</header>
<?php foreach ($commentaires as $commentaire): ?>
<header class="row">
        <div class="col-xs-6 col-sm-5">
            <p><time><?= $commentaire['date'] ?></time></p>
            <p><?= $commentaire['auteur'] ?> a été laissé le commentaire :</p>
        </div>
        <div class="col-xs-6 col-sm-5">
            <p><i><?= $commentaire['contenu'] ?></i> </p>
        </div>
        </header>
<?php endforeach; ?>
</body>
</html>

