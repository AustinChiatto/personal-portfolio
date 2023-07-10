<section class="s-section">
    <div class="s-section__content--wide">
        <div class="m-content-grid--pad-top js-contentGrid">
            <div class="m-content-grid__column">
                <?php foreach ($details as $detail):
                    if ($detail->grid_col == "left") {
                        require "src/partials/shared/atoms/detail-card.php";
                    }
                endforeach; ?>
            </div>
            <div class="m-content-grid__column">
                <?php foreach ($details as $detail):
                    if ($detail->grid_col == "right") {
                        require "src/partials/shared/atoms/detail-card.php";
                    }
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
