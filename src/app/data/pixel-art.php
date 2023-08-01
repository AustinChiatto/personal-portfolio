<?php
require_once __DIR__ . "/../init.php";

// page data
// ===========================
$page_title = "pixel-art";
$page_name = "Pixel Art Creator";
$page_type = "project-detail";
$title_tag = "Austin Chiatto | Pixel Art Creator";
$meta_desc = "Create beautiful pixel art and add it to our, forever growing, live collage.";
$og_url = "https://austinchiatto.com/pixel-art.php";
$og_image = "src/assets/images/pixel-art-hero.png";

// page content
// ===========================
//hero
$project_name = $page_name;
$project_tagline = "Create & Add Pixel Art To Our Live Collage";
$hero_img_path = "pixel-art-hero.png";

// external cta section
$external_cta_heading = "Explore Art Made By Others!";
$external_cta_link_01 = "Live Site";
$external_cta_link_02 = "Source Code";
$external_cta_live_url = "https://crumb.so";
$external_cta_documentation_url = "https://github.com/AustinChiatto/crumb/tree/main/src/components/SnippetEditor";

// callout
$callout_label = "GitHub Readme";
$callout_copy = "See more about how and why I built " . $project_name . ".";
$callout_link = $external_cta_documentation_url;

// project selection
$project_selection_heading = "Enjoyed " . $project_name . '? <span class="a-text--highlight">Take a look at</span> another project';

// panel & card contents
// ===========================
require "snippet-editor/card-content.php";
require "snippet-editor/panel-content.php";
require "snippet-editor/challenge-content.php";

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
