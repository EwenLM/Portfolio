<?php
namespace App\Controllers;

class Contact
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/contactView.php';
        require RACINE . '/App/Views/foot.php';
    }
}
