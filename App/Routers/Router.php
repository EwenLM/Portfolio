<?php

// use App\Controllers\Home;
use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

//=========Page d'accueil========

$router->get("/home","Home@index");
$router->get("/","Home@index");


//==========Page A propos=========
$router ->get("/about","About@index");


//==============Page Projects=============
$router ->get("/projects", "Projects@index");



//===============Page Contact====================
$router ->get('contact','Contact@index');
$router ->post('contact/send','Contact@send');

//=================Page Admin====================
$router ->get('/admin','Admin@index');

//Connexion admin
$router ->post('/admin/login','Admin@login');

//Gestion du cv
$router ->get('/admin/cv/upload', 'Admin@uploadCv');
$router ->post('admin/cv/delete' ,'Admin@deleteCv');

//Gestion des projets
$router ->post('/admin/project/upload', 'Project@uploadProject');

// Lancement du router
$router->run();

?>
