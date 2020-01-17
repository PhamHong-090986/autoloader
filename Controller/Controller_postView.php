<?php
require ('Model\billets.php');
if(isset($_GET['BIL_ID']) && $_GET['BIL_ID'] > 0){
    $post = getPost($_GET['BIL_ID']);
    $comments = getCommentaires($_GET['BIL_ID']);
    require ('View\postView.php');
}else {
    echo 'Aucun identifiant de billé envoyé';
}