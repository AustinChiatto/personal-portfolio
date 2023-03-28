<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | All Projects";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>
<body data-barba="wrapper">
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main data-barba="container" data-barba-namespace="all-projects">
        <div class="s-section-wrapper--theme-dark">
            <!-- Project Page Heading -->
            <section class="s-section--full-height js-project-headline">
                <div class="js-pin-headline">
                    <h1 class="a-heading-wrap">Discover the work <span class="a-heading--highlight">and the caffeine addiction</span> behind the projects I'm most proud of</h1>
                </div>
            </section>
            <section class="s-section">
                <!-- Project card loop -->
                <ul class="o-projects-list js-projects-list">
                    <?php
                    foreach ($projects as $project) : ?>
                        <li class="o-projects-list__item">
                            <?php include("../src/partials/shared/molecule/project-card.php"); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>