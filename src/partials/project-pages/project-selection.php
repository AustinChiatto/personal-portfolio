<section class="s-section">
    <div class="s-section__content m-intro-container--md">
        <h2 class="a-text--center a-text--restrict"><?= $project_selection_heading ?></h2>
    </div>
</section>
<section class="s-section">
    <div class="s-section__content">
        <div class="m-content-grid--pad-bottom">
            <div class="m-content-grid__column">
                <?php foreach ($projects as $project):
                    if ($project_name !== $project->title && h($project->grid_col) == "left") {
                        require "src/partials/shared/atoms/project-card.php";
                        break;
                    }
                endforeach; ?>
            </div>
            <div class="m-content-grid__column">
                <?php foreach ($projects as $project):
                    if ($project_name !== $project->title && h($project->grid_col) == "right") {
                        require "src/partials/shared/atoms/project-card.php";
                        break;
                    }
                endforeach; ?>
            </div>
        </div>
    </div>
</section>