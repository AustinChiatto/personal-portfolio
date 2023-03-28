<?php

// objects for each of my projects
// used for populating the information on the project-card.php partial
// this is displayed on the home page and all-projects pages
// find a way to label 2 objects as featured and have only them displayed on the home page

require_once(__DIR__ . "/../init.php");

$project_one = new Project([
    "link" => "interplanetary.php",
    "name" => "Interplanetary",
    "type" => "API Integrated Launch Tracker",
    "image_url" => "project-img__00.png",
    "image_alt" => "A product mockup displaying a web page that gathers and provides a list of upcoming rocket launches.",
    "featured" => true
]);

$project_two = new Project([
    "link" => "interplanetary.php",
    "name" => "Asteroid Run",
    "type" => "Vanilla JS Browser Game",
    "image_url" => "project-img__01.png",
    "image_alt" => "A product mockup showing the desktop version of a video game, the player controls a triangle ship and their goal is to dodge oncoming asteroids.",
    "featured" => true
]);

$project_three = new Project([
    "link" => "interplanetary.php",
    "name" => "The Heppells",
    "type" => "Static Wedding RSVP Website",
    "image_url" => "project-img__03.png",
    "image_alt" => "a product mockup for a website for an upcoming wedding. The site displays the homepage with the title 'Sabrina & Neil' and an image of the bride and groom.",
    "featured" => false
]);

$project_four = new Project([
    "link" => "interplanetary.php",
    "name" => "CSS Grid Tool",
    "type" => "GSAP Animation",
    "image_url" => "project-img__02.png",
    "image_alt" => "A mockup of an audio player that is currently playing a song buy Mac Miller.",
    "featured" => false
]);

$projects = [
    $project_one,
    $project_two,
    $project_three,
    $project_four,
];