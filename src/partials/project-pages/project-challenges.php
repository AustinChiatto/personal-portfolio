<section class="s-section">
    <div class="s-section__content">
        <div class="m-intro-container m-intro-container--vh100 js-chalHeaderCont">
            <h2 class="a-text--center a-text--restrict js-chalHeader">Challenges Overcome <span class="a-text--highlight">in the</span> Development <span class="a-text--highlight">of <?= $project_name ?></span></h2>
        </div>
    </div>
</section>
<div class="o-challenge">
    <section class="s-section js-chalImgCont">
        <div class="s-section__content o-challenge__img-cont js-chalImg">
            <img class="o-challenge__img" src="../src/assets/images/<?= $challenge_mockup_url ?>" alt="<?= $challenge_mockup_alt ?>">
        </div>
    </section>
    <section class="s-section js-chalCopyCont">
        <div class="s-section__content--wide o-challenge__grid">
        <?php foreach ($challenges as $challenge): ?>
            <div class="o-challenge__copy">
                <?= $challenge ?>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>