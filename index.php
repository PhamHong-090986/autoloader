<?php 
require ('Controller\frontend.php');
if(isset ($_GET['action'])){
    if($_GET['action'] == 'listBillets' ){
        listBillets();
    }elseif ($_GET['action'] == 'post'){
        if(isset($_GET['BIL_ID']) && $_GET['BIL_ID'] >0 )
        {
            post();
        }

        else{
            echo 'Erreur: aucun identifiant de billet envoyé';
        }
    }

}
else {
    listBillets();
}

?>







    
    
    
    
    
    





    