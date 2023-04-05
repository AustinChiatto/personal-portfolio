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
        <!-- <div class="s-section-wrapper">
            <section class="s-section--full-height js-home-hero js-hero-pin">
                <h1 class="js-home-hero-text">Witness Humanity Touch The Stars</h1>
            </section>
        </div> -->
        <!-- Project Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">Interplanetary</h2>
                    <p>Explore our solar system and track the upcoming launches that are moving humanity towards becoming interplanetary.</p>
                    <!-- Project Stats -->
                    <ul class="m-project-stats">
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Status</h3>
                            <p class="m-project-stats__stat">WIP</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Role</h3>
                            <p class="m-project-stats__stat">Designer & Developer</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Technology</h3>
                            <p class="m-project-stats__stat">API, JS, PHP, SCSS</p>
                        </li>
                    </ul>
                    <!-- Project External Links -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="#">👀 Live site</a></li>
                        <li><a class="a-button" href="#">📂 Source Code</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
            <!-- Project Mockup Gallery -->
            <section class="s-section">
            <div class="o-project-gallery">
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__tablet-01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__mobile-02.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__mobile-01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__tablet-02.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__tablet-03.png" alt="">
                    </picture>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
            <!-- Project Responsive Animation -->
            <section class="s-section--full-height js-project-anim">
                <div class="o-project-anim">
                    <h2 class="a-heading-wrap">Developed with modern responsive design techniques to ensure a seamless and intuitive experience on any device.</h2>
                    <div class="o-project-anim__container js-project-anim__container">
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper--theme-dark">
            <!-- Project Milestones -->
            <div class="o-milestones js-project-milestones">
                <!-- Milestone One -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Upcoming Launches</h2>
                        <p>The first milestone of the project was integrating the <a class="a-link--grey" href="https://www.rocketlaunch.live/api" target="_blank">rocketlaunch.live</a> API to collect the live data for upcoming rocket launches. This enabled the display of information in a user friendly format.</p>
                    </div>
                </section>
                <!-- Milestone Two -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Previous Launches</h2>
                        <p>Using the same API to collect and parse data from previous launches allowed the site to become a catalogue of all rocket launches throughout space flight history. This milestone enabled search functionality, putting access to specific launch information in the hands of the user.</p>
                    </div>
                </section>
                <!-- Milestone Three -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom u-font-highlight">Live Solar Map</h2>
                        <p class="u-font-highlight">This milestone is a work in progress, but when complete, it will provide users with a full and accurate map of our solar system. This would include planet data, live orbits and positions, and will give the user a sense of the immense scale of our solar system.</p>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>