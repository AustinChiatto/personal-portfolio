<!DOCTYPE html>
<?php
require "src/app/init.php";
// data for current page - used in head and body contents
require get_path("data/project-detail-template.php");
require "src/partials/shared/base/head.php";
require get_path("data/projects.php");
?>

<body>
    <!-- Header -->
    <?php require "src/partials/shared/base/header/header.php"; ?>
    <main>
        <!-- hero section -->
        <section class="s-section">
            <div class="s-section__content s-section__content--full o-project-hero js-projHero">
                <!-- hero headings -->
                <div class="m-intro-container m-intro-container--vh100 js-projHeadings">
                    <h1>PROJECT TITLE</h1>
                    <h2 class="a-text--sm">subtitle</h2>
                </div>
                <!-- hero animated mockup -->
                <div class="o-project-hero__img-container js-projHeroImgCont">
                    <img class="o-project-hero__img js-projHeroImg" src="src/assets/images/asteroid-run-hero.png" alt="">
                </div>
            </div>
        </section>
        <!-- project-cta section -->
        <section class="s-section js-externalCTA">
            <div class="s-section__content">
                <div class="m-intro-container">
                    <h2 class="a-text--center">title</h2>
                    <!-- <h2 class="a-text--center">Keep up <span class="a-text--highlight">with the <br> Modern-Day</span> Space Race</h2> -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="#" title="">Live Site</a></li>
                        <li><a class="a-button" href="#" title="">Source Code</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- info-grid section -->
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-top">
                    <!-- info-grid column 01 -->
                    <div class="m-content-grid__column">
                        <!-- team / solo card -->
                        <div class="a-card--tall js-contributionCard">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">My Contributions</h4>
                                <h3>Solo Project</h3>
                            </div>
                            <div class="o-project-personal">
                                <div class="o-project-personal__design">Design</div>
                                <div class="o-project-personal__front-end">Front End</div>
                                <div class="o-project-personal__back-end">Back End</div>
                            </div>
                        </div>
                        <!-- last commit card -->
                        <div class="a-card js-gitCard">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Last Commit</h4>
                                <h3>June 3, 2023</h3>
                            </div>
                            <img src="src/assets/images/asteroid-run_card-mockup-laptop.png" alt="">
                        </div>
                    </div>
                    <div class="m-content-grid__column">
                        <!-- live site card -->
                        <div class="a-card js-liveCard">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Explore The Project</h4>
                                <h3>Live Website</h3>
                            </div>
                            <img src="src/assets/images/asteroid-run_card-mockup-mobile.png" alt="">
                        </div>
                        <!-- development details card -->
                        <div class="a-card--tall js-devCard">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">Project Purpose</h4>
                                <h3>Intentions</h3>
                            </div>
                        </div>
                    </div>
                    <div class="a-card--wide js-techCard">
                        <h3 class="a-card__headings--wide a-text--base">Made with love <span class="a-text--highlight">and {brackets}</span></h3>
                        <ul class="o-info-grid__tech">
                            <li class="o-info-grid__tech-icon">
                                <svg viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0L3.77957 43.2011L20.7444 48L37.7524 43.1946L41.5385 0H0ZM33.3173 14.1429H13.4135L13.8462 19.6071H32.8846L31.4232 35.8275L20.7692 38.8371L10.0947 35.8371L9.3613 27.5357H14.5817L14.9517 31.7454L20.7692 33.3289L26.5478 31.7304L27.1514 24.8571H9.08654L7.72464 8.82964H33.7716L33.3173 14.1429Z" fill="#6E6E73"/>
                                </svg>
                            </li>
                            <li class="o-info-grid__tech-icon">
                                <svg width="42" height="48" viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0L3.75 43.2021L20.5468 48L37.3929 43.1946L41.1429 0H0ZM31.1443 35.8821L20.5789 38.8929L10.0296 35.8671L9.30643 27.5357H14.4771L14.8446 31.7743L20.5864 33.3986L20.6004 33.4286L26.3293 31.8375L26.9336 24.9643H14.8929L14.4643 19.6071H27.3911L27.8571 14.1429H8.14286L7.71429 8.89286H33.4907L31.1443 35.8821Z" fill="#6E6E73"/>
                                </svg>
                            </li>
                            <li class="o-info-grid__tech-icon">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V48H48V0H0ZM25.7143 37.2857C25.7143 41.9582 22.9543 44.2361 18.9589 44.2361C15.3504 44.2361 13.2557 42.3675 12.1929 40.1121L15.8657 37.8889C16.5739 39.1457 17.1118 40.2086 18.6579 40.2086C19.9436 40.2086 21 39.6289 21 37.3736V22.2857H25.7143V37.2857ZM36.3589 44.1289C32.1707 44.1289 29.4643 42.2389 28.1432 39.6289L31.8214 37.5C32.7857 39.0793 34.0446 40.1314 36.2679 40.1314C38.1364 40.1314 39.2218 39.3043 39.2218 38.0154C39.2218 36.4693 38.1043 35.9218 36.0418 35.0154L34.9146 34.5311C31.6596 33.1468 29.5018 31.4068 29.5018 27.7329C29.5018 24.3504 32.0786 21.8796 36.1061 21.8796C38.9743 21.8796 41.0346 22.7711 42.5186 25.3811L39 27.6429C38.2264 26.2575 37.3929 25.7143 36.1007 25.7143C34.7796 25.7143 33.9418 26.5521 33.9418 27.6429C33.9418 28.9961 34.7796 29.5436 36.7125 30.3814L37.8396 30.8646C41.6743 32.5082 43.8332 34.1861 43.8332 37.9532C43.8343 42.0139 40.6446 44.1289 36.3589 44.1289Z" fill="#6E6E73"/>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
            <!-- challenges section -->
            <section class="s-section">
                <div class="s-section__content">
                    <div class="m-intro-container m-intro-container--vh100 js-chalHeaderCont">
                        <h2 class="a-text--center js-chalHeader">Challenges Overcome <span class="a-text--highlight">in the <br></span> Development <span class="a-text--highlight">of [PROJECT NAME]</span></h2>
                    </div>
                </div>
            </section>
            <div class="o-challenge">
                <section class="s-section js-chalImgCont">
                    <div class="s-section__content o-challenge__img-cont js-chalImg">
                        <img class="o-challenge__img" src="src/assets/images/asteroid-run_challenge-mockup.png" alt="">
                    </div>
                </section>
                <section class="s-section js-chalCopyCont">
                    <div class="s-section__content--wide o-challenge__grid">
                        <div class="o-challenge__copy">
                            <h3 class="o-challenge__copy-heading">Challenge</h3>
                            <p class="a-text--highlight"><span class="a-text--white">copy</p>
                        </div>
                        <div class="o-challenge__copy">
                            <h3 class="o-challenge__copy-heading">Solution</h3>
                            <p class="a-text--highlight"><span class="a-text--white">copy</p>
                        </div>
                    </div>
                </section>
            </div>
        <section class="s-section">
            <div class="s-section__content">
                <a class="o-doc-callout" href="#">
                    <h2 class="a-text--sm o-doc-callout__label">GitHub Readme</h2>
                    <p class="a-text--highlight o-doc-callout__copy">See more about how and why I built [PROJECT RUN]</p>
                </a>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content m-intro-container--md">
                <h2 class="a-text--center">Enjoyed [PROJECT RUN]? <span class="a-text--highlight">Take a <br> look at</span> another project</h2>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-bottom">
                    <div class="m-content-grid__column">
                        <a class="a-card" href="#">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">React Application</h4>
                                <h3>CSS Grid Tool</h3>
                            </div>
                            <img src="src/assets/images/grid-tool_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                    <div class="m-content-grid__column">
                        <a class="a-card" href="asteroid-run-two.php">
                            <div class="a-card__headings">
                                <h4 class="a-text--base a-text--highlight">JavaScript Game</h4>
                                <h3>Asteroid Run</h3>
                            </div>
                            <img src="src/assets/images/asteroid-run_card-mockup-laptop.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require "src/partials/shared/base/footer/footer.php"; ?>
    <!-- Scripts -->
    <script src="src/app/js/projectPageAnimation.js"></script>
    <script src="src/app/js/projectContentCards.js"></script>
</body>
</html>