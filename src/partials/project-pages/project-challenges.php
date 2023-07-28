<section class="s-section">
    <div class="s-section__content">
        <div class="m-intro-container m-intro-container--vh100 js-chalHeaderCont">
            <h2 class="a-text--center a-text--restrict js-chalHeader">Challenges Overcome <span class="a-text--highlight">in the</span> Development <span class="a-text--highlight">of <?= $project_name ?></span></h2>
        </div>
    </div>
</section>
<section class="s-section js-projChallenge">
    <div class="s-section__content--full o-project-challenge">
        <div class="o-project-challenge__visual js-chalVisual">
            <img class="o-project-challenge__img" src="../src/assets/images/<?= $challenge_mockup_url ?>" alt="<?= $challenge_mockup_alt ?>">
        </div>
        <?php foreach ($challenges as $challenge): ?>
            <div class="o-project-challenge__copy">
                <?= $challenge ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>