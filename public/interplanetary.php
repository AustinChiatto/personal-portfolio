<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary";
require("../src/partials/shared/base/head.php");
?>

<body data-barba="wrapper">
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main data-barba="container" data-barba-namespace="project-page">
        <!-- <div class="s-section-wrapper">
            <section class="s-section--full-height js-home-hero js-hero-pin">
                <h1 class="js-home-hero-text">Witness Humanity Touch The Stars</h1>
            </section>
        </div> -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">Interplanetary</h2>
                    <p>Explore our solar system and track the upcoming launches that are moving humanity towards becoming interplanetary.</p>
                    <ul class="m-link-list">
                        <li><a class="a-button" href="#">👀 Live site</a></li>
                        <li><a class="a-button" href="#">📂 Source Code</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
            <section class="s-section">
                <div class="o-project-gallery">
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-small">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-small">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-small">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-small">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__01.png" alt="">
                    </picture>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
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
            <div class="o-milestones js-project-milestones">
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">API Integration</h2>
                        <p>API integration was an integral feature for the website. It allows the collection of live data on rocket launches, including schedules, providers, launch vehicle, and more. Which is then displayed on the frontend in a user-friendly format.</p>
                    </div>
                </section>
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">API Integration</h2>
                        <p>API integration was an integral feature for the website. It allows the collection of live data on rocket launches, including schedules, providers, launch vehicle, and more. Which is then displayed on the frontend in a user-friendly format.</p>
                    </div>
                </section>
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">API Integration</h2>
                        <p>API integration was an integral feature for the website. It allows the collection of live data on rocket launches, including schedules, providers, launch vehicle, and more. Which is then displayed on the frontend in a user-friendly format.</p>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>