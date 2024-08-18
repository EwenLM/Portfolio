<?php

namespace App\Models;

class ProjectModel extends Model 
{

    protected $title;
    protected $description;
    protected $link;
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
    public function __construct($title, $description, $link, $image = null, $video = null)
    {
        $this ->title = $title;
        $this ->description = $description;
        $this ->link = $link;
        $this ->image = $image;
        $this ->video = $video;

        $params = [
            'title' => $title,
            'description' => $description,
            'link' => $link,
            'image_path' => $image,
            'video_path' => $video
        ];

        parent:: __construct('project', $params);

    }





}
