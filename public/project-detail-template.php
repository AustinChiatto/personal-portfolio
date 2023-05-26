<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary Launch Tracker";
$meta_desc = "Stay up-to-date on the latest rocket launches with our comprehensive tracking tool! Our project provides real-time updates on upcoming launches, including launch dates, times, and locations. Never miss a rocket launch again - start tracking today.";
$og_url = "https://austinchiatto.com/public/interplanetary.php";
$og_image = "../src/assets/images/interplanetary-mockup__laptop-01.png";
require("../src/partials/shared/base/head.php");
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--full-height">
                <h1 class="a-heading--large">Project Name</h1>
                <h2 class="a-heading--sub u-font-highlight">Project Caption / Sub heading</h2>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    Hero img
                </div>
            </section>
            <section class="s-section--pad-large">
                <div class="s-section__content">
                <h2 class="u-text-center">Keep up <span class="u-font-highlight">with the <br> Modern-Day</span> Space Race</h2>
                <ul class="o-about-hero__link-list">
                    <!-- DON'T FORGET TO ADD PROJECT NAME PHP STUFF -->
                    <li><a class="a-button" href="#" title="Explore the live version of PROJECT NAME">Live Website</a></li>
                    <li><a class="a-button" href="#" title="See the documentation & code behind PROJECT NAME">Source Code</a></li>
                </ul>
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    <section class="o-project-grid">
                        <div class="o-project-grid__column">
                            <div class="o-project-grid__item--tall">team/role</div>
                            <div class="o-project-grid__item">github</div>
                        </div>
                        <div class="o-project-grid__column">
                            <div class="o-project-grid__item">live site</div>
                            <div class="o-project-grid__item--tall">dev time/info</div>
                        </div>
                        <div class="o-project-grid__item--wide">technology</div>
                    </section>
                </div>
            </section>
            <section class="s-section--full-height">
                <div class="s-section__content">
                    Challenges
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    <div class="o-doc-callout">
                        <a class="o-doc-callout__heading">GitHub</a>
                        <p class="o-doc-callout__caption">For a more detailed look at this projects documentation</p>
                    </div>
                </div>
            </section>
            <section class="s-section--pad-large">
                <div class="s-section__content">
                    Project Selection
                </div>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>