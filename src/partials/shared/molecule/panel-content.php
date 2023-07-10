<?php
require_once "/Users/austinchiatto/development/personal-portfolio/src/app/init.php";

// page data
// ===========================
// about page
require_once get_path("data/about.php");
// projects
require_once get_path("data/projects.php");
// project pages
require_once get_path("data/asteroid-run.php");

// get request for card id
// ===========================
$cardId = $_GET["cardId"]; // get request to get id of card being clicked -- passed from AJAX in contentPanel.js

// load content
// ===========================
if ($page_type == "about") {
    foreach ($about_grids as $detail) {
        if (trim($detail->type) == trim($cardId)) {
            echo $content = $detail->panel_content;
        }
    }
} else {
    foreach ($projects as $project) {
        if ($project->title === $project_name) {
            foreach ($project->project_details as $detail) {
                if (trim($detail->type) == trim($cardId)) {
                    echo $content = $detail->panel_content;
                }
            }
        }
    }
}
?>
