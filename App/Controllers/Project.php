<?php
namespace App\Controllers;

class Project
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/projectView.php';
        require RACINE . '/App/Views/foot.php';
    }
}
