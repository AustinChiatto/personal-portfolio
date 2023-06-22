<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Front End Developer";
$meta_desc = "I am a Front End Developer passionate about bringing ideas to life within a browser. I specialize in creating intuitive, responsive websites using modern languages and frameworks.";
$og_url = "https://austinchiatto.com/public/index.php";
$og_image = "../src/assets/images/about-section__image-00.jpg";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <!-- Hero Section -->
        <section class="s-section js-home-hero">
            <div class="s-section__content--full o-home-hero">
                <div class="o-home-hero__wrapper">
                    <div class="o-home-hero__text">
                        <h1 class="a-text--xl js-home-hero__text-top">Building Things</h1>
                    </div>
                    <div class="o-home-hero__text">
                        <h2 class="a-text--xl js-home-hero__text-bottom">For Humans</h2>
                    </div>
                    <div class="o-home-hero__circle js-circle"></div>
                </div>
                <div class="o-home-hero__quick-content">
                    <p class="o-home-hero__label js-home-scroll-fade">Front End Developer</p>
                    <p class="o-home-hero__label js-home-scroll-hide">Scroll</p>
                </div>
            </div>
        </section>
        <!-- Mission Statement -->
        <section class="s-section js-missionContainer">
            <div class="s-section__content m-intro-container--vh100">
                <div class="o-mission-list js-missionList">
                    <h3 class="a-text--sm a-text--highlight">Focused On</h3>
                   <div class="o-mission-list__items">
                        <div class="o-mission-list__container js-missionItems">
                            <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Curiosity</h3>
                            <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Compassion</h3>
                            <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Imagination</h3>
                            <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Humans</h3>
                        </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Project List (Featured) -->
        <section class="s-section">
            <div class="s-section__content m-intro-container--project-list js-projectListIntro">
                <h2 class="a-text--center a-text--pad-bottom js-projectListHeading">My latest <span class="a-text--highlight">imposter <br> syndrome inducing</span> projects</h2>
                <a class="a-button--new js-projectListIntroBtn u-visibly-hidden" href="#">View All</a>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-bottom js-contentGrid">
                    <div class="m-content-grid__column">
                        <a class="a-card js-projectListTrigger" href="../public/grid-tool-two.php">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">React Application</h4>
                                <h3>CSS Grid Tool</h3>
                            </div>
                            <img src="../src/assets/images/grid-tool_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                    <div class="m-content-grid__column">
                        <a class="a-card" href="../public/asteroid-run-two.php">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">JavaScript Game</h4>
                                <h3>Asteroid Run</h3>
                            </div>
                            <img src="../src/assets/images/asteroid-run_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Hero animation -->
    <script src="../src/app/js/homeAnimations.js"></script>
    <!-- Mission Statement heading flip animation -->
    <script src="../src/app/js/missionContainer.js"></script>
    <!-- Project List animation -->
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>