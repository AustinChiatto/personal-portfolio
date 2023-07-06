<!DOCTYPE html>
    <?php
    require "src/app/init.php";
    // data for current page - used in head and body contents
    require get_path("data/index.php");
    // head
    require "src/partials/shared/base/head.php";
    // project data - used in content-grid
    require get_path("data/projects.php");
    ?>

    <body>
        <!-- Header -->
        <?php require "src/partials/shared/base/header/header.php"; ?>
        <!-- Main -->
        <main id="top">
            <!-- hero section -->
            <?php require "src/partials/home/home-hero.php"; ?>
            <!-- mission statement -->
            <?php require "src/partials/home/mission.php"; ?>
            <!-- Project List (Featured) - data pulled from data/projects.php -->
            <section class="s-section">
                <div class="s-section__content m-intro-container">
                    <div class="m-project-list__headings js-projectListIntro">
                        <h2 class="a-text--center a-text--pad-bottom js-projectListHeading">Featured <span class="a-text--highlight">imposter syndrome inducing</span> projects</h2>
                        <a class="a-button--new js-projectListIntroBtn u-visibly-hidden" href="#">View All</a>
                    </div>
                </div>
                <?php require "src/partials/home/featured_projects.php"; ?>
                <div class="s-section__content m-content-grid__spacer"></div>
            </section>
        </main>
        <!-- Footer -->
        <?php require "src/partials/shared/base/footer/footer.php"; ?>
        <!-- home animations -->
        <script src="src/app/js/homeAnimations.js"></script>
        <!-- Project List animation -->
        <script src="src/app/js/projectListAnimation.js"></script>
    </body>
</html>