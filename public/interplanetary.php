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
                                <p class="u-font-highlight o-process__copy">As this project involved providing real-time launch dates and information, it was necessary to utilize an API. However, as I had no prior experience with REST APIs, I dedicated the initial phase of the project to conducting extensive research on their requirements and identifying the necessary resources to obtain the live information required.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Planning</h2>
                                <p class="u-font-highlight o-process__copy">Since this was a large project, I wanted to make sure I had a solid system in place for organizing files and naming conventions. To achieve this, I decided to use a combination of BEM and Atomic Design Language as a framework for naming files and elements. This approach made it much easier to navigate, manage, and document the project as it developed over time.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Design</h2>
                                <p class="u-font-highlight o-process__copy">As I followed a modular approach for naming conventions and organizational structure, which I also applied to the UI design. Consistent section styling and a grid-based system for the launch cards allowed for dynamic and flexible display of launch data, ensuring modularity and scalability throughout development.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Development</h2>
                                <p class="u-font-highlight o-process__copy">By prioritizing modularity and scalability in the design and planning phases throughout development, I was able to maintain a high level of flexibility and adaptability to changes in project requirements.</p>
                            </div>
                        </div>
                    </li>
                    <li class="o-project-details__card--2x1">
                        <article class="m-launch-card" data-tilt data-tilt-max="15" data-tilt-perspective="2000">
                            <div class="m-launch-card__details">
                                <div class="m-launch-card__mission">Starlink Group 2</div>
                                <div class="m-launch-card__vehicle">Faclon 9</div>
                                <div class="m-launch-card__provider">SpaceX</div>
                                <div class="m-launch-card__date">April 8</div>
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
                                <li class="m-launch-control__btn"><img src="../src/assets/icons/arrowtriangle-left-fill.svg" alt="left arrow key button that controls the launch card api to get a previous launch"></li>
                                <li class="m-launch-control__btn"><img src="../src/assets/icons/arrowtriangle-right-fill.svg" alt="right arrow key button that controls the launch card api to get the next launch"></li>
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
                            <p class="a-heading">🚀</p>
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
                        <article class="m-launch-card" data-tilt data-tilt-max="15" data-tilt-perspective="2000">
                            <div class="m-launch-card__details">
                                <div class="m-launch-card__mission">OFT Test Launch</div>
                                <div class="m-launch-card__vehicle">Starship</div>
                                <div class="m-launch-card__provider">SpaceX</div>
                                <div class="m-launch-card__date">April 10</div>
                            </div>
                            <picture class="m-launch-card__picture">
                                <img class="m-launch-card__img" src="../src/assets/images/rocket.jpg" alt="A white, frost covered, falcon 9 rocket that carries starlink satellites, launching from earth during dusk." />
                            </picture>
                        </article>
                    </li>
                    
                    <li class="o-project-details__card--2x2">
                        <div class="o-process">
                        <ul class="o-process__tab-list">
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Challenges</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">Solutions</a></li>
                                <li class="o-process__tab"><a class="a-button--invert js-process-btn">What I would change</a></li>
                            </ul>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Challenges</h2>
                                <p class="u-font-highlight o-process__copy">The most difficult part of this project was writing the code for the search function in order to find specific launch information based on the search query. I found passing that data to a new GET request dynamically and showing the new set of launch cards the most difficult part of the feature.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">Solutions</h2>
                                <p class="u-font-highlight o-process__copy">I found that if I ran the query every few seconds as long as the search field was active, then removing all of the cards in the container, and finally re-appending the new cards captured from the search query the easiest way to overcome the challenge.</p>
                            </div>
                            <div class="o-process-container js-process-container">
                                <h2 class="o-process__heading">What I Would Change</h2>
                                <p class="u-font-highlight o-process__copy">In this project, I learned a lot and realized that I could have optimized the API requests for improved efficiency. Instead of writing separate requests and functions for each call, I could have consolidated them into fewer requests to streamline the process and improve overall performance.</p>
                            </div>
                        </div>
                    </li>
                    <li class="o-project-details__card">
                        <div class="m-details-mockup">
                            <picture class="m-details-mockup__container">
                                <img class="m-details-mockup__img" src="../src/assets/images/interplanetary-mockup__mobile-02.png" alt="A white, frost covered, falcon 9 rocket that carries starlink satellites, launching from earth during dusk." />
                            </picture>
                        </div>
                    </li>
                    <li class="o-project-details__card">
                        <div class="m-details-mockup">
                            <p class="a-heading">🪐</p>
                        </div>
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