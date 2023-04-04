<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary";
require("../src/partials/shared/base/head.php");
?>

<body data-barba="wrapper">
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main data-barba="container" data-barba-namespace="project-page">
        <!-- <div class="s-section-wrapper">
            <section class="s-section--full-height js-home-hero js-hero-pin">
                <h1 class="js-home-hero-text">Witness Humanity Touch The Stars</h1>
            </section>
        </div> -->
        <!-- Project Hero -->
        <div class="s-section-wrapper--theme-dark">
            <section class="s-section--pad-large">
                <div class="s-section__content--left-align">
                    <h2 class="a-heading--large u-pad-bottom">Interplanetary</h2>
                    <p>Explore our solar system and track the upcoming launches that are moving humanity towards becoming interplanetary.</p>
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
                            <p class="m-project-stats__stat">API, JS, PHP, SCSS</p>
                        </li>
                    </ul>
                    <!-- Project External Links -->
                    <ul class="m-link-list">
                        <li><a class="a-button" href="#">👀 Live site</a></li>
                        <li><a class="a-button" href="#">📂 Source Code</a></li>
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
                        <img src="../src/assets/images/interplanetary-mockup__tablet-01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__mobile-02.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__mobile-01.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__tablet-02.png" alt="">
                    </picture>
                    <picture class="o-project-gallery__mockup-large">
                        <!-- <source media="(min-width: 670px)" srcset="" /> -->
                        <img src="../src/assets/images/interplanetary-mockup__tablet-03.png" alt="">
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
            <section class="o-project-details">
                <ul class="o-project-details__grid">
                    <li class="o-project-details__card--2x2">
                        <div class="o-process">
                            <ul class="o-process__tab-list">
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Research</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Planning</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Design</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Development</a></li>
                            </ul>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Research</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Planning</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Design</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Development</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                        </div>
                    </li>
                    <li class="o-project-details__card--2x1">
                        <article class="m-launch-card">
                            <div class="m-launch-card__details">
                                <div class="m-launch-card__mission">Starlink Group 2-5</div>
                                <div class="m-launch-card__vehicle">Faclon 9 Block 5</div>
                                <div class="m-launch-card__provider">SpaceX</div>
                                <div class="m-launch-card__date">Mar 12</div>
                            </div>
                            <picture class="m-launch-card__picture">
                                <img class="m-launch-card__img" src="../src/assets/images/rocket.jpg" alt="A white, frost covered, falcon 9 rocket that carries starlink satellites, launching from earth during dusk." />
                            </picture>
                        </article>
                    </li>
                    <li class="o-project-details__card">
                        <div class="m-launch-control">
                            <h3 class="o-project-details__heading">Launch Controls</h3>
                            <h4 class="o-project-details__heading--sub">Get a New Mission</h4>
                            <ul class="m-launch-control__btns">
                                <li class="m-launch-control__btn"><img src="../src/assets/icons/arrowtriangle-left-fill.svg" alt=""></li>
                                <li class="m-launch-control__btn"><img src="../src/assets/icons/arrowtriangle-right-fill.svg" alt=""></li>
                            </ul>
                        </div>
                    </li>
                    <li class="o-project-details__card--1x2">
                        <div class="o-project-code">
                            <pre class="o-project-code__pre--vert">
                                <code class="language-javascript">
// Fetch Previous Launches

fetch(previousLaunchesURI)
    .then(
        // this extracts the json from the response
        (response) => response.json()
    )
    .then((data) => {

        // get last page returned from data set
        lastPage = data.last_page + pageCount;
        // create a new URI to include the last page
        let searchURI = previousLaunchesURI + "&page=" + lastPage;
        // fetch data from new URI

        fetch(searchURI)
            .then(
                // this extracts the json from the response
                (response) => response.json()
            )
            .then((data) => {
                // runs function that adds cards to container
                addToPrevious(data);
                // if lastePage > 0 minus one from the result
                if (lastPage > 0){
                    pageCount--;
                } else {
                    loadMoreBtn.style.display = "none";
                }
            })
            .catch((error) => {
                console.error("Error", error);
            })
            .finally();

    })
    .catch((error) => {
        // normally handle the error, here we'll just log it
        console.error("Error", error);
    })
    .finally();
                                </code>
                            </pre>
                        </div>
                    </li>
                    <li class="o-project-details__card">
                        <div class="m-details-mockup">
                            <picture class="m-details-mockup__container">
                                <img class="m-details-mockup__img" src="../src/assets/images/interplanetary-mockup__mobile-01.png" alt="A white, frost covered, falcon 9 rocket that carries starlink satellites, launching from earth during dusk." />
                            </picture>
                        </div>
                    </li>
                    <li class="o-project-details__card--2x1">
                        <div class="o-project-code">
                            <pre class="o-project-code__pre">
                                <code class="language-javascript">
// Fetch Upcoming Launches

function fetchUpcomingLaunches() {
    // fetch with base uri returns the next 25 entries
    fetch(baseURI)
        .then(
            // function to extract json from the response 
            // argument
            (response) => response.json()
        )
        .then((data) => {
            // pass response data to function that creates
            // a card for each entry
            addToUpcoming(data);
        })
        .catch((error) => {
            // log error if error occurs
            console.error("Error", error);
        })
        .finally();
}
                                </code>
                            </pre>
                        </div>
                    </li>
                    <li class="o-project-details__card--2x1">
                    
                    </li>
                    
                    <li class="o-project-details__card--2x2">
                        <div class="o-process">
                        <ul class="o-process__tab-list">
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Challenges</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Solutions</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">What I learned</a></li>
                            </ul>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Research</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Planning</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Design</h2>
                                <p class="u-font-highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat obcaecati non vero, voluptate quod, et ab minus ducimus nesciunt, blanditiis maxime vel error pariatur laudantium.</p>
                            </div>
                        </div>
                    </li>
                    <li class="o-project-details__card">
                    
                    </li>
                    <li class="o-project-details__card">
                    
                    </li>
                </ul>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <script src="../src/app/js/projectPageAnimation.js"></script>
    <script src="../src/app/js/projectDetails.js"></script>
</body>
</html>