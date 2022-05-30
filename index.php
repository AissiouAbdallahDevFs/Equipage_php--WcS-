<?php

require_once 'libPhp/database.php';
require_once 'models/models.php';


// Récupération de tous les Membres stockés en base de données
$equipage = listerMembres();

if(empty($_POST) == false)
{
    //enregistrement du Membre en base de données

    ajouterMembre(
        $_POST['membre']
       // Valeur de l'<option> sélectionnée
    );
    // Les données du formulaire sont fournies dans l'ordre des arguments de la fonction
    
    // Redirection vers la page d'accueil (Post-Redirect-Get)
    header('Location: index.php');
}
include 'templates/index.phtml';