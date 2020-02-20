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
</div>
  
<section id="contact" style="background: indianred;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-uppercase" style="color:wheat" id="contacter";>Contactez-nous</h2>
                        <h3 class="section-subheading" style="color: wheat";>Pour tous renseignements complémentaires</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                    <form method="post">
  <table width="44%" height="317" border="0">
    <tr>
      <td width="14%" align="left" valign="middle">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Votre nom :</font>
      </td>
      <td width="86%">
	      <input type="text" name="nom"  size="50" value="<?php echo $contact->nom; ?>" > 
	    </td>
    </tr>
    <tr>
      <td align="left" valign="middle">
	  <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Votre mail :</font></td>
      <td>	    
	      <input type="text" name="mail" size="50" value="<?php echo $contact->mail; ?>" >  
      </td>
    </tr>
    <tr>
      <td valign="middle">
        <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Tel :</font></td>
      <td>  
	      <input type="text" name="tel" size="20" value="<?php echo $contact->tel; ?>" > 
      </td>
    </tr>
      <td align="left" valign="middle">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Sujet :</font>
      </td>
      <td>
	      <input type="text" name="sujet" size="50" value="<?php echo $contact->sujet; ?>" > 
      </td>
    </tr>
    <tr>
      <td height="181" valign="top">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Message : </font>
      </td>
      <td valign="top">  
         <textarea name="message"  cols="47" rows="10" ><?php echo $contact->message; ?></textarea>
      </td>
    </tr>
    <tr>
      <td>
        &nbsp;  
      </td>
      <td>
	       <input type="submit"  name="envoyer" value="Envoyer">
      </td>
    </tr>
  </table>
</form>
                    </div>
                </div>
            </div>
    
        </section>
</body>
</html>