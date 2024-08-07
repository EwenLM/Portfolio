<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

// page d'accueil
$router->get('/', 'Home@index');

$router->get('/home', 'Home@index');
