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
        <div class="s-section-wrapper--theme-dark">
            <section class="o-home-hero js-home-hero">
                <div class="o-home-hero__wrapper">
                    <div class="o-home-hero__text">
                        <h1 class="js-home-hero__text-top">Building Things</h1>
                    </div>
                    <div class="o-home-hero__text">
                        <h2 class="js-home-hero__text-bottom">For Humans</h2>
                    </div>
                    <div class="o-home-hero__circe js-circle"></div>
                </div>
                <div class="o-home-hero__quick-content">
                    <p class="o-home-hero__label js-home-scroll-fade">Front End Developer</p>
                    <p class="o-home-hero__label js-home-scroll-hide">Scroll</p>
                </div>
            </section>
        </div>
        <!-- Mission Statement -->
        <div class="s-section-wrapper">
            <section class="s-section--pad-large js-o-mission">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large">Inspired by <br>
                        Compassion <br>
                        Dedicated to <br>
                        Imagination
                    </h2>
                </div>
                <!-- About CTA section -->
                <div class="s-section__content--left-align">
                    <h3 class="u-pad-bottom">I'm a developer focused on creating purposeful interaction and intuitive user experience.</h3>
                    <a class="a-button--invert" href="about.php">👉 More about me</a>
                </div>
            </section>
        </div>
        <!-- Featured Project List -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--full-height js-project-headline">
                <div class="js-pin-headline">
                    <h2 class="u-pad-bottom js-project-heading">My latest <span class="a-heading--highlight">imposter <br> syndrome inducing</span> projects</h2>
                    <a class="a-button u-visually-hidden" href="all-projects.php">🎉 View All Projects</a>
                </div>
            </section>
            <section class="s-section">
                <!-- Project card loop -->
                <!-- <div class="a-cursor-follower">View</div> -->
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
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/homeAnimations.js"></script>
    <script src="../src/app/js/cursorInteractions.js"></script>
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>