<?php

// objects for each of my projects
// used for populating the information on the project-card.php partial
// this is displayed on the home page and all-projects pages
// find a way to label 2 objects as featured and have only them displayed on the home page

require_once(__DIR__ . "/../init.php");

$project_one = new Project([
    "link" => "interplanetary.php",
    "name" => "Interplanetary",
    "type" => "Web App",
    "image_url" => "interplanetary-mockup__01.png",
    "image_alt" => "A product mockup displaying a web page that gathers and provides a list of upcoming rocket launches.",
    "featured" => true
]);

$project_two = new Project([
    "link" => "asteroid-run.php",
    "name" => "Asteroid Run",
    "type" => "JS Game",
    "image_url" => "asteroid-run-desktop-mockup.png",
    "image_alt" => "A product mockup showing the desktop version of a video game, the player controls a triangle ship and their goal is to dodge oncoming asteroids.",
    "featured" => true
]);

$project_three = new Project([
    "link" => "heppells.php",
    "name" => "The Heppells",
    "type" => "Static Web",
    "image_url" => "heppells-desktop-mockup.png",
    "image_alt" => "a product mockup for a website for an upcoming wedding. The site displays the homepage with the title 'Sabrina & Neil' and an image of the bride and groom.",
    "featured" => false
]);

$project_four = new Project([
    "link" => "audio-player.php",
    "name" => "Audio Player",
    "type" => "GSAP Animation",
    "image_url" => "interplanetary-desktop-mockup.png",
    "image_alt" => "A mockup of an audio player that is currently playing a song buy Mac Miller.",
    "featured" => false
]);

$projects = [
    $project_one,
    $project_two,
    $project_three,
    $project_four,
];
