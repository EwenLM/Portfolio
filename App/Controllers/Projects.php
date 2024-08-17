<?php
namespace App\Controllers;

class Projects
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/projectsView.php';
        require RACINE . '/App/Views/foot.php';
    }
}
