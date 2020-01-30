<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    <title>Connexion</title>
</head>
<body>
        <div id="wrapper" class="container-fluid" role="main">
           <div class="jumbotron">
               <h4>Pour accéder à l'espace administrateur, veuillez saisir votre login et votre mot de passe.</h4>
        <hr />

        
        <div class="well">
            <form action="index.php?action=login" method="post" class="form-signin form-horizontal" role="form" action="/login_check" method="post">
                <div class="form-group">
                    <label for="user_username" class="col-sm-5 control-label required">Pseudo ou Adresse email :</label>
                    <div class="alert col-sm-4 alert-info">
                        <input type="text" name="pseudo" id="user_username" value="" class="form-control" placeholder="Entrez votre pseudo ou adresse email" required autofocus />
                    </div>
                
                <div class="alert col-sm-4 alert-info">
                    <label for="user_password" class="col-sm-5 control-label required">Mot de passe :</label>
                    <div class="col-sm-4">
                        <input type="password" id="user_password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required />
                    </div>
                </div>
                <div>
                

               <input class ="btn btn-info" type="submit" name="submit" value="Valider"/>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>

   
   