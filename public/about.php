<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | About Me";
require("../src/partials/shared/base/head.php");
?>
<body data-barba="wrapper">
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main data-barba="container" data-barba-namespace="about">
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content">
                    <h1 class="u-text-center"><span class="a-heading--highlight">My friends call me bald but <br> most</span> Call me Austin</h1>
                </div>
            </section>
            <section class="s-section">
                <div class="o-about__content">
                    <ul class="o-about-hero__link-list">
                        <li><a href="" class="a-button">Email</a></li>
                        <li><a href="" class="a-button">LinkedIn</a></li>
                        <li><a href="" class="a-button">GitHub</a></li>
                    </ul>
                    <div class="o-about-hero__gallery">
                        <img class="o-about-hero__image" src="../src/assets/images/about-section__image-01.jpg" alt="">
                        <img class="o-about-hero__image--primary" src="../src/assets/images/about-section__image-00.jpg" alt="">
                        <img class="o-about-hero__image" src="../src/assets/images/about-section__image-02.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align o-about-bio">
                    <h2 class="a-heading o-about-bio__copy">I'm a Front-End Developer with an insatiable craving to "figure it all out"</h2>
                    <p class="a-heading o-about-bio__copy">As a developer, I am constantly amazed by the power coding provides to turn ideas into reality. With it, I love to create immersive user experiences using modern languages and frameworks.</p>
                    <p class="a-heading o-about-bio__copy">Weirdly obsessed documentation, naming conventions, folder structure, and organization.</p>
                    <p class="a-heading o-about-bio__copy">When I'm not writing code, I enjoy exploring the outdoors, bouldering, and spending time with my family. I am excited to continue my journey as a developer and to contribute to projects that make a difference in people's lives.</p>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2  class="a-heading--large">
                        A list of <br>
                        things I want <br>
                        to Do before <br>
                        ai becomes <br>
                        our overlord
                    </h2>
                </div>
            </section>
        </div>
    </main>
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
</body>
</html>