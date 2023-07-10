<?php require "src/app/init.php"; ?>
<!DOCTYPE html>
<?php
// data for current page - used in head and body contents
require "src/app/data/about.php";
// head
require "src/partials/shared/base/head.php";
?>
<body>
    <!-- header -->
    <?php require "src/partials/shared/base/header/header.php"; ?>
    <main>
        <!-- hero section -->
        <section class="s-section">
            <div class="s-section__content m-intro-container--about-page">
                <h2 class="a-text--base a-text--highlight"><?= $hero_pre_heading ?></h2>
                <h1><?= $hero_heading ?></h1>
            </div>
        </section>
        <!-- grid section - priority grid -->
        <section class="s-section">
            <div class="s-section__content--wide">
                <div class="m-content-grid--project-list js-contentGrid">
                    <!-- <p class="o-info-grid__caption">Click Around</p> -->
                    <div class="m-content-grid__column">
                        <?php foreach ($primary_grid as $detail) {
                            if ($detail->grid_col == "left") {
                                require "src/partials/shared/atoms/about-card.php";
                            }
                        } ?>
                    </div>
                    <div class="m-content-grid__column">
                        <?php foreach ($primary_grid as $detail) {
                            if ($detail->grid_col == "right") {
                                require "src/partials/shared/atoms/about-card.php";
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- card panel -->
        <?php include "src/partials/shared/molecule/content-panel.php"; ?>
        <!-- bio section -->
        <section class="s-section">
            <div class="s-section__content m-intro-container--md">
                <h2 class="a-text--highlight a-text--pad-bottom"><?= $bio_heading ?></h2>
                <?= $bio_copy ?>
            </div>
        </section>
        <!-- marquee -->
        <!-- <section class="s-section">
            <div class="s-section__content m-intro-container--md">
                <h2 class="a-text--highlight a-text--pad-bottom">Marquee</h2>
            </div>
        </section> -->
        <!-- grid section - secondary grid -->
        <section class="s-section">
            <div class="s-section__content--wide">
                <div class="m-content-grid--project-list js-contentGrid">
                    <div class="m-content-grid__column">
                        <?php foreach ($secondary_grid as $detail) {
                            if ($detail->grid_col == "left") {
                                require "src/partials/shared/atoms/about-card.php";
                            }
                        } ?>
                    </div>
                    <div class="m-content-grid__column">
                        <?php foreach ($secondary_grid as $detail) {
                            if ($detail->grid_col == "right") {
                                require "src/partials/shared/atoms/about-card.php";
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- callout -->
        <section class="s-section">
            <div class="s-section__content--wide">
                <a class="o-doc-callout--mr-block" href="#">
                    <h2 class="a-text--sm o-doc-callout__label"><?= $callout_label ?></h2>
                    <p class="a-text--highlight o-doc-callout__copy"><?= $callout_copy ?></p>
                </a>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require "src/partials/shared/base/footer/footer.php"; ?>
    <!-- SplitType.js -->
    <script src="https://unpkg.com/split-type"></script>
    <!-- animation.js file -->
    <script src="src/app/js/aboutAnimation.js"></script>
    <!-- content panel -->
    <script src="src/app/js/contentPanel.js"></script>
</body>
</html>