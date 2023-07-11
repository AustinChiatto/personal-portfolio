<a class="a-card<?= $page_type == "project-page" ? $project->card_type : null ?> <?= $project->key ?>" href="<?= $project->internal_url ?>">
    <div class="a-card__headings">
        <h4 class="a-text--base a-text--highlight"><?= $project->type ?></h4>
        <h3><?= $project->title ?></h3>
    </div>
    <div class="a-card__content--img"><img src="src/assets/images/<?= $project->thumbnail ?>" alt="<?= $project->desc ?>"></div>
</a>