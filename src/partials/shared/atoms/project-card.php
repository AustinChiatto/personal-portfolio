

<a class="a-card<?= $project->card_type ?>" href="asteroid-run-two.php">
    <div class="a-card__headings">
        <h4 class="a-text--base a-text--highlight"><?= $project->type ?></h4>
        <h3><?= $project->title ?></h3>
    </div>
    <img src="src/assets/images/<?= $project->thumbnail ?>" alt="<?= $project->desc ?>">
</a>