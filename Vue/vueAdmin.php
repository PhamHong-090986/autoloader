<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title><?php $title = 'Admin'; ?></title>
</head>
<body>
<div class="col-lg-6">
  <div class="btn-group btn-group-justified">
      <a class="btn btn-danger" href="#">Article</a>
      <a class="btn btn-info" href="#">Commentaire</a>
      <a class="btn btn-warning" href="#">Utilisateur</a>
  </div>
</div>

        <caption>
            <h4>Bienvenue dans notre espace d'administration</h4>
        </caption>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th>Date</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($billets as $billet):?>
        <tr>
            <td><time><?= $billet['date'] ?></time></td>
            <td><?= $billet['titre'] ?></td>
            <td><p><?= substr($billet['contenu'], 0, 200) ?></p></td>
            <td>
                <a href="<?= "index.php?action=modifier&id=" . $billet['id'] ?>"><button class="col-sm-8"> Modifier</button></a>
                <a href="<?= "index.php?action=supprimer&id=" . $billet['id'] ?>"><button class="col-sm-8"> Supprimer </button></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <form>
        <a href="index.php?action=ajouter"><button type="button" class="btn btn-info"> Ajouter </button></a>
    </form>
</div>
</body>
</html>
