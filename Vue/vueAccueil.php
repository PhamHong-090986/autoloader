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
  
<section id="contact" style="background: indianred;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-uppercase" style="color:wheat" id="contacter";>Contactez-nous</h2>
                        <h3 class="section-subheading" style="color: wheat";>Pour tous renseignements complémentaires</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="contactForm" name="sentMessage" novalidate="novalidate" methode="POST" action="index.php?action=login">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="Nom" type="text" placeholder="Nom" required="required" data-validation-required-message="Veuillez renseigner un nom." aria-describedby="nomcontact">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="Prenom" type="tel" placeholder="Prenom" required="required" data-validation-required-message="Veuillez renseigner un numéro de téléphone." aria-describedby="telephonecontact">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="Email" type="email" placeholder="Email" required="required" data-validation-required-message="Veuillez renseigner une adresse email." aria-describedby="emailcontact">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="Message" placeholder="Message" required="required" data-validation-required-message="Veuillez renseigner un message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
        </section>
</body>
</html>