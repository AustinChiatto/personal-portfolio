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
        <!-- bio section 001 -->
        <section class="s-section">
            <div class="s-section__content--wide o-bio js-aboutBio">
                <div class="o-bio__left o-bio__heading-container js-bioHeadingCont">
                    <h2 class="o-bio__heading js-bioHeading">
                        <span class="o-bio__span js-bioSpan">Think.</span>
                        <span class="o-bio__span js-bioSpan">Make.</span>
                        <span class="o-bio__span js-bioSpan">Solve.</span>
                        <span class="o-bio__span js-bioSpan">Learn.</span>
                    </h2>
                </div>
                <div class="o-bio__left o-bio__body js-bioBody">
                    <p>Embracing the world of front-end development with an open heart and a curious mind. I find joy in the art of creation and the thrill of solving puzzles. 'Think. Make. Solve. Learn.' This simple mantra defines my journey as a front-end developer. With every project I take on, I strive to envision new possibilities, transforming ideas into realities, and learning every step of the way.</p>
                    <p>I believe in crafting user experiences that are intuitive and delightful, making the web a better place for everyone. As I continue on this path, I am eager to collaborate, share knowledge, and contribute to the ever-evolving web community. Let's embark on this journey together.</p>
                </div>
            </div>
        </section>
        <!-- callout -->
        <?php include "src/partials/project-pages/callout.php"; ?>
        <!-- bio section 002 -->
        <section class="s-section">
            <div class="s-section__content--wide o-bio--pad-top">
                <div class="o-bio__left">
                    <h2 class="o-bio__heading">
                        <span class="js-bioSpan">💻</span>
                        <span class="js-bioSpan">🚀</span>
                        <span class="js-bioSpan">👾</span>
                        <span class="js-bioSpan">🏔️</span>
                    </h2>
                </div>
                <div class="o-bio__left o-bio__body ">
                    <p>If I'm not found engrossed in a project, you can find me immersed in a sci-fi movie or novel, staring at a game over screen, re-organizing something, or out getting lost in the mountains.</p>
                    <p>I have always loved technology and its impossibly limitless ability to surprise, help, and inspire myself and humanity. It's a part of my everyday life and becoming a developer has only grown my passion.</p>
                </div>
            </div>
        </section>
        <!-- grid section - secondary grid -->
        <!-- <section class="s-section">
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
        </section> -->
    </main>
    <!-- Footer -->
    <?php require "src/partials/shared/base/footer/footer.php"; ?>
    <!-- content panel -->
    <?php echo "<script>const projectName = '$project_name'; const pageTitle = '$page_title';</script>"; ?>
    <script src="src/app/js/contentPanel.js"></script>
    <!-- Bio Animations -->
    <script src="src/app/js/aboutPageAnimation.js"></script>
</body>
</html>