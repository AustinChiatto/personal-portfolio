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
                <h2 class="u-text-center">Keep up <span class="u-font-highlight">with the Modern-Day</span> Space Race</h2>
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    grid
                </div>
            </section>
            <section class="s-section--full-height">
                <div class="s-section__content">
                    Challenges
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    Documentation
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