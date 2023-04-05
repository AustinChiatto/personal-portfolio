<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | All Projects";
$meta_desc = "Explore my portfolio of web development projects! From front-end to back-end development, my portfolio showcases a range of web applications, websites, and tools that highlight my skills and expertise. Browse through my projects and see how I can help bring your ideas to life with clean, efficient code.";
$og_url = "https://austinchiatto.com/public/all-projects.php";
$og_image = "../src/assets/interplanetary-mockup__laptop-01.png";
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
                    <h1 class="a-heading-wrap js-project-heading">Discover the work <span class="a-heading--highlight">and the caffeine addiction</span> behind the projects I'm most proud of</h1>
                </div>
            </section>
            <section class="s-section">
                <!-- Project card loop -->
                <!-- <div class="a-cursor-follower">View</div> -->
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
    <script src="../src/app/js/cursorInteractions.js"></script>
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>