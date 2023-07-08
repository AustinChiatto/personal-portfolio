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
            <!-- card panel -->
            <div class="m-content-panel js-contentPanel">
                <div class="m-content-panel__container">
                    <aside data-lenis-prevent class="m-content-panel__modal js-panelModal">
                        <div class="m-content-panel__header">
                            <a class="m-content-panel__close-icon js-panelClose">
                                <img src="src/assets/icons/Close.svg" width="24" height="24" alt="close icon">
                            </a>
                        </div>
                        <article class="m-content-panel__section">
                        <h3 class="m-content-panel__copy-heading">Player Projectiles</h3>
                <p class="a-text--copy">Players get to channel their inner space blasting enemy ships with a hail of projectiles. But let me tell you, managing all those projectiles was no walk in the space park.</p>
                <pre><code class="a-hljs-bg--panel">document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});</code></pre>
                <p class="a-text--copy">As a developer who was still getting the hang of <span class="a-text--white">HTML canvas</span> and <span class="a-text--white">JavaScript objects</span>, I found the whole process of creating, animating, and detecting collisions for the projectiles to be a bit of a black hole.</p>
                <pre><code class="a-hljs-bg--panel">const projHero = document.querySelector(".js-projHero");</code></pre>
                        </article>
                    </aside>
                </div>
            </div>
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
        <script src="src/app/js/contentPanel.js"></script>
    </body>
</html>