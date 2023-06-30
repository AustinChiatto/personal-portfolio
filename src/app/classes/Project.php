<?php
class Project
{
    public $title;
    public $sub_title;
    public $type;
    public $desc;
    public $internal_url;
    public $external_url;
    public $documentation_url;
    public $thumbnail;
    public $is_featured;

    public function __construct($projects = [])
    {
        $this->title = $projects["title"] ?? null;
        $this->sub_title = $projects["sub_title"] ?? null;
        $this->type = $projects["type"] ?? null;
        $this->desc = $projects["desc"] ?? null;
        $this->internal_url = $projects["internal_url"] ?? null;
        $this->external_url = $projects["external_url"] ?? null;
        $this->documentation_url = $projects["documentation_url"] ?? null;
        $this->thumbnail = $projects["thumbnail"] ?? null;
        $this->is_featured = $projects["is_featured"] ?? null;
    }
}