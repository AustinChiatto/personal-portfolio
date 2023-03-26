<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | All Projects";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>
<body>
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section">
                <!-- all projects -->
                <div class="m-section-intro--vh100">
                    <h2>Discover the work <span class="a-h2--highlight">and the caffeine addiction</span> behind the projects I'm most proud of</h2>
                </div>
                <ul class="m-project-list">
                    <?php
                    foreach ($projects as $project) : ?>
                        <li class="m-project-list__item">
                            <?php include("../src/partials/shared/molecule/project-card.php"); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
</body>
</html>