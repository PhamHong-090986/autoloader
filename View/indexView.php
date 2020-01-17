<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>
<h1>Bienvenue dans mon Projet 5</h1>
        <section class="container mx-auto mb-4">
        <div class="h1 font-italic text-center">
            <span>J'aime faire la cusine! <br/>
                  J'aime voyager !<br/> 
                 Et J'aime le code aussi!<br/>  </span>
        </div><br>
    <?php 
    
    while ($post = $req->fetch()){
        ?>
    
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($post['BIL_TITRE']); ?>
            <em>le <?php echo $post['BIL_DATE']; ?></em>
        </h3>
        
        <p>
        
         <?= substr ($post['BIL_CONTENU'],0,500); ?><br/>
         <em><a href ="View/postView.php?article=<?php echo $post ['BIL_ID']; ?>">Lire la suite</a></em>
        
        </p>
    </div>
    
    
        <?php
    }
    $req->closeCursor();
    ?>
    <?php $content = ob_get_clean();?>
    <?php  require ('template.php');?>