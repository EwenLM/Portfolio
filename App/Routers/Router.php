<?php

// use App\Controllers\Home;
use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

// Page d'accueil

$router->get("/home","Home@index");
$router->get("/","Home@index");


//Page A propos
$router ->get("/about","About@index");

//Page Admin
$router ->get('/admin','Admin@index');

//gestion du cv
$router ->get('/admin/cv/upload', 'Admin@upload');
$router ->get('admin/cv/delete' ,'Admin@deleteCv');
// Lancement du router
$router->run();

?>
