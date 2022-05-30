<?php

include_once 'libPhp/database.php';
include_once 'models/models.php';

$MembreId = lireMembre($_GET['id']);
($_GET['id']);

if(empty($_POST) == false)
{
    // OUI, traitement du formulaire d'édition de Membre

    editMembre(
        $_POST['id'],
        $_POST['membre'],    
    );
    // Les données du formulaire sont fournies dans l'ordre des arguments de la fonction

    // Redirection vers l'index'(Post-Redirect-Get)
    header('Location: index.php');
}
else
{
    // NON, affichage du template de formulaire d'édition de membre

    // Est-ce que l'id est bien fourni dans l'URL ?
    if(array_key_exists('id', $_GET) == false)
    {
        // NON, redirection vers l'index'
        header('Location: index.php');
    }

    // Récupération du Membre stocké en base de données
    $editMembre = lireMembre($_GET['id']);


    include 'templates/editMembre.phtml';
}