<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary Launch Tracker";
$meta_desc = "Stay up-to-date on the latest rocket launches with our comprehensive tracking tool! Our project provides real-time updates on upcoming launches, including launch dates, times, and locations. Never miss a rocket launch again - start tracking today.";
$og_url = "https://austinchiatto.com/public/interplanetary.php";
$og_image = "../src/assets/images/interplanetary-mockup__laptop-01.png";
require("../src/partials/shared/base/head.php");
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <div class="s-section-wrapper--theme-dark">
            <!-- hero title -->
            <section class="s-section--flex o-proj-hero js-projHero">
                <div class="u-text-center o-proj-hero__headings js-projHeadings">
                    <h1 class="a-heading--large">Interplanetary</h1>
                    <h2 class="a-heading--sub">Past & Future Launch Tracking</h2>
                </div>
                <div class="o-proj-hero__img-cont">
                    <img class="o-proj-hero__img js-projHeroImg" src="../src/assets/images/testDisplay.png" alt="">
                </div>
            </section>
            <!-- external CTA section -->
            <section class="s-section js-externalCTA">
                <div class="s-section__content o-external-cta">
                    <h2 class="u-text-center">Keep up <span class="u-font-highlight">with the <br> Modern-Day</span> Space Race</h2>
                    <ul class="o-about-hero__link-list">
                        <!-- DON'T FORGET TO ADD PROJECT NAME PHP STUFF &&&&& the about hero link list above -->
                        <li><a class="a-button" href="#" title="Explore the live version of PROJECT NAME">Live Website</a></li>
                        <li><a class="a-button" href="#" title="See the documentation & code behind PROJECT NAME">Source Code</a></li>
                    </ul>
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    <div class="o-project-grid">
                        <div class="o-project-grid__column">
                            <div class="o-project-grid__item--tall"><p class="p--small">team/role</p></div>
                            <div class="o-project-grid__item">github</div>
                        </div>
                        <div class="o-project-grid__column">
                            <div class="o-project-grid__item">live site</div>
                            <div class="o-project-grid__item--tall">dev time/info</div>
                        </div>
                        <div class="o-project-grid__item--wide">technology</div>
                    </div>
                </div>
            </section>
            <div class="o-challenge">
                <section class="s-section--full-height js-chalHeaderCont">
                    <div class="o-challenge__header js-chalHeader">
                        <h2 class="u-text-center">Challenges Overcome <span class="u-font-highlight">in the <br></span> Development <span class="u-font-highlight">of [project name]</span></h2>
                    </div>
                </section>
                <section class="s-section js-chalImgCont">
                    <div class="s-section__content--wide o-challenge__img js-chalImg">
                        <img src="../src/assets/images/proj-view__mobile-mockup.png" alt="">
                    </div>
                </section>
                <section class="s-section js-chalCopyCont">
                    <div class="s-section__content--wide o-challenge__grid">
                        <div class="o-challenge__copy">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy js-chalCopyTrig">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                    </div>
                </section>
            </div>
            <section class="s-section">
                <div class="s-section__content--wide">
                    <a class="o-doc-callout" href="#">
                        <h2 class="a-heading--sub o-doc-callout__label">GitHub Readme</h2>
                        <p class="p--small u-font-highlight o-doc-callout__copy">More on my methods and reasoning behind the development of [PROJECT NAME].</p>
                    </a>
                </div>
            </section>
            <section class="s-section--pad-large">
                <div class="s-section__content">
                    Project Selection
                </div>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>