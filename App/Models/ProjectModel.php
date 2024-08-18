<?php

namespace App\Models;

class ProjectModel extends Model 
{

    protected $title;
    protected $description;
    protected $link;
    protected $github;
    protected $image;
    protected $video;

/**
 * Constructeur
 * 
 * @param $title
 * @param $description
 * @param $link
 * @param $image
 * @param $video
 */
    public function __construct($title = null, $description = null, $link =null, $github =null , $image = null, $video = null)
    {
        $this ->title = $title;
        $this ->description = $description;
        $this ->link = $link;
        $this ->github = $github;
        $this ->image = $image;
        $this ->video = $video;

        $params = [
            'title' => $title,
            'description' => $description,
            'link' => $link,
            'github' => $github,
            'image_path' => $image,
            'video_path' => $video
        ];

        parent:: __construct('project', $params);

        parent::__construct('project', []);

    }



}
