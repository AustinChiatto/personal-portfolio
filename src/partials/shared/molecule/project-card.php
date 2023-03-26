<article class="m-project-card js-project-card">
    <h3 class="m-project-card__title"><?php echo h($project->name); ?></h3>
    <a class="m-project-card__link" href="<?php echo h($project->link) ?>">
        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
    </a>
    <h4 class="m-project-card__label"><?php echo h($project->type); ?></h4>
</article>