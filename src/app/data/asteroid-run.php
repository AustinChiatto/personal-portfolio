<?php
require_once __DIR__ . "/../init.php";

// page data
// ===========================
$page_title = "asteroid-run";
$page_name = "Asteroid Run";
$page_type = "project-detail";
$title_tag = "Austin Chiatto | Asteroid Run";
$meta_desc = "pew pew pew space and guns and lasers and stuff!";
$og_url = "https://austinchiatto.com/asteroid-run-two.php";
$og_image = "src/assets/images/about-section__image-00.jpg";

// page content
// ===========================
//hero
$project_name = $page_name;
$project_tagline = "Unleash your Inner Space Cowboy";
$hero_img_path = "asteroid-run-hero.png";

// external cta section
$external_cta_heading = 'Strap in, Power Up, Shoot First, <span class="a-text--highlight">Ask Questions Never!</span>';
$external_cta_link_01 = "Play Game";
$external_cta_link_02 = "Source Code";
$external_cta_live_url = "https://asteroid-run.austinchiatto.com/";
$external_cta_documentation_url = "https://github.com/AustinChiatto/asteroid-run-2.0.0";

// callout
$callout_label = "GitHub Readme";
$callout_copy = "See more about how and why I built Asteroid Run.";
$callout_link = $external_cta_documentation_url;

// project selection
$project_selection_heading = "Enjoyed " . $project_name . '? <span class="a-text--highlight">Take a look at</span> another project';

// panel & card contents
// ===========================
require "asteroid-run/card-content.php";
require "asteroid-run/panel-content.php";
require "asteroid-run/challenge-content.php";

// card objects -- asteroid run
// ===========================
$team_card = new Detail([
    "type" => "team",
    "pre_heading" => "My Contributions",
    "heading" => "Solo Project",
    "card_content" => $team_card_content,
    "panel_content" => $team_panel_content,
    "card_type" => "--tall",
    "grid_col" => "left",
]);

$git_card = new Detail([
    "type" => "git",
    "pre_heading" => "Project Journey &",
    "heading" => "Version History",
    "card_content" => $git_card_content,
    "panel_content" => $git_panel_content,
    "grid_col" => "left",
]);

$technology_card = new Detail([
    "type" => "technology",
    "pre_heading" => "Built with love and brackets",
    "heading" => "Technology",
    "card_content" => $technology_card_content,
    "panel_content" => $technology_panel_content,
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$purpose_card = new Detail([
    "type" => "purpose",
    "pre_heading" => "Why I built this project",
    "heading" => "Project Purpose",
    "card_content" => $purpose_card_content,
    "panel_content" => $purpose_panel_content,
    "grid_col" => "right",
]);

// store all project objects in array
$details = [$team_card, $git_card, $purpose_card, $technology_card];

?>
