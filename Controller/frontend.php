<?php
require ('Model\billets.php');
require ('Model\commentaire.php');
function listBillets()
{
 $req = getBillets();
 require ('View\affichageAccueil.php');
}
function post()
{
    $post = getPost($_GET['BIL_ID']);
    $comments = getCommentaires($_GET['BIL_ID']);
    require ('View\postView.php');
}