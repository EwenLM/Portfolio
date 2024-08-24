<?php
namespace App\Controllers;
use App\Models\ProjectModel;

class Projects
{
    public function index()
    {
        $projectModel = new ProjectModel();
        $projects = $projectModel->findAllOrderedByDate();
        // Assurez-vous que les données sont présentes
        if (!empty($projects)) {
            $titles = [];
            $descriptions = [];
            $date = [];
            $links = [];
            $techno = [];
            $githubs = [];
            
            foreach ($projects as $project) {
                $titles[] = $project['title'];
                $descriptions[] = $project['description'];
                $date[] = $project['dateD'];
                $links[] = $project['link'];
                $techno[]=$project['techno'];
                $githubs[] = $project['github'];
            }

            $dataProjects = [
                'titles' => $titles,
                'descriptions' => $descriptions,
                'date' => $date,
                'links' => $links,
                'techno'=> $techno,
                'githubs' => $githubs
            ];
        }
        
        
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/navBack.php';
        require RACINE . '/App/Views/projectsView.php';
        require RACINE . '/App/Views/foot.php';
    }
}

