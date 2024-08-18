<?php

namespace App\Controllers;

use App\Models\ProjectModel;


class Project
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/projectView.php';
        require RACINE . '/App/Views/foot.php';
    }


    public function uploadProject()
    {
        $msgProject = null;
        if (isset($_POST['title'], $_POST['description'], $_FILES['image'], $_FILES['video'])) {
            $title = htmlspecialchars($_POST['title']);
            $description =  htmlspecialchars($_POST['description']);
            
            $image = $_FILES['image'];
            $tmpNameImage = $image['tmp_name'];
            $nameImage = $image['name'];

            $video = $_FILES['video'];
            $tmpNameVideo = $video['tmp_name'];
            $nameVideo = $video['name'];
            
            
            if (empty($title) || empty($description)) {
                $msgProject = 'Champs incomplets';
            } else {
                move_uploaded_file($tmpNameImage, './Upload/Images/'.$nameImage);
                move_uploaded_file($tmpNameVideo, './Upload/Videos/'.$nameVideo);
                $newProject = new ProjectModel($title, $description, $nameImage, $nameVideo);
                $newProject->create($newProject);
                $msgProject = "Projet ajouté !";
            }
            header("location:" . $_SERVER['HTTP_REFERER']);
            $_SESSION['msgProject'] = $msgProject;
        } else {
            echo 'probleme';
        }
    }
}
