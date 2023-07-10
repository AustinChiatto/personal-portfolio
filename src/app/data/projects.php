<?php
require_once __DIR__ . "/../init.php";

// CSS Grid Tool
// ===========================
$grid_tool = new Project([
    "title" => "Grid Tool",
    "sub_title" => "Grids Made Simple",
    "type" => "React Application",
    "desc" => "A GUI to help new developers create layouts using CSS Grids",
    "internal_url" => "grid-tool.php",
    "external_url" => "https://staging.austinchiatto.com/public/grid-tool-two.php",
    "documentation_url" => "https://github.com/AustinChiatto/grid-tool--2.0",
    "thumbnail" => "grid-tool_card-mockup-laptop.png",
    "is_featured" => true,
    "card_type" => "--tall",
    "grid_col" => "left",
]);

// Asteroid Run
// ===========================
$asteroid_run = new Project([
    "title" => "Asteroid Run",
    "sub_title" => "Unleash your Inner Space Cowboy",
    "type" => "JavaScript Game",
    "desc" => "A retro shooter inspired browser based game",
    "internal_url" => "asteroid-run.php",
    "external_url" => "",
    "documentation_url" => "https://github.com/AustinChiatto/asteroid-run-2.0.0",
    "thumbnail" => "asteroid-run_card-mockup-laptop.png",
    "is_featured" => true,
    "grid_col" => "right",
]);

//
// ===========================
$project_three = new Project([
    "title" => "",
    "sub_title" => "",
    "type" => "",
    "desc" => "",
    "internal_url" => "",
    "external_url" => "",
    "documentation_url" => "",
    "thumbnail" => "",
    "is_featured" => false,
    "grid_col" => "left",
    // "project_details" => $details,
]);

//
// ===========================
$project_four = new Project([
    "title" => "",
    "sub_title" => "",
    "type" => "",
    "desc" => "",
    "internal_url" => "",
    "external_url" => "",
    "documentation_url" => "",
    "thumbnail" => "",
    "is_featured" => false,
    "card_type" => "--tall",
    "grid_col" => "right",
    // "project_details" => $details,
]);

$project_five = new Project([
    "title" => "",
    "sub_title" => "",
    "type" => "",
    "desc" => "",
    "internal_url" => "",
    "external_url" => "",
    "documentation_url" => "",
    "thumbnail" => "",
    "is_featured" => false,
    "grid_col" => "left",
    // "project_details" => $details,
]);

//
// ===========================
$project_six = new Project([
    "title" => "",
    "sub_title" => "",
    "type" => "",
    "desc" => "",
    "internal_url" => "",
    "external_url" => "",
    "documentation_url" => "",
    "thumbnail" => "",
    "is_featured" => false,
    "grid_col" => "right",
    // "project_details" => $details,
]);

// store all project objects in array
$projects = [$grid_tool, $asteroid_run, $project_three, $project_four, $project_five, $project_six];
