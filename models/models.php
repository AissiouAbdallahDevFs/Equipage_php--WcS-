<?php
// lister les membres de l'equipage pour les afficher dans l'index
function listerMembres()
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('SELECT  membreequipage.id, membre FROM membreequipage');

    // Exécution de la requête SQL SELECT
    $query->execute();

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
//ajout de membre dans la base de donnée
function ajouterMembre($membre)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare("INSERT INTO lequipage.membreequipage (membre) VALUES (?)");

    // Exécution de la requête SQL SELECT
    $query->execute(
        [
            $membre
        ]
    );
}

function editMembre($id,$membre)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de mise à jour
    $query = $pdo->prepare('
        UPDATE membreequipage SET
            membre = ?
        WHERE membreequipage.id = ?
    ');


    // Exécution de la requête SQL INSERT
    $query->execute(
    [
        $membre, 
        $id
    ]);
   
}
function lireMembre($id)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de lecture
    $query = $pdo->prepare('SELECT
            membreequipage.id, 
            membre
        FROM membreequipage
        WHERE membreequipage.id = ?');

    // Exécution de la requête SQL SELECT
    $query->execute([$id]);
    // Même s'il n'y a qu'un paramètre dans la requête, il faut fournir un tableau pour la valeur

    // Renvoie les données sous la forme d'un tableau associatif (clé = nom colonne SQL)
    return $query->fetch(PDO::FETCH_ASSOC);
}
function deletMembre($id)
{
    // Connexion à la base de données avec PDO
    $pdo = connexionMySQL();

    // Préparation de la requête SQL de mise à jour
    $query = $pdo->prepare('DELETE FROM membreequipage WHERE membreequipage.id = ? ');


    // Exécution de la requête SQL INSERT
    $query->execute(
    [
        $id
    ]);
   
}