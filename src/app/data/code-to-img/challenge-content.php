<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "grid-tool-challenge.png";
$challenge_mockup_alt = "grid-tool-challenge.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-challenge__copy-heading">Live Syntax Highlighting</h3>
    <p class="a-text--copy">The most challenging part of this entire project was highlighting the syntax of the users input language.</p>
    <p class="a-text--copy">I wanted to have live syntax highlighting, so the user could type or paste code into the text area and have it automatically highlight as they did so.</p>
    <p class="a-text--copy">This proved rather difficult as I could not wrap a users text with style tags directly in the textarea.</p>
    <p class="a-text--copy">To get around this I employed a little bit of a tricky magic trick.</p>
    ';
$challenge_02 = '
    <h3 class="o-challenge__copy-heading">Invisible textarea</h3>
    <p class="a-text--copy"></p>
    <pre><code>//woah</code></pre>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02];
?>
