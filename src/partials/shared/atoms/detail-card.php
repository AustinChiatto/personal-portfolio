<a id="<?= $detail->type ?>" class="a-card<?= $page_type == "project-detail" ? $detail->card_type : null ?> js-projectDetailCard" href="<?= $detail->external_url ? $detail->external_url : null ?>" title="<?= $detail->heading ?>">
    <div class="a-card__headings">
        <h4 class="a-text--base a-text--highlight"><?= $detail->pre_heading ?></h4>
        <h3><?= $detail->heading ?></h3>
    </div>
    <?= $detail->card_content ?>
</a>