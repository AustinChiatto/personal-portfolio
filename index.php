<!DOCTYPE html>
    <?php
    require("src/app/init.php");
    $title_tag = "Austin Chiatto | Front End Developer";
    $meta_desc = "I am a Front End Developer passionate about bringing ideas to life within a browser. I specialize in creating intuitive, responsive websites using modern languages and frameworks.";
    $og_url = "https://austinchiatto.com/public/index.php";
    $og_image = "src/assets/images/about-section__image-00.jpg";
    require("src/partials/shared/base/head.php");
    require(get_path("data/index.php"));
    require(get_path("data/projects.php"));
    ?>

    <body>
        <!-- Header -->
        <?php require("src/partials/shared/base/header/header.php"); ?>
        <main id="top">
            <!-- hero section -->
            <?php require('src/partials/home/home-hero.php') ?>
            <!-- mission statement -->
            <?php require('src/partials/home/mission.php') ?>
            <!-- Project List (Featured) -->
            <?php require('src/partials/shared/molecule/content-grid.php') ?>
        </main>
        <!-- Footer -->
        <?php require("src/partials/shared/base/footer/footer.php"); ?>
        <!-- home animations -->
        <script src="src/app/js/homeAnimations.js"></script>
        <!-- Project List animation -->
        <script src="src/app/js/projectListAnimation.js"></script>
    </body>
</html>