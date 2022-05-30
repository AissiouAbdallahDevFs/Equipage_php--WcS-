<?php

include_once 'libPhp/database.php';
include_once 'models/models.php';

// Est-ce que l'id est bien fourni dans l'URL ?
if(array_key_exists('id', $_GET) == true)
{
    // OUI, suppression du membre spécifié par l'id
    deletMembre($_GET['id']);
}

// Redirection vers l'index'
header('Location: index.php');