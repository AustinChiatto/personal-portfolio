<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary Launch Tracker";
$meta_desc = "Stay up-to-date on the latest rocket launches with our comprehensive tracking tool! Our project provides real-time updates on upcoming launches, including launch dates, times, and locations. Never miss a rocket launch again - start tracking today.";
$og_url = "https://austinchiatto.com/public/interplanetary.php";
$og_image = "../src/assets/images/interplanetary-mockup__laptop-01.png";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <!-- hero section -->
        <?php include("../src/partials/project-pages/project-hero.php"); ?>
        <!-- project-cta section -->
        <section class="s-section js-externalCTA">
            <div class="s-section__content">
                <div class="m-intro-container">
                    <h2 class="a-text--center">Explore the Final Frontier <br> and Save The Galaxy!</h2>
                    <!-- <h2 class="a-text--center">Keep up <span class="a-text--highlight">with the <br> Modern-Day</span> Space Race</h2> -->
                    <ul class="m-link-list">
                        <li><a class="a-button--new" href="#" title="">Live Website</a></li>
                        <li><a class="a-button--new" href="#" title="">Source Code</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- info-grid section -->
        <?php include("../src/partials/project-pages/project-info-grid.php"); ?>
            <!-- challenges section -->
            <?php include("../src/partials/project-pages/project-challenges.php"); ?>
        <section class="s-section">
            <div class="s-section__content--wide">
                <a class="o-doc-callout" href="#">
                    <h2 class="a-text--sm o-doc-callout__label">GitHub Readme</h2>
                    <p class="a-text--highlight o-doc-callout__copy">Explore the project documentation for more.</p>
                </a>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content m-intro-container--md">
                <h2 class="a-text--center">Enjoyed Interplanetary? <span class="a-text--highlight">Take a <br> look at</span> another project</h2>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-bottom">
                    <div class="m-content-grid__column">
                        <div class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Tags</h4>
                                <h3>Project Name</h3>
                            </div>
                            <img src="../src/assets/images/test-laptop-mockup.png" alt="">
                        </div>
                    </div>
                    <div class="m-content-grid__column">
                        <div class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Tags</h4>
                                <h3>Project Name</h3>
                            </div>
                            <img src="../src/assets/images/test-laptop-mockup.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>