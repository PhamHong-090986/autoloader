<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" />
    <script src="assets/js/editeur.js"></script>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<title>Ajouter d'article</title>
	</head>
	<body>
  <div class="jumbotron">
<input class ="btn btn-info" type="button" value="G" style="font-weight: bold;" onclick="commande('bold');" />
<input class ="btn btn-info" type="button" value="I" style="font-style: italic;" onclick="commande('italic');" />
<input class ="btn btn-info" type="button" value="S" style="text-decoration: underline;" onclick="commande('underline');" />
<input class ="btn btn-info" type="button" value="Lien" onclick="commande('createLink');" />
<input class ="btn btn-info" type="button" value="Image" onclick="commande('insertImage');" />

<form method="post" action="index.php?action=saveNew">
<textarea id="editeur" name="titre" rows="1" ></textarea><br/>
<textarea id="editeur" name="contenu" rows="4" ></textarea><br/>
<input  class ="btn btn-info" type="submit" value="Save" />
</form>
</body>
</html>

<style>
#editeur,textarea {
  width: 1000px;
  height: 300px;
  border: 1px solid black;
  padding: 5px;
  overflow: auto;
}
</style>