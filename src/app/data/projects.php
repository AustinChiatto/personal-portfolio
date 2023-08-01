<?php
require_once __DIR__ . "/../init.php";

// CSS Grid Tool
// ===========================
$grid_tool = new Project([
    "title" => "Asteroid Run",
    "sub_title" => "Unleash your Inner Space Cowboy",
    "type" => "JavaScript Game",
    "desc" => "A retro shooter inspired browser based game",
    "internal_url" => "asteroid-run.php",
    "external_url" => "",
    "documentation_url" => "https://github.com/AustinChiatto/asteroid-run-2.0.0",
    "thumbnail" => "asteroid-run_card-thumbnail-003.png",
    "thumbnail_short" => "asteroid-run_card-thumbnail-002.png",
    "is_featured" => true,
    "card_type" => "--tall",
    "grid_col" => "left",
]);

// Asteroid Run
// ===========================
$asteroid_run = new Project([
    "title" => "Grid Tool",
    "sub_title" => "Grids Made Simple",
    "type" => "React Application",
    "desc" => "A GUI to help new developers create layouts using CSS Grids",
    "internal_url" => "grid-tool.php",
    "external_url" => "https://crumb.so/grid-tool",
    "documentation_url" => "https://github.com/AustinChiatto/crumb/tree/main/src/components/GridTool",
    "thumbnail" => "grid-tool_card-thumbnail-001.png",
    "is_featured" => true,
    "grid_col" => "right",
]);

//
// ===========================
$project_three = new Project([
    "title" => "Code To Image",
    "sub_title" => "Create Stunning Images Of Your Code",
    "type" => "React Application",
    "desc" => "A GUI that lets you download an image of your code, complete with custom styling and syntax highlighting.",
    "internal_url" => "code-to-img.php",
    "external_url" => "https://crumb.so/code-to-img",
    "documentation_url" => "https://github.com/AustinChiatto/crumb/tree/main/src/components/CodeToImg",
    "thumbnail" => "code-to-img_card-thumbnail-001.png",
    "is_featured" => false,
    "grid_col" => "left",
]);

//
// ===========================
$project_four = new Project([
    "title" => "The Heppell's",
    "sub_title" => "RSVP Wedding Website",
    "type" => "HTML & CSS",
    "desc" => "A wedding website with RSVP feature.",
    "internal_url" => "the-heppells.php",
    "external_url" => "https://neilandsab.com",
    "documentation_url" => "",
    "thumbnail" => "the-heppells_card-thumbnail-001.png",
    "thumbnail_short" => "the-heppells_card-thumbnail-002.png",
    "is_featured" => false,
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$project_five = new Project([
    "title" => "Pixel Draw",
    "sub_title" => "Create pixel art to add to our live collage",
    "type" => "React & MongoDB",
    "desc" => "Draw pixel art using the editor & save it to display on our live site.",
    "internal_url" => "pixel-art.php",
    "external_url" => "",
    "documentation_url" => "",
    "thumbnail" => "pixel-art_card-thumbnail-001.png",
    "is_featured" => false,
    "grid_col" => "left",
]);

//
// ===========================
$project_six = new Project([
    "title" => "Snippet Editor",
    "sub_title" => "Quick, simple, customizable code snippets for your project.",
    "type" => "React & JSON",
    "desc" => "Quick, simple, customizable code snippets for your project.",
    "internal_url" => "snippet-editor.php",
    "external_url" => "https://crumb.so",
    "documentation_url" => "https://github.com/AustinChiatto/crumb/tree/main/src/components/SnippetEditor",
    "thumbnail" => "snippet-editor_card-thumbnail-001.png",
    "is_featured" => false,
    "grid_col" => "right",
]);

// store all project objects in array
$projects = [$grid_tool, $asteroid_run, $project_three, $project_four, $project_five, $project_six];
