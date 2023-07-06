<?php
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

// bio
$bio_heading = "Trying to paint with code";
$bio_copy = "Ad enim ipsum id proident elit in. Et ad non aute exercitation. Enim ipsum ut excepteur dolor sunt. Nisi cupidatat dolore ut adipisicing mollit ea in pariatur dolor labore enim duis est sint. Est pariatur eu enim Lorem aliqua amet reprehenderit nulla culpa culpa Lorem nostrud voluptate in amet. Non magna Lorem non sint non eiusmod.";

// callout
$callout_label = "Hire Me";
$callout_copy = "I am currently looking for internship opportunities";

// Primary Grid
// ===========================
$contact_card = new AboutDetail([
    "type" => "contact",
    "pre_heading" => "Say Hello",
    "heading" => "Contact Me",
    "card_content" => "content",
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "left",
]);

$map_card = new AboutDetail([
    "type" => "map",
    "card_content" => "content",
    "panel_content" => "PH",
    "grid_col" => "left",
]);

$profile_image_card = new AboutDetail([
    "type" => "profile-img",
    "card_content" => "content",
    "panel_content" => "PH",
    "grid_col" => "right",
]);

$skills_card = new AboutDetail([
    "type" => "skills",
    "pre_heading" => "Languages & Tools",
    "heading" => "Skills",
    "card_content" => "content",
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$primary_grid = [$contact_card, $map_card, $profile_image_card, $skills_card];

// Secondary Grid
// ===========================
$personal_tech_card = new AboutDetail([
    "type" => "personal-tech",
    "pre_heading" => "My Life Online",
    "heading" => "Personal Tech Stack",
    "card_content" => "content",
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "left",
]);

$second_card = new AboutDetail([
    "type" => "second",
    "card_content" => "content",
    "panel_content" => "PH",
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
    "pre_heading" => "Projects In Development",
    "heading" => "Coming Soon?",
    "card_content" => "content",
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$secondary_grid = [$personal_tech_card, $second_card, $third_image_card, $upcoming_projects_card];
?>
