<?php
require_once __DIR__ . "/../init.php";

// page data
// ===========================
$page_title = "asteroid-run";
$page_type = "project-detail";
$title_tag = "Austin Chiatto | Asteroid Run";
$meta_desc = "pew pew pew space and guns and lasers and stuff!";
$og_url = "https://austinchiatto.com/public/asteroid-run-two.php";
$og_image = "src/assets/images/about-section__image-00.jpg";

// page content
// ===========================
//hero
$project_name = "Asteroid Run";
$project_tagline = "Unleash your Inner Space Cowboy";
$hero_img_path = "asteroid-run-hero.png";

// external cta section
$external_cta_heading = 'Strap in, Power Up, Shoot First, <br> <span class="a-text--highlight">Ask Questions Never!</span>';
$external_cta_link_01 = "Play Game";
$external_cta_link_02 = "Source Code";

// callout
$callout_label = "GitHub Readme";
$callout_copy = "See more about how and why I built Asteroid Run.";

// project selection
$project_selection_heading = "Enjoyed" . $project_name . '? <span class="a-text--highlight">Take a <br> look at</span> another project';

// detail cards
// ===========================
// Team Card
$team_card_content = '
    <div class="o-project-personal">
        <div class="o-project-personal__design">Design</div>
        <div class="o-project-personal__front-end">Front End</div>
        <div class="o-project-personal__back-end">Back End</div>
    </div>';

$team_panel_content = "";

$team_card = new Detail([
    "type" => "team",
    "pre_heading" => "My Contributions",
    "heading" => "Solo Project",
    "card_content" => $team_card_content,
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "left",
]);

// Git Card
$git_card_content = '<img src="../src/assets/images/asteroid-run_card-mockup-laptop.png" alt="">';

$git_card = new Detail([
    "type" => "git",
    "pre_heading" => "Latest Commit",
    "heading" => "Version History",
    "card_content" => $git_card_content,
    "grid_col" => "left",
]);

// Live Card
$live_card_content = '<img src="../src/assets/images/asteroid-run_card-mockup-mobile.png" alt="">';

$live_card = new Detail([
    "type" => "live",
    "pre_heading" => "Explore The Project",
    "heading" => "Live Website",
    "card_content" => $live_card_content,
    "grid_col" => "right",
]);

// Purpose Card
$purpose_card_content = "";

$purpose_panel_content = "";

$purpose_card = new Detail([
    "type" => "purpose",
    "pre_heading" => "Project Purpose",
    "heading" => "Intentions",
    "card_content" => $purpose_card_content,
    "panel_content" => "PH",
    "card_type" => "--tall",
    "grid_col" => "right",
]);

// Technology Card
$technology_card_content = '
    <ul class="o-info-grid__tech">
        <li class="o-info-grid__tech-icon">
            <svg viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L3.77957 43.2011L20.7444 48L37.7524 43.1946L41.5385 0H0ZM33.3173 14.1429H13.4135L13.8462 19.6071H32.8846L31.4232 35.8275L20.7692 38.8371L10.0947 35.8371L9.3613 27.5357H14.5817L14.9517 31.7454L20.7692 33.3289L26.5478 31.7304L27.1514 24.8571H9.08654L7.72464 8.82964H33.7716L33.3173 14.1429Z" fill="#6E6E73"/>
            </svg>
        </li>
        <li class="o-info-grid__tech-icon">
            <svg width="42" height="48" viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0L3.75 43.2021L20.5468 48L37.3929 43.1946L41.1429 0H0ZM31.1443 35.8821L20.5789 38.8929L10.0296 35.8671L9.30643 27.5357H14.4771L14.8446 31.7743L20.5864 33.3986L20.6004 33.4286L26.3293 31.8375L26.9336 24.9643H14.8929L14.4643 19.6071H27.3911L27.8571 14.1429H8.14286L7.71429 8.89286H33.4907L31.1443 35.8821Z" fill="#6E6E73"/>
            </svg>
        </li>
        <li class="o-info-grid__tech-icon">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0V48H48V0H0ZM25.7143 37.2857C25.7143 41.9582 22.9543 44.2361 18.9589 44.2361C15.3504 44.2361 13.2557 42.3675 12.1929 40.1121L15.8657 37.8889C16.5739 39.1457 17.1118 40.2086 18.6579 40.2086C19.9436 40.2086 21 39.6289 21 37.3736V22.2857H25.7143V37.2857ZM36.3589 44.1289C32.1707 44.1289 29.4643 42.2389 28.1432 39.6289L31.8214 37.5C32.7857 39.0793 34.0446 40.1314 36.2679 40.1314C38.1364 40.1314 39.2218 39.3043 39.2218 38.0154C39.2218 36.4693 38.1043 35.9218 36.0418 35.0154L34.9146 34.5311C31.6596 33.1468 29.5018 31.4068 29.5018 27.7329C29.5018 24.3504 32.0786 21.8796 36.1061 21.8796C38.9743 21.8796 41.0346 22.7711 42.5186 25.3811L39 27.6429C38.2264 26.2575 37.3929 25.7143 36.1007 25.7143C34.7796 25.7143 33.9418 26.5521 33.9418 27.6429C33.9418 28.9961 34.7796 29.5436 36.7125 30.3814L37.8396 30.8646C41.6743 32.5082 43.8332 34.1861 43.8332 37.9532C43.8343 42.0139 40.6446 44.1289 36.3589 44.1289Z" fill="#6E6E73"/>
            </svg>
        </li>
    </ul>';

$technology_panel_content = "";

$technology_card = new Detail([
    "type" => "technology",
    "pre_heading" => "<span class='a-text--white'>Made with love</span> and {brackets}",
    "card_content" => $technology_card_content,
    "panel_content" => "PH",
    "card_type" => "--wide",
]);

// store all project objects in array
$details = [$team_card, $git_card, $live_card, $purpose_card, $technology_card];

// challenge section content
// ===========================
$challenge_01 = "";
$challenge_02 = "";
$challenge_03 = "";

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
