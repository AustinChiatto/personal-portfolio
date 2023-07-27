<?php
require_once __DIR__ . "/../init.php";

// page data
// ===========================
$page_title = "code-to-img";
$page_name = "Code To Image";
$page_type = "project-detail";
$title_tag = "Austin Chiatto | Code To Image";
$meta_desc = "Create beautiful images of your code.";
$og_url = "https://austinchiatto.com/code-to-img.php";
$og_image = "src/assets/images/code-to-img-hero.png";

// page content
// ===========================
//hero
$project_name = $page_name;
$project_tagline = "Create stunning images of your code!";
$hero_img_path = "code-to-img-hero.png";

// external cta section
$external_cta_heading = "Create stunning images of your code!";
$external_cta_link_01 = "Live Site";
$external_cta_link_02 = "Source Code";
$external_cta_live_url = "https://grid-tool-v2.austinchiatto.com/";
$external_cta_documentation_url = "https://github.com/AustinChiatto/grid-tool--2.0";

// callout
$callout_label = "GitHub Readme";
$callout_copy = "See more about how and why I built " . $project_name . ".";
$callout_link = "https://github.com/AustinChiatto/grid-tool--2.0";

// project selection
$project_selection_heading = "Enjoyed " . $project_name . '? <span class="a-text--highlight">Take a look at</span> another project';

// panel & card contents
// ===========================
require "code-to-img/card-content.php";
require "code-to-img/panel-content.php";
require "code-to-img/challenge-content.php";

// card objects
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
