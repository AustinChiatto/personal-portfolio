<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | About Me";
require("../src/partials/shared/base/head.php");
?>
<body>
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <div class="s-section-wrapper--theme-dark">
            <section class="o-about-hero">
                <!-- hero -->
                <h1><span class="a-h2--highlight">My friends call me bald but <br> most</span> Call me Austin</h1>
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
            </section>
            <section class="s-section">
                <div class="o-about-bio">
                    <h2>I'm a Front-End Developer <span class="a-h2--highlight">with an insatiable craving to "figure it all out"</span></h2>
                    <p>As a developer, I am constantly amazed by the power coding provides to turn ideas into reality. With it, I love to create immersive user experiences using modern languages and frameworks.</p>
                    <p>I have a weird obsession with documentation and naming conventions because I believe it's the most important piece in ensuring a code base is easy to understand, maintain, and grow.</p>
                    <p>When I'm not writing code, I enjoy exploring the outdoors, bouldering, and spending time with my family. I am excited to continue my journey as a developer and to contribute to projects that make a difference in people's lives.</p>
                </div>
            </section>
        </div>
    </main>
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
</body>
</html>