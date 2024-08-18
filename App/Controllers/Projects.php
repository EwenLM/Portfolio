<?php
namespace App\Controllers;
use App\Models\ProjectModel;

class Projects
{
    public function index()
    {
        $projectModel = new ProjectModel();
        $projects = $projectModel->findAll();
        // Assurez-vous que les données sont présentes
        if (!empty($projects)) {
            $titles = [];
            $descriptions = [];
            $links = [];
            $githubs = [];
            
            foreach ($projects as $project) {
                $titles[] = $project['title'];
                $descriptions[] = $project['description'];
                $links[] = $project['link'];
                $githubs[] = $project['github'];
            }

            $dataProjects = [
                'titles' => $titles,
                'descriptions' => $descriptions,
                'links' => $links,
                'githubs' => $githubs
            ];
        }
        
        
        require RACINE . '/App/Views/head.php';
        require RACINE . '/App/Views/projectsView.php';
        require RACINE . '/App/Views/foot.php';
    }
}

