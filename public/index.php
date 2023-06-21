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
        <!-- <section class="s-section">
            <div class="s-section__content m-intro-container--vh100 js-missionContainer">
                <div class="o-mission-list js-missionList">
                    <h3 class="a-text--sm a-text--highlight">Focused On</h3>
                   <div class="o-mission-list__items js-missionItems">
                        <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Curiosity</h3>
                        <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Compassion</h3>
                        <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Imagination</h3>
                        <h3 class="a-text--xxl a-text--upper o-mission-list__item js-missionItem">Humans</h3>
                   </div>
                </div>
            </div>
        </section> -->
        <!-- Mission Statement -->
        <section class="s-section--theme-light">
            <div class="s-section__content--wide m-intro-container--block">
                <h2 class="a-text--xxl a-text--upper">Inspired by <br>
                    Compassion <br>
                    Dedicated to <br>
                    Imagination
                </h2>
            </div>
        </section>
        <section class="s-section--theme-light">
            <div class="s-section__content--wide o-mission__cta">
                <h3>I'm a developer focused on creating purposeful interaction and intuitive user experience.</h3>
                <a class="o-mission__cta-btn a-button--invert" href="about.php">👉 More about me</a>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content m-intro-container--projects-page">
                <h2 class="a-text--center">My latest <span class="a-text--highlight">imposter <br> syndrome inducing</span> projects</h2>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-bottom">
                    <div class="m-content-grid__column">
                        <a class="a-card" href="../public/grid-tool-two.php">
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
        <!-- <section class="s-section">
            <div class="s-section__content--wide">
                <a class="o-doc-callout" href="#">
                    <h2 class="a-text--sm o-doc-callout__label">See More</h2>
                    <p class="a-text--highlight o-doc-callout__copy">Take a look at the rest of my work.</p>
                </a>
            </div>
        </section> -->
        <!-- Featured Project List -->
        <!-- <div class="s-section-wrapper--theme-dark">
            <section class="s-section--full-height js-project-headline">
                <div class="js-pin-headline">
                    <h2 class="js-project-heading">My latest <span class="a-text--highlight">imposter syndrome inducing</span> projects</h2>
                    <a class="a-button u-visually-hidden" href="all-projects.php">🎉 View All Projects</a>
                </div>
            </section>
            <section class="s-section">
                <ul class="o-projects-list js-projects-list">
                    <?php
                    foreach ($projects as $project) : 
                        if (h($project->featured) == true) : ?>
                        <li class="o-projects-list__item js-project-list-item">
                            <?php include("../src/partials/shared/molecule/project-card.php"); ?>
                        </li>
                    <?php
                        endif;
                    endforeach; ?>
                </ul>
            </section>
        </div> -->
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/homeAnimations.js"></script>
    <script src="../src/app/js/cursorInteractions.js"></script>
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>