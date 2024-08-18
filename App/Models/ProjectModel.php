<?php

namespace App\Models;

class ProjectModel extends Model 
{

    protected $title;
    protected $description;
    protected $image;
    protected $video;

/**
 * Constructeur
 * 
 * @param $title
 * @param $description
 * @param $image
 * @param $video
 */
    public function __construct($title, $description, $image = null, $video = null)
    {
        $this ->title = $title;
        $this ->description = $description;
        $this ->image = $image;
        $this ->video = $video;

        $params = [
            'title' => $title,
            'description' => $description,
            'image_path' => $image,
            'video_path' => $video
        ];

        parent:: __construct('project', $params);

    }





}
