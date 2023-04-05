<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Grid Tool for new CSS grid";
$meta_desc = "Create CSS grids with ease using our development project! Perfect for new developers, our tool provides a user-friendly interface to generate customizable CSS grids quickly and efficiently. Start building your responsive layouts today.";
$og_url = "https://austinchiatto.com/public/grid-tool.php";
$og_image = "../src/assets/images/grid-tool-mockup__desktop-01.png";
require("../src/partials/shared/base/head.php");
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <!-- <div class="s-section-wrapper">
            <section class="s-section--full-height js-home-hero js-hero-pin">
                <h1 class="js-home-hero-text">Witness Humanity Touch The Stars</h1>
            </section>
        </div> -->
        <!-- Project Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">Grid Tool</h2>
                    <p>A groovy tool to help new developers create responsive CSS grid layouts</p>
                    <!-- Project Stats -->
                    <ul class="m-project-stats">
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Status</h3>
                            <p class="m-project-stats__stat">Live</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Role</h3>
                            <p class="m-project-stats__stat">Designer & Developer</p>
                        </li>
                        <li class="m-project-stats__item">
                            <h3 class="m-project-stats__label">Technology</h3>
                            <p class="m-project-stats__stat">JS & SCSS</p>
                        </li>
                    </ul>
                    <!-- Project External Links -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="https://grid-tool.austinchiatto.com/" target="_blank" title="take a look at the live site">👀 Live site</a></li>
                        <li><a class="a-button" href="https://github.com/AustinChiatto/grid-tool" target="_blank" title="view the code behind the project">📂 Source Code</a></li>
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
                        <img loading="lazy" src="../src/assets/images/grid-tool-mockup__tablet-02.png" alt="tablet mockup of grid tool main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/grid-tool-mockup__desktop-01.png" alt="desktop mockup of grid tool main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/grid-tool-mockup__mobile-01.png" alt="mobile mockup of grid tool main ui">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img loading="lazy" src="../src/assets/images/grid-tool-mockup__tablet-01.png" alt="tablet mockup of grid tool main ui">
                    </picture>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper">
            <!-- Project Responsive Animation -->
            <section class="s-section--full-height js-project-anim">
                <div class="o-project-anim">
                    <h2 class="a-heading-wrap">Developed with modern responsive design techniques to ensure a seamless and intuitive experience on any device.</h2>
                    <div class="o-project-anim__container js-project-anim__container">
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                        <div class="o-project-anim__item js-project-anim__item"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="s-section-wrapper--theme-dark">
            <!-- Project Milestones -->
            <div class="o-milestones js-project-milestones">
                <!-- Milestone One -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align">
                        <h2 class="a-heading--large u-pad-bottom">Visualization</h2>
                        <p>By seeing a visual representation of the grid, new developers can better visualize how the grid lines and tracks are created and how they can be manipulated to create different layouts. This can help them avoid common mistakes and make it easier to troubleshoot issues when working with CSS grid. Additionally, seeing a visual representation of the grid can make it easier for new developers to experiment with different grid layouts and gain a deeper understanding of how CSS grid works.</p>
                    </div>
                </section>
                <!-- Milestone Two -->
                <section class="o-milestones__section">
                    <div class="s-section__content--left-align"> 
                        <h2 class="a-heading--large u-pad-bottom">Copy Code</h2>
                        <p>Being able to see the output code of the grid being created can help developers new to CSS grid get a sense of the relationship between the columns, row, and gaps. Being able to copy the code will also save them time by quickly trying out different solutions and layouts.</p>
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