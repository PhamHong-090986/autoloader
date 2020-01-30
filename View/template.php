
<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" /> 
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