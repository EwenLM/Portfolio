<?php

namespace App\Controllers;

use App\Models\ProjectModel;


class Project
{
    public function index()
    {
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/navBack.php';
        require RACINE . '/App/Views/projectView.php';
        require RACINE . '/App/Views/foot.php';
    }


    public function uploadProject()
    {
        $msgProject = null;
        if (isset($_POST['title'], $_POST['description'], $_POST['date'], $_POST['link'], $_POST['techno'], $_POST['github'], $_FILES['image'], $_FILES['video'])) {
            $title = htmlspecialchars($_POST['title']);
            $description =  htmlspecialchars($_POST['description']);
            $date =  htmlspecialchars($_POST['date']);
            $link = $_POST['link'];
            $techno = $_POST['techno'];
            $github = $_POST['github'];

            $images = $_FILES['image'];
            $imageNames = [];

            //Parcour toutes les images pour saisir leur nom
            foreach ($images['tmp_name'] as $index => $tmpNameImage) {
                $nameImage = $images['name'][$index];

                if (move_uploaded_file($tmpNameImage, './Upload/Images/' . $nameImage)) {
                    $imageNames[] = $nameImage;
                }
            }
            //Séparé les noms d'images par une virgule
            $nameImageString = implode(',', $imageNames);

            $video = $_FILES['video'];
            $tmpNameVideo = $video['tmp_name'];
            $nameVideo = $video['name'];


            if (empty($title) || empty($description) || empty($date)) {
                $msgProject = 'Champs incomplets';
            } else {
                move_uploaded_file($tmpNameImage, './Upload/Images/' . $nameImage);
                move_uploaded_file($tmpNameVideo, './Upload/Videos/' . $nameVideo);
                $newProject = new ProjectModel($title, $description, $date, $link, $techno, $github, $nameImageString, $nameVideo);
                $newProject->create($newProject);
                $msgProject = "Projet ajouté !";
            }
            header("location:" . $_SERVER['HTTP_REFERER']);
            $_SESSION['msgProject'] = $msgProject;
        }
    }
}
