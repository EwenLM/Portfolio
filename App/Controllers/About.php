<?php
namespace App\Controllers;

class About
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/navBack.php';
        require RACINE . '/App/Views/aboutView.php';
        require RACINE . '/App/Views/foot.php';
    }
}
