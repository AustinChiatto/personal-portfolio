<div class="s-section__content">
    <div class="m-content-grid--project-list js-contentGrid">
        <div class="m-content-grid__column">
            <?php foreach ($projects as $project):
                if (h($project->is_featured) == true && h($project->grid_col) == "left"): ?>
                    <?php require "src/partials/shared/atoms/project-card.php"; ?>
            <?php endif;
            endforeach; ?>
        </div>
        <div class="m-content-grid__column">
            <?php foreach ($projects as $project):
                if (h($project->is_featured) == true && h($project->grid_col) == "right"): ?>
                <?php require "src/partials/shared/atoms/project-card.php"; ?>
            <?php endif;
            endforeach; ?>
        </div>
    </div>
</div>