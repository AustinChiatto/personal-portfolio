<?php
require_once __DIR__ . "/../init.php";
// page data
// ===========================
$page_title = "about";
$page_type = "about";
$title_tag = "Austin Chiatto | More About Me";
$meta_desc = "I'm a developer, fascinated and inspired by the ability to bring ideas to life with code.";
$og_url = "https://austinchiatto.com/about.php";
$og_image = "src/assets/images/about-section__image-00.jpg";

// page content
// ===========================
// hero
$hero_pre_heading = "My friends call me bald, but most";
$hero_heading = "Call Me Austin";

// callout
$callout_label = "Get In Touch";
$callout_copy = "Join me in my adventure. Lets create something new!";
$callout_link = "mailto:chiattoaustin@gmail.com";

// panel & card contents
// ===========================
require "about-page/card-content.php";
require "about-page/panel-content.php";

// Primary Grid
// ===========================
$contact_card = new AboutDetail([
    "type" => "contact",
    "pre_heading" => "Say Hello",
    "heading" => "Contact Me",
    "card_content" => $contact_card_content,
    "card_type" => "--tall",
    "grid_col" => "left",
]);

$map_card = new AboutDetail([
    "type" => "map",
    "card_content" => $map_card_content,
    "card_type" => "--img-full",
    "grid_col" => "left",
]);

$profile_image_card = new AboutDetail([
    "type" => "profile-img",
    "card_content" => $profile_card_content,
    "card_type" => "--img-full",
    "grid_col" => "right",
]);

$skills_card = new AboutDetail([
    "type" => "skills",
    "pre_heading" => "Languages & Tools",
    "heading" => "Skills",
    "card_content" => $skills_card_content,
    "panel_content" => $skills_panel_content,
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$primary_grid = [$contact_card, $map_card, $profile_image_card, $skills_card];

// Secondary Grid
// ===========================
$personal_tech_card = new AboutDetail([
    "type" => "personal-tech",
    "pre_heading" => "idk",
    "heading" => "something neat",
    "card_content" => $personal_tech_card_content,
    "panel_content" => $personal_tech_panel_content,
    "card_type" => "--tall",
    "grid_col" => "left",
]);

$second_card = new AboutDetail([
    "type" => "profile-img",
    "card_content" => $second_card_content,
    "card_type" => "--img-full",
    "grid_col" => "left",
]);

$third_image_card = new AboutDetail([
    "type" => "third",
    "card_content" => "content",
    "panel_content" => "PH",
    "grid_col" => "right",
]);

$upcoming_projects_card = new AboutDetail([
    "type" => "upcoming-projects",
    "pre_heading" => "idk",
    "heading" => "something neat",
    "card_content" => $upcoming_project_card_content,
    "panel_content" => $upcoming_project_panel_content,
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$secondary_grid = [$personal_tech_card, $second_card, $third_image_card, $upcoming_projects_card];

// all grid cards - used for content panel
$about_grids = [$contact_card, $map_card, $profile_image_card, $skills_card, $personal_tech_card, $second_card, $third_image_card, $upcoming_projects_card];
?>
