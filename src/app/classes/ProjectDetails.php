<?php
class Detail
{
    public $key;
    public $content;

    public function __construct($details = [])
    {
        $this->key = $details["key"] ?? null;
        $this->content = $details["content"] ?? null;
    }
}
