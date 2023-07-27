<?php if ($detail->external_url): ?>
    <a id="<?= $detail->type ?>" class="a-card<?= $detail->card_type ? $detail->card_type : null ?> js-projectDetailCard <?= !$detail->panel_content ? "js-disablePanel a-card-inactive" : null ?>" title="<?= $detail->pre_heading ?>">
        <?php if ($detail->pre_heading): ?>
            <div class="a-card__headings">
                <h4 class="a-text--base a-text--highlight"><?= $detail->pre_heading ?></h4>
                <h3><?= $detail->heading ?></h3>
            </div>
        <?php endif; ?>
        <?= $detail->card_content ?>
    </a>
<?php else: ?>
    <div id="<?= $detail->type ?>" class="a-card<?= $detail->card_type ? $detail->card_type : null ?> js-projectDetailCard <?= !$detail->panel_content ? "js-disablePanel a-card-inactive" : null ?>" title="<?= $detail->pre_heading ?>">
        <?php if ($detail->pre_heading): ?>
            <div class="a-card__headings">
                <h4 class="a-text--base a-text--highlight"><?= $detail->pre_heading ?></h4>
                <h3><?= $detail->heading ?></h3>
            </div>
        <?php endif; ?>
        <?= $detail->card_content ?>
    </div>
<?php endif; ?>
