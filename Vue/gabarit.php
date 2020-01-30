<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="description" value="mon site"/>
    <title><?= (isset($title)) ? $title : "Mon Blog en PHP";?></title> <!-- (condition) ? si oui  : si non-->
    <link href="<?= ASSETS;?>css/style.css" rel="stylesheet" /> 
</head>
<body>
    <!-- ajout du menu -->
    <?php require_once ('menu.php');?>

    <!-- contenu de la page -->
    <div id="mainContent">
        <?= $contenu ?>
    </div>

    <!-- ajout du footer -->
    <?php require_once ('footer.php');?>

</body>

</html>