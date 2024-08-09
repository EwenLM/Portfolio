azeza<?php
// Démarrer la session, s'il n'est pas déjà démarrée
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// Afficher les erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définir la constante 'RACINE' pour le répertoire racine du projet
define('RACINE', dirname(__FILE__));

// Charger l'autoloader de Composer pour les dépendances
require RACINE . '/vendor/autoload.php';
var_dump(RACINE);

//Charger le fichier de routage
require RACINE . '/App/Routers/Router.php';

?>
