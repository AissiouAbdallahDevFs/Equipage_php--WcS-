<?php
include 'libPhp/database.php';
include 'models/models.php';

/* Récupération de toutes les lignes d'un jeu de résultats */


$MembreId = lireMembre($_GET['id']);
// ---- Code principal
// Récupération de tous les Membres stockés en base de données


// ---- Chargement du template

// Affichage du template de la page 
include 'templates/showMembre.phtml';