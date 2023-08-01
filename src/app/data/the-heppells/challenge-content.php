<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "the-heppells_challenge-image-001.png";
$challenge_mockup_alt = "the-heppells_challenge-image-001.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">GSAP Scroll Trigger</h3>
    <p class="a-text--copy">I designed this project to include scroll animations. This was my first time using GSAP Scroll Triggers and GSAP animations for that matter. I found the animation side of things relatively easy to pick up but I found getting the scroll trigger to look right on both mobile and desktop incredibly frustrating at first.</p>
    ';

$challenge_02 = '
    <h3 class="o-project-challenge__heading">Documentation To The Rescue</h3>
    <p class="a-text--copy">Fortunately GSAP has incredible documentation which made it easy to parse and find the solution I was looking for. I used the scroll trigger markers to make things easier to visualize, and used a combination of percentage values to ensure the scroll animations worked as intended across all device types.</p>
<pre><code language="javascript">let tlFeat = gsap.fromTo(
    featCont,
    {
        borderRadius: "1rem",
    },
    {
        borderRadius: `1rem 1rem ${featContWidth / 2 / 16} ${featContWidth / 2 / 16}`,
        scrollTrigger: {
            trigger: featCont,
            start: "top center",
            end: "bottom 25%",
            scrub: true,
        },
    }
);</code></pre>
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See The Rest Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/wedding-rsvp-website" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
