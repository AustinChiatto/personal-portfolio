<?php

// check which page i am on
// do a thing

if ($page_title == "index") {
    // change data
} ?>
<section class="s-section">
    <div class="s-section__content m-intro-container">
        <div class="m-project-list__headings js-projectListIntro">
            <h2 class="a-text--center a-text--pad-bottom js-projectListHeading">Featured <span class="a-text--highlight">imposter syndrome inducing</span> projects</h2>
            <a class="a-button--new js-projectListIntroBtn u-visibly-hidden" href="#">View All</a>
        </div>
    </div>
    <div class="s-section__content">
        <div class="m-content-grid--project-list js-contentGrid">
            <div class="m-content-grid__column">
                <a class="a-card js-projectListTrigger" href="grid-tool-two.php">
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
    <div class="s-section__content m-content-grid__spacer"></div>
</section>