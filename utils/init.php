<?php

// fichier à inclure en début de tous les contrôleurs, pour initialiser l'environnement


// gestion des messages d'erreur
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs



// ouverture de la base de données ( dans la variable globale $bdd)
// on va stocker l'objet base de données ouvert dans une variable globale
global $bdd;    // Les variables sont dans $GLABALS["bdd"]


// new PDO (chaine de connexion, login, mot de passe)
$bdd = new PDO("mysql:host=localhost;dbname=eleves_fdumont_exos;charset=UTF8", "fdumont", "N+o4GPc5j!G");
// cette commande plante et termine le programme (erreur fatale) en cas d'erreur dans les paramètres
// pour verifier : print_r($bdd);

// pour debugger, on peut ajouter une propriété
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
