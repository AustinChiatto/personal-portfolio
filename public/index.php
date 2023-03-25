<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Front End Developer Portfolio";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>

<body>
    <header></header>
    <main>
        <div class="s-section-wrapper">
            <section class="o-home-hero">
                <!-- hero -->
                <h1>Building Things for Humans on The Web</h1>
            </section>
            <section class="s-section">
                <!-- mission -->
                <div class="o-mission">
                    <h2 class="a-h2--large">Inspired by <br>
                        Compassion <br>
                        Dedicated to <br>
                        Imagination
                    </h2>
                </div>
                <div class="m-section-cta">
                    <h3>I'm a developer focused on creating purposeful interaction and intuitive user experience.</h3>
                    <a class="a-button--invert m-section-cta__button" href="<?php get_public_url("about.php"); ?>">👉 More about me</a>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section">
                <!-- featured projects -->
                <div class="m-section-intro">
                    <h2>Explore my latest <span class="a-h2--highlight">imposter syndrome inducing</span> projects</h2>
                </div>
                <ul class="m-project-list">
                    <?php
                    foreach ($projects as $project) : 
                        if (h($project->featured) == true) : ?>
                        <li class="m-project-list__item">
                            <?php include("../src/partials/shared/molecule/project-card.php"); ?>
                        </li>
                    <?php
                        endif;
                    endforeach; ?>
                </ul>
                <div class="m-section-cta">
                    <h3>See more of that I like to do</h3>
                    <a class="a-button m-section-cta__button" href="<?php get_public_url("about.php"); ?>">🎉 View All Projects</a>
                </div>
            </section>
        </div>
    </main>
    <footer class="o-footer">
        <h2 class="a-h2--large">Reach out or see what else I'm up to on the internet</h2>
        <ul class="o-footer__link-list">
            <li class="o-footer__link--email">
                <a href="#">hello@austinchiatto.com</a>
            </li>
            <li class="o-footer__link">
                <a href="#">GitHub</a>
            </li>
            <li class="o-footer__link">
                <a href="#">LinkedIn</a>
            </li>
            <li class="o-footer__link">
                <a href="#">Codepen</a>
            </li>
            <li class="o-footer__link">
                <a href="#">Spotify</a>
            </li>
        </ul>
        <p class="o-footer__copyright">&copy; 2023</p>
    </footer>
</body>
</html>