<?php
namespace App\Controllers;

class Invaders 
{
    function index(){
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/navBack.php';
        require RACINE . '/App/Views/invadersView.php';
        require RACINE . '/App/Views/foot.php';
    }
}