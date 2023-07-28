<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "code-to-img_challenge-image-001.png";
$challenge_mockup_alt = "grid-tool-challenge.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Live Syntax Highlighting</h3>
    <p class="a-text--copy">The most challenging part of this entire project was highlighting the syntax of the users input language.</p>
    <p class="a-text--copy">I wanted to have live syntax highlighting, so the user could type or paste code into the text area and have it automatically highlight as they did so.</p>
    <p class="a-text--copy">This proved rather difficult as I could not wrap a users text with style tags directly in the textarea.</p>
    <p class="a-text--copy">To get around this I employed a little bit of a tricky magic trick.</p>
    ';

$challenge_02 = '
    <h3 class="o-project-challenge__heading">Invisible textarea</h3>
    <p class="a-text--copy"></p>
    <pre><code>//woah</code></pre>
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See All Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/grid-tool--2.0/blob/main/src/GridControlContext.jsx" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
