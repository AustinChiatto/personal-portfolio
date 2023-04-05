<article class="m-project-card js-project-card">
    <h3 class="m-project-card__label"><?php echo h($project->name)?></h3>
    <a class="m-project-card__link" href="<?php echo h($project->link) ?>">
        <img loading="lazy" src="../src/assets/images/<?php echo h($project->image_url) ?>" alt="<?php echo h($project->name) . " " . h($project->type)?>" data-tilt data-tilt-max="15" data-tilt-perspective="2000">
    </a>
    <h3 class="m-project-card__label--small"><?php echo h($project->type)?></h3>
</article>