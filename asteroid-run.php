<?php require "src/app/init.php"; ?>

<!DOCTYPE html>
    <?php
    // data for current page - used in head and body contents
    require get_path("data/asteroid-run.php");
    // head
    require "src/partials/shared/base/head.php";
    // project data
    require get_path("data/projects.php");
    ?>
    <body>
        <!-- Header -->
        <?php require "src/partials/shared/base/header/header.php"; ?>
        <main>
            <!-- hero section -->
            <?php include "src/partials/project-pages/project-hero.php"; ?>
            <!-- external-cta section -->
            <?php include "src/partials/project-pages/external-cta.php"; ?>
            <!-- info-grid section -->
            <?php include "src/partials/project-pages/project-info-grid.php"; ?>
            <!-- challenges section -->
            <?php include "src/partials/project-pages/project-challenges.php"; ?>
            <!-- callout -->
            <?php include "src/partials/project-pages/callout.php"; ?>
            <!-- project selection -->
            <?php include "src/partials/project-pages/project-selection.php"; ?>
        </main>
        <!-- Footer -->
        <?php require "src/partials/shared/base/footer/footer.php"; ?>
        <!-- Scripts -->
        <script src="src/app/js/projectPageAnimation.js"></script>
    </body>
</html>