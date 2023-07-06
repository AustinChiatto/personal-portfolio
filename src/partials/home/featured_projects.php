<div class="s-section__content">
    <div class="m-content-grid--project-list js-contentGrid">
        <div class="m-content-grid__column">
            <?php foreach ($projects as $project):
                if (h($page_type) !== "project-page" && h($project->is_featured) == true && h($project->grid_col) == "left") {
                    require "src/partials/shared/atoms/project-card.php";
                } elseif (h($page_type) === "project-page" && h($project->grid_col) == "left") {
                    require "src/partials/shared/atoms/project-card.php";
                } ?>
            <?php
            endforeach; ?>
        </div>
        <div class="m-content-grid__column">
        <?php foreach ($projects as $project):
            if (h($page_type) !== "project-page" && h($project->is_featured) == true && h($project->grid_col) == "right") {
                require "src/partials/shared/atoms/project-card.php";
            } elseif (h($page_type) === "project-page" && h($project->grid_col) == "right") {
                require "src/partials/shared/atoms/project-card.php";
            } ?>
            <?php
        endforeach; ?>
        </div>
    </div>
</div>