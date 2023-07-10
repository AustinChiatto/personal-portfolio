<section class="s-section">
    <div class="s-section__content--wide">
        <div class="m-content-grid--pad-top js-contentGrid">
            <!-- <p class="o-info-grid__caption">Click Around</p> -->
            <div class="m-content-grid__column">
                <?php foreach ($projects as $project): ?>
                    <?php if ($project->title === $project_name): ?>
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
                    <?php if ($project->title === $project_name): ?>
                        <?php foreach ($project->project_details as $detail):
                            if ($detail->grid_col == "right") {
                                require "src/partials/shared/atoms/detail-card.php";
                            }
                        endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
