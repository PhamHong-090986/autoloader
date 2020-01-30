<?php require_once ('MenuView.php'); ?>
<?php ob_start(); ?>
    
    
<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= substr($billet['contenu'], 0, 500) ?></p>
        <em><a href ="index.php?article=<?php echo $billet ['id']; ?>">Lire la suite</a></em>
    </article>
    <hr />
<?php endforeach; ?>
    
    </section>
        
<?php $content = ob_get_clean(); ?>
<?php include 'footerView.php';?>


   

