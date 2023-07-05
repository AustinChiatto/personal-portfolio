<!DOCTYPE html>
<?php
require "src/app/init.php";
// data for current page - used in head and body contents
require get_path("data/all-projects.php");
// head
require "src/partials/shared/base/head.php";
// project data - used in content-grid
require get_path("data/projects.php");
?>
<body>
    <!-- Header -->
    <?php require "src/partials/shared/base/header/header.php"; ?>
    <main id="top">
        <section class="s-section">
            <div class="s-section__content m-intro-container">
                <div class="m-intro-container--projects-page">
                    <h1 class="a-text--xl">Just a few projects that <br> I thought were fun to build</h1>
                </div>
            </div>
            <?php require "src/partials/shared/molecule/content-grid.php"; ?>
            <div class="s-section__content m-content-grid__spacer"></div>
        </section>
    </main>
    <!-- Footer -->
    <?php require "src/partials/shared/base/footer/footer.php"; ?>
</body>
</html>