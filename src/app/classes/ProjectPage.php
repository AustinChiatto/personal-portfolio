<?php
// detail class -- used to create cards and info panels for each project page
class ProjectPage
{
    public $type;

    public function __construct($content = [])
    {
        $this->type = $content["type"] ?? null;
    }
}
