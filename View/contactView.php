<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<div class="formstyle">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6 center">
            <h1 class="my-3"> Formulaire de contact</h1>

            <!-- Formulaire de connexion -->
            <form id = 'form_ins' method = "post" action = "contacter">
                <div class="form-group">
                    <label>Nom </label>
                    <input type="text" class="form-control" name="lastname" placeholder="Entrez votre nom" required /><br/>
                    <label>Prénom </label>
                    <input type="text" class="form-control" name="firstname" placeholder="Entrez votre prénom" required /><br/>
                    <label>Adresse email </label>
                    <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse email" required /><br/>
                    <label>Laisser votre message :</label><br/>
                    <textarea class="form-control" name="message" id="message" rows="4" cols="40" required ></textarea> </br>
                    <div class="g-recaptcha"
                         data-sitekey="6LeF904UAAAAABO6m7Sl-pxLDJMS-2E6v1qzSdUP"></div>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"> </div>
    </div>
</div>
</body>
</html>