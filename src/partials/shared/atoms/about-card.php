<a class="a-card<?= $detail->card_type ? $detail->card_type : null ?> js-projectDetailCard" href="#">
    <div class="a-card__headings">
        <h4 class="a-text--base a-text--highlight"><?= $detail->pre_heading ?></h4>
        <h3><?= $detail->heading ?></h3>
    </div>
    <?= $detail->card_content ?>
</a>