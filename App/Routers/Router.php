<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

// Page d'accueil
$router->get('/', 'Home@index');

$router->get('/home', 'Home@index');

// Lancement du router
$router->run();