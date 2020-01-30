<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title><?php $this->titre = 'Billet simple pour l\'Alaska'; ?></title>
</head>
<body>
<div class="row">
    <section class="col-sm-6">
<h1><i>Bienvenue sur mon blog<i></h1>

<p>
  J'aime la cusine 
</p><br/>
<p>J'aime faire le voyage et j'aime le code aussi ! </p><br/>
<div>
  
<h1>Vous voulez faire une inscription?</h1>

    <span> </span>

    <div class="login">
        <h2 class="text-center">Inscription</h2>
        <form class="mb-5" action="#"method="post">
            <div class="d-flex">
                <label for="lastname">Nom de famille</label>
                <input class="border" type="text" id="lastname" name="lastname" value=""/>
            </div>
            <div class="d-flex">
                <label for="firstname">Prénom</label>
                <input class="border" type="text" id="firstname" name="firstname" value=""/>
            </div>
            <div class="d-flex">
                <label for="email">Votre Email</label>
                <input class="border" type="email" id="email" name="email" value=""/>
            </div>
            <div class="d-flex">
                <label for="username">Pseudo</label>
                <input class="border" type="text" id="username" name="username" value=""/>
            </div>
            <div class="d-flex">
                <label for="password">Mot de passe</label>
                <input class="border" type="password" id="password" name="password"/>
            </div>
            <div class="d-flex">
                <label for="confirm_password">Confirmer votre mot de passe</label>
                <input class="border" type="password" id="confirm_password" name="confirm_password"/>
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit" name="register">S'inscrire</button>
            </div>
        </form>
    </div>
    
</body>
</html>