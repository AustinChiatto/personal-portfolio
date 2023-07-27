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
$project_name = "";

// page content
// ===========================
// hero
$hero_pre_heading = "My friends call me bald, but most";
$hero_heading = "Call Me Austin";

// bio
$bio_heading = "Trying to paint with code";
$bio_copy = '
    <p class="a-text--center a-text--highlight a-text--restrict">I am constantly amazed by the power coding provides to turn ideas into reality. With it, I love to create immersive user experiences using modern languages and frameworks.</p>
    <p class="a-text--center a-text--highlight a-text--restrict">I specialize in creating visually appealing and responsive websites. I have strong foundation in vanilla front-end languages, as well as some experience with backend languages such as PHP and SQL. I am also familiar with version control systems such as Git and have experience collaborating with other developers on projects.</p>
    <p class="a-text--center a-text--highlight a-text--restrict">But most of all I&#39m trying to atone for all the broken computers I confidently thought I could rebuild in my childhood</p>
';

// callout
$callout_label = "Hire Me";
$callout_copy = "I am currently looking for internship opportunities";
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
    "external_url" => "#",
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
    "pre_heading" => "My Life Online",
    "heading" => "Personal Tech Stack",
    "card_content" => $personal_tech_card_content,
    "panel_content" => $personal_tech_panel_content,
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
    "card_content" => $upcoming_project_card_content,
    "panel_content" => $upcoming_project_panel_content,
    "card_type" => "--tall",
    "grid_col" => "right",
]);

$secondary_grid = [$personal_tech_card, $second_card, $third_image_card, $upcoming_projects_card];

// all grid cards - used for content panel
$about_grids = [$contact_card, $map_card, $profile_image_card, $skills_card, $personal_tech_card, $second_card, $third_image_card, $upcoming_projects_card];
?>
