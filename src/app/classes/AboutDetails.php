<?php
// detail class -- used to create cards and info panels for each project page
class AboutDetail
{
    public $type;
    public $pre_heading;
    public $heading;
    public $card_content;
    public $panel_content;
    public $external_url;
    public $card_type;
    public $grid_col;

    public function __construct($details = [])
    {
        $this->type = $details["type"] ?? null;
        $this->pre_heading = $details["pre_heading"] ?? null;
        $this->heading = $details["heading"] ?? null;
        $this->card_content = $details["card_content"] ?? null;
        $this->panel_content = $details["panel_content"] ?? null;
        $this->external_url = $details["external_url"] ?? null;
        $this->card_type = $details["card_type"] ?? null;
        $this->grid_col = $details["grid_col"] ?? null;
    }
}
