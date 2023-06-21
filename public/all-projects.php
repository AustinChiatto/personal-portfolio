<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | All Projects";
$meta_desc = "Explore my portfolio of web development projects! From front-end to back-end development, my portfolio showcases a range of web applications, websites, and tools that highlight my skills and expertise. Browse through my projects and see how I can help bring your ideas to life with clean, efficient code.";
$og_url = "https://austinchiatto.com/public/all-projects.php";
$og_image = "../src/assets/images/interplanetary-mockup__laptop-01.png";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>
<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-intro-container--projects-page">
                    <h1 class="a-text--xl">Just a few projects that <br> I thought were fun to build</h1>
                </div>
                <div class="m-content-grid--pad-bottom">
                    <!-- Column 01 -->
                    <div class="m-content-grid__column">
                        <article class="a-card--tall js-contributionCard">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Details</h4>
                                <h3>Coming Soon</h3>
                            </div>
                        </article>
                        <article class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">A JavaScript Game</h4>
                                <h3>Asteroid Run</h3>
                            </div>
                        </article>
                        <article class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Details</h4>
                                <h3>Project Name</h3>
                            </div>
                        </article>
                    </div>
                    <!-- Column 02 -->
                    <div class="o-info-grid__column">
                        <article class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">React Application</h4>
                                <h3>Grid Tool</h3>
                            </div>
                        </article>
                        <article class="a-card--tall">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">React Application</h4>
                                <h3>Jade</h3>
                            </div>
                        </article>
                        <article class="a-card">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Details</h4>
                                <h3>Project Name</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/cursorInteractions.js"></script>
    <script src="../src/app/js/projectListAnimation.js"></script>
</body>
</html>