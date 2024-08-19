<?php

namespace App\Models;

class ProjectModel extends Model
{

    protected $title;
    protected $description;
    protected $date;
    protected $link;
    protected $github;
    protected $image;
    protected $video;

    /**
     * Constructeur
     * 
     * @param $title
     * @param $description
     * @param $date
     * @param $link
     * @param $image
     * @param $video
     */
    public function __construct($title = null, $description = null, $date = null, $link = null, $github = null, $image = null, $video = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->link = $link;
        $this->github = $github;
        $this->image = $image;
        $this->video = $video;

        $params = [
            'title' => $title,
            'description' => $description,
            'dateD' => $date,
            'link' => $link,
            'github' => $github,
            'image_path' => $image,
            'video_path' => $video
        ];

        parent::__construct('project', $params);
    }

    public function findAllOrderedByDate()
    {
        // Requête SQL pour récupérer tous les projets triés par date décroissante
        $sql = "SELECT * FROM project ORDER BY dateD DESC";
        return $this->query($sql);
    }
}
