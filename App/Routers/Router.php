<?php

// use App\Controllers\Home;
use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('\App\Controllers');

// Page d'accueil

$router->get("/home","Home@index");
$router->get("/","Home@index");


// Lancement du router
$router->run();

?>
