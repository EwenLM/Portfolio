<?php
namespace App\Controllers;

class Home
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/nav.php';
        require RACINE . '/App/Views/homeView.php';
        require RACINE . '/App/Views/foot.php';
    }
}

