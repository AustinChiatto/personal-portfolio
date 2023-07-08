<?php
require_once "/Users/austinchiatto/development/personal-portfolio/src/app/init.php";
require_once get_path("data/asteroid-run.php");
require_once get_path("data/projects.php");
?>

<div class="m-content-panel js-contentPanel">
    <div class="m-content-panel__container">
        <aside data-lenis-prevent class="m-content-panel__modal js-panelModal">
            <a class="m-content-panel__close-icon js-panelClose">
                <img src="src/assets/icons/Close.svg" width="24" height="24" alt="close icon">
            </a>
            <?php
            $cardId = $_GET["cardId"];
            $content = "";

            foreach ($projects as $project): ?>
                <?php if ($project === $asteroid_run): ?>
                    <?php foreach ($project->project_details as $detail):
                        if ($detail->type) {
                            $content = $detail->panel_content;
                        }
                    endforeach; ?>
                <?php endif; ?>
            <?php endforeach;
            ?>
        </aside>
    </div>
</div>