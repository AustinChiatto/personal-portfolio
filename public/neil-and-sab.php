<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | The Heppells";
$meta_desc = "Sabrina and Neil are getting married. RSVP, see your invite, and view venue details.";
$og_url = "https://austinchiatto.com/public/asteroid-run.php";
$og_image = "../src/assets/images/asteroid-run-mockup_tablet-01.png";
require("../src/partials/shared/base/head.php");
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <!-- Project Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">The Heppells</h2>
                    <p>Sabrina and Neil are getting married. RSVP, see your invite, and view venue details.</p>
                    <!-- Project Stats -->
                    <ul class="m-project-stats">
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Status</h3>
                            <p class="m-project-stats__stat">Live</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Role</h3>
                            <p class="m-project-stats__stat">Designer & Developer</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Technology</h3>
                            <p class="m-project-stats__stat">Vanilla Languages</p>
                        </li>
                    </ul>
                    <!-- Project External Links -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="neilandsab.com" target="_blank" title="take a look at the live site">👀 Live site</a></li>
                        <li><a class="a-button" href="#" target="_blank" title="view the code behind the project">📂 Source Code</a></li>
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
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_tablet-03.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_mobile-01.png" alt="mobile mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_mobile-02.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_laptop-01.png" alt="mobile mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_tablet-02.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/heppells-mockup_mobile-03.png" alt="tablet mockup of interplanetary main ui">
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
                        <h2 class="a-heading--large u-pad-bottom">Design</h2>
                        <p>The project's toughest aspect was creating a design that aligned with the bride's preferences while being feasible for me to develop from start to finish. Balancing practical expectations, ambition, and delivering a website that satisfied the bride was undoubtedly the biggest challenge.</p>
                    </div>
                </section>
                <!-- Milestone Two -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">GSAP Scroll Trigger</h2>
                        <p>The second challenge was my lack of prior experience with GSAP scroll trigger. GSAP is a powerful animation library that allows developers to create complex animations with ease. However, I had not previously used GSAP scroll trigger in any of my projects. This meant that I had to learn how to use it from scratch. Thankfully, GSAP's documentation is well-written and easy to understand. With a little bit of effort, I was able to incorporate the animation into the website without any major issues.</p>
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