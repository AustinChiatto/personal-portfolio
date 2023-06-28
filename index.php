<!DOCTYPE html>
<?php
require("src/app/init.php");
$title_tag = "Austin Chiatto | Front End Developer";
$meta_desc = "I am a Front End Developer passionate about bringing ideas to life within a browser. I specialize in creating intuitive, responsive websites using modern languages and frameworks.";
$og_url = "https://austinchiatto.com/public/index.php";
$og_image = "src/assets/images/about-section__image-00.jpg";
require("src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>

<body>
    <!-- Header -->
    <?php require("src/partials/shared/base/header/header.php"); ?>
    <main id="top">
        <section class="s-section--theme-light o-hero js-heroContainer">
            <div class="s-section__content--full o-hero__intro js-hero">
                <h2 class="a-text--lg a-text--left js-heroBlur">Austin Chiatto</h2>
                <h1 class="a-text--hero a-text--upper a-text--center js-heroHeading o-hero__heading-main"><span class="o-hero__heading-main--stretch">Front-End</span> <br> Developer</h1>
                <div class="o-hero__sub js-heroBlur">
                    <ul class="o-hero__sub-container">
                        <li class="a-text--sm a-text--right">Aspiring Astronaut</li>
                        <li class="a-text--sm a-text--right">Infinite Scroller</li>
                        <li class="a-text--sm a-text--right">65% Keyboard User</li>
                        <li class="a-text--sm a-text--right">Knowledge Addict</li>
                    </ul>
                </div>
            </div>
            <div class="o-mission-list js-missionList">
                <h3 class="a-text--sm a-text--highlight">Focused On</h3>
                <div class="o-mission-list__items">
                    <ul class="o-mission-list__container js-missionItems">
                        <li class="a-text--xxl a-text--upper o-mission-list__item">Curiosity</li>
                        <li class="a-text--xxl a-text--upper o-mission-list__item">Compassion</li>
                        <li class="a-text--xxl a-text--upper o-mission-list__item">Imagination</li>
                        <li class="a-text--xxl a-text--upper o-mission-list__item">Humans</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Project List (Featured) -->
        <section class="s-section">
            <div class="s-section__content m-intro-container js-projectListIntro">
                <h2 class="a-text--center a-text--pad-bottom o-project-list__heading js-projectListHeading">Featured <span class="a-text--highlight">imposter <br> syndrome inducing</span> projects</h2>
                <a class="a-button--new js-projectListIntroBtn u-visibly-hidden" href="#">View All</a>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--project-list js-contentGrid">
                    <div class="m-content-grid__column">
                        <a class="a-card js-projectListTrigger" href="grid-tool-two.php">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">React Application</h4>
                                <h3>CSS Grid Tool</h3>
                            </div>
                            <img src="src/assets/images/grid-tool_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                    <div class="m-content-grid__column">
                        <a class="a-card" href="asteroid-run-two.php">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">JavaScript Game</h4>
                                <h3>Asteroid Run</h3>
                            </div>
                            <img src="src/assets/images/asteroid-run_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="s-section__content m-content-grid__spacer"></div>
        </section>
    </main>
    <!-- Footer -->
    <?php require("src/partials/shared/base/footer/footer.php"); ?>
    <!-- home animations -->
    <script src="src/app/js/homeAnimations.js"></script>
    <!-- Project List animation -->
    <script src="src/app/js/projectListAnimation.js"></script>
</body>

</html>