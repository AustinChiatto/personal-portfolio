<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | More about me";
$meta_desc = "I'm a developer, fascinated and inspired by the ability to bring ideas to life with code.";
require("../src/partials/shared/base/head.php");
?>
<body data-barba="wrapper">
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main data-barba="container" data-barba-namespace="about">
        <!-- About Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content">
                    <h1 class="u-text-center"><span class="a-heading--highlight">My friends call me bald but <br> most</span> call me Austin</h1>
                </div>
            </section>
            <section class="s-section">
                <!-- About External Links -->
                <div class="o-about__content">
                    <ul class="o-about-hero__link-list">
                        <li><a class="a-button" href="mailto:chiattoaustin@gmail.com">Email</a></li>
                        <li><a class="a-button" href="https://www.linkedin.com/in/austin-chiatto/" target="_blank">LinkedIn</a></li>
                        <li><a class="a-button" href="https://github.com/AustinChiatto" target="_blank">GitHub</a></li>
                    </ul>
                    <!-- Personal Images -->
                    <div class="o-about-hero__gallery">
                        <img class="o-about-hero__image" src="../src/assets/images/about-section__image-01.jpg" alt="">
                        <img class="o-about-hero__image--primary" src="../src/assets/images/about-section__image-00.jpg" alt="">
                        <img class="o-about-hero__image" src="../src/assets/images/about-section__image-02.jpg" alt="">
                    </div>
                </div>
            </section>
            <!-- Bio Section -->
            <section class="s-section">
                <div class="s-section__content--left-align o-about-bio">
                    <h2 class="a-heading o-about-bio__copy">I'm a Front-End Developer with an insatiable craving to "figure it all out".</h2>
                    <p class="a-heading o-about-bio__copy">As a developer, I am constantly amazed by the power coding provides to turn ideas into reality. With it, I love to create immersive user experiences using modern languages and frameworks.</p>
                    <p class="a-heading o-about-bio__copy">I specialize in creating visually appealing and responsive websites. I have strong foundation in vanilla front-end languages, as well as some experience with backend languages such as PHP and SQL. I am also familiar with version control systems such as Git and have experience collaborating with other developers on projects.</p>
                    <p class="a-heading o-about-bio__copy">But most of all I'm trying to atone for all the broken computers I confidently thought I could rebuild in my childhood.</p>
                    <p class="a-heading o-about-bio__copy">When I'm not writing code, I enjoy exploring the outdoors, bouldering, and spending time with my family. I am excited to continue my journey as a developer and to contribute to projects that make a difference in people's lives.</p>
                </div>
            </section>
        </div>
        <!-- Goals Section -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2  class="a-heading--large">some things I'd like to do before ai takes over the world</h2>
                    <ul class="o-goal-list">
                        <li class="o-goal-list__item">Be employed as a Front End Developer</li>
                        <li class="o-goal-list__item">Make something that helps people</li>
                        <li class="o-goal-list__item--complete">Travel to Berlin</li>
                        <li class="o-goal-list__item">Witness humans land on another planet</li>
                        <li class="o-goal-list__item">Travel to Iceland</li>
                        <li class="o-goal-list__item">Watch a rocket launch in person</li>
                        <li class="o-goal-list__item">See the Great Pyramids in Egypt</li>
                        <li class="o-goal-list__item">Contribute to the development of an Apple product</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- SplitType.js -->
    <script src="https://unpkg.com/split-type"></script>
    <!-- animation.js file -->
    <script src="../src/app/js/aboutAnimation.js"></script>
</body>
</html>