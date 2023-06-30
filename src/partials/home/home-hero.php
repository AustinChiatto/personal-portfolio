<!-- data for content can be found in data/page-name -->
<section class="s-section--theme-light o-hero js-heroContainer">
    <div class="s-section__content--full o-hero__intro js-hero">
        <!-- pre-heading -->
        <h2 class="a-text--lg a-text--left js-heroBlur"><?= $hero_pre_head ?></h2>
        <!-- hero-heading -->
        <h1 class="a-text--hero a-text--upper a-text--center js-heroHeading o-hero__heading-main"><?= $hero_heading ?></h1>
        <div class="o-hero__sub js-heroBlur">
            <!-- sub-heading list -->
            <ul class="o-hero__sub-container">
                <?php for($i = 0; $i < count($hero_sub_head); $i++) : ?>
                    <li class="a-text--sm a-text--right"><?= $hero_sub_head[$i] ?></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
<!-- section continued in mission.php -->