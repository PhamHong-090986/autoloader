<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet5</title>
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans%7cKanit%7cLobster">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="nav-desktop">
                    <div>
                        <a class="navbar-brand" href="#"><i style="color:yellow";>Logo Blog</i></a>
                    </div>
                        <ul class="navbar-nav text-uppercase ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="#quisommenous">ACCUEIL</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#festival">ARTICLE</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#listeDeFilm">S'INSCRIRE</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#programme">CV</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#contacter">CONTACTER</a></li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="type" placeholder="Recherche">
                            <button class="btn btn-success" type="subit">Cliquez</button>
                        </form>
                    </nav>
</header>    <h1>Bienvenue dans mon Projet 5</h1>
        <section class="container mx-auto mb-4">
        <div class="h1 font-italic text-center">
            <span>J'aime faire la cusine! <br/>
                  J'aime voyager !<br/> 
                 Et J'aime le code aussi!<br/>  </span>
            
        </div>
        <br>

    <!--Code PHP-->
    <?php 
    // Connexion à la base de donnée
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=hong;charset=utf8', 'root', '');
    }catch(Exception $e)
    {
        die('Erreur base de donnée: '. $e->getMessage());
    }
    // récupérer les 5 dernières messages
    $reponse = $bdd->query('SELECT * FROM t_billet ORDER BY BIL_ID DESC LIMIT 0,5');
    while  ($donnees=$reponse->fetch()){
        ?> <p><strong>TITRE</strong></p><?php echo htmlspecialchars ($donnees['BIL_TITRE']); ?><br/>
          <?= substr ($donnees['BIL_CONTENU'],0,500); ?>
         <a href="<?= "#"?>"> LIRE LA SUITE </a><br/>
         <em><a href ="VueCommentaire.php?article=<?php echo $donnees ['BIL_ID']; ?>">Commentaire</a></em>
         <?php
    }
    $reponse ->closeCursor();
    
    ?>
    
    
    
    
    





    <!--Footer-->
        <footer class="text-center w-100 mt-5 py-2 bg-night-blue" style="background:black";>
            <button class="btn btn-warning" type="button"><span class="fas fa-envelope fa-2x"></span></button>
            <button class="btn btn-warning" type="button"><span class="fab fa-facebook-f fa-2x"></span></button>
            <button class="btn btn-warning" type="button"><span class="fab fa-twitter fa-2x"></span></button>
            <button class="btn btn-warning" type="button"><span class="fab fa-google-plus-g fa-2x"></span></button>
            <button class="btn btn-warning" type="button"><span class="fas fa-share-alt fa-2x"></span></button>
  </footer>

  <div class="container">
        <div class="row">
            <div class="col-md-12 text-center formation">
                <p>Accès Admin</p>
            </div>
</body>
</html>