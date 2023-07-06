<section class="s-section">
    <div class="s-section__content">
        <div class="m-content-grid--pad-top js-contentGrid">
            <div class="m-content-grid__column">
                <?php foreach ($projects as $project): ?>
                    <?php if ($project === $asteroid_run): ?>
                        <?php foreach ($project->project_details as $detail):
                            if ($detail->grid_col == "left") {
                                require "src/partials/shared/atoms/detail-card.php";
                            }
                        endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="m-content-grid__column">
                <?php foreach ($projects as $project): ?>
                    <?php if ($project === $asteroid_run): ?>
                        <?php foreach ($project->project_details as $detail):
                            if ($detail->grid_col == "right") {
                                require "src/partials/shared/atoms/detail-card.php";
                            }
                        endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php foreach ($projects as $project): ?>
                <?php if ($project === $asteroid_run): ?>
                    <?php foreach ($project->project_details as $detail):
                        if ($detail->card_type == "--wide") {
                            require "src/partials/shared/atoms/detail-card.php";
                        }
                    endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
