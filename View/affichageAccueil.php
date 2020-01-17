<?php include 'MenuView.php'; ?>
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
<?php include 'footerView.php';?>


   

