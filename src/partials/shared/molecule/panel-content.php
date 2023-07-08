<?php
require_once "/Users/austinchiatto/development/personal-portfolio/src/app/init.php";
require_once get_path("data/projects.php");
require_once get_path("data/asteroid-run.php");

$cardId = $_GET["cardId"]; // get request to get id of card being clicked -- passed from AJAX in contentPanel.js

foreach ($projects as $project):
    if ($project->title === $project_name) {
        foreach ($project->project_details as $detail) {
            if (trim($detail->type) == trim($cardId)) {
                echo $content = $detail->panel_content;
            }
        }
    }
endforeach;
?>
