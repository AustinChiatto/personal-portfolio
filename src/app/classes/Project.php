<?php

// used as a template for the project objects
// each object can be found in data/projects.php
// used to populate information on project-cards that are displayed on the home page and all-projects page

class Project
{
    public $link;
    public $name;
    public $type;
    public $image_url;
    public $image_alt;
    public $featured;

    public function __construct($projects = [])
    {
        $this->link = $projects["link"] ?? null;
        $this->name = $projects["name"] ?? null;
        $this->type = $projects["type"] ?? null;
        $this->image_url = $projects["image_url"] ?? null;
        $this->image_alt = $projects["image_alt"] ?? null;
        $this->featured = $projects["featured"] ?? null;
    }
}