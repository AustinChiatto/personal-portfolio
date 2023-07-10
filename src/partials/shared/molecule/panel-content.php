<?php
// page data
// ===========================
// projects
require __DIR__ . "../../../../app/init.php";
// project cards

// get request for card id
// ===========================
$projectName = $_GET["projectName"];
$cardId = $_GET["cardId"];
$pageTitle = $_GET["pageTitle"];

require __DIR__ . "../../../../app/data/{$pageTitle}.php";

// load content
// ===========================
if ($page_type === "about") {
    foreach ($about_grids as $detail) {
        if (trim($detail->type) == trim($cardId)) {
            echo $content = $detail->panel_content;
            break;
        }
    }
} elseif ($page_type === "project-detail") {
    foreach ($details as $detail) {
        if (trim($detail->type) == trim($cardId)) {
            echo $content = $detail->panel_content;
        }
    }
}
?>
