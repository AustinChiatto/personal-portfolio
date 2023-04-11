<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Asteroid Run Game";
$meta_desc = "An exciting, reflex testing, modern take on a retro game. How long can you last dodging this asteroid barrage?";
$og_url = "https://austinchiatto.com/public/asteroid-run.php";
$og_image = "../src/assets/images/asteroid-run-mockup_tablet-01.png";
require("../src/partials/shared/base/head.php");
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <!-- Project Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">Asteroid Run</h2>
                    <p>How long can you last, dodging this asteroid barrage?</p>
                    <!-- Project Stats -->
                    <ul class="m-project-stats">
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Status</h3>
                            <p class="m-project-stats__stat">WIP</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Role</h3>
                            <p class="m-project-stats__stat">Designer & Developer</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Technology</h3>
                            <p class="m-project-stats__stat">Vanilla JS</p>
                        </li>
                    </ul>
                    <!-- Project External Links -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="#" target="_blank" title="take a look at the live site">👀 Live site</a></li>
                        <li><a class="a-button" href="#" target="_blank" title="view the code behind the project">📂 Source Code</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
            <!-- Project Mockup Gallery -->
            <section class="s-section">
                <div class="o-project-gallery">
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-01.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-06.png" alt="mobile mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-02.png" alt="mobile mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-04.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-05.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/asteroid-run-mockup_tablet-03.png" alt="tablet mockup of interplanetary main ui">
                    </picture>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper--theme-dark">
            <!-- Project Milestones -->
            <div class="o-milestones js-project-milestones">
                <!-- Milestone One -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Cursor Navigation</h2>
                        <p>The first phase of the development of this game was spend writing the code to track the cursor, and move the character inline with the cursors position. The challenge with this part of the development was tracking the edges of the play area and the only moving the character when the cursor is inbounds.</p>
                    </div>
                </section>
                <!-- Milestone Two -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Asteroid Spawning</h2>
                        <p>The second phase of development was used to write the code responsible for spawning and moving the asteroids within the game. I found this quite difficult as they are being appended to the DOM and each have to move and spawn at different intervals. The solution was to use a forEach loop and Math.Random to set individual values for each object.</p>
                    </div>
                </section>
                <!-- Milestone Three -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Collision</h2>
                        <p>This was the most challenging part of the project as I had to calculate if the player element occupies the same space as an asteroid. I though this was going to be more straight forward but the solution to the collision was a couple very complex condition statements that checked if the edges of the player we inside the edges of the asteroid.</p>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>

</html>