<?php
namespace App\Controllers;

class Admin
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/adminView.php';
        require RACINE . '/App/Views/foot.php';
    }

    public function uploadCv()
    {
        
    }

    public function deleteCv()
    {

    }
}
