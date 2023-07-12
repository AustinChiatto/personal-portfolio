<?php
require_once __DIR__ . "/../init.php";

// page data
// ===========================
$page_title = "grid-tool";
$page_type = "project-detail";
$title_tag = "Austin Chiatto | Grid Tool";
$meta_desc = "Create stunning CSS grids effortlessly with our easy-to-use tool. Say goodbye to manual grid creation and hello to pixel-perfect designs. Try it now and transform your grid design process!";
$og_url = "https://austinchiatto.com/grid-tool.php";
$og_image = "src/assets/images/grid-tool-hero.png";

// page content
// ===========================
//hero
$project_name = "Grid Tool";
$project_tagline = "Grids Made Simple";
$hero_img_path = "grid-tool-hero.png";

// external cta section
$external_cta_heading = "Revolutionize your grid design with this CSS Grid Tool";
$external_cta_link_01 = "Live Site";
$external_cta_link_02 = "Source Code";
$external_cta_live_url = "https://grid-tool-v2.austinchiatto.com/";
$external_cta_documentation_url = "https://github.com/AustinChiatto/grid-tool--2.0";

// callout
$callout_label = "GitHub Readme";
$callout_copy = "See more about how and why I built Grid Tool.";
$callout_link = "https://github.com/AustinChiatto/grid-tool--2.0";

// project selection
$project_selection_heading = "Enjoyed " . $project_name . '? <span class="a-text--highlight">Take a look at</span> another project';

// panel & card contents
// ===========================
require "grid-tool/card-content.php";
require "grid-tool/panel-content.php";
require "grid-tool/challenge-content.php";

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
