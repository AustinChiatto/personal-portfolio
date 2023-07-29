<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "code-to-img_challenge-image-001.png";
$challenge_mockup_alt = "grid-tool-challenge.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Live Syntax Highlighting</h3>
    <p class="a-text--copy">I aimed to create a seamless experience for the user, allowing them to easily input their code into the container and have it automatically highlighted as they type. However, I was confronted with the unexpected challenge of implementing this feature, as popular libraries like Prism and HighlightJS lack the capability to apply formatting within a text area as they target primarily pre & code tags.</p>
    ';

$challenge_02 = '
    <h3 class="o-project-challenge__heading">The “Sandwich” Approach</h3>
    <p class="a-text--copy">In order to achieve the desired live syntax highlighting effect, I devised a clever “sandwich” approach. The bottom layer of contained the necessary styling for the container. Placed above this was the layer responsible for rendering the highlighted text. Finally, on top of it all, a text area where the users could input their code.</p>
<pre><code language="typescript">// user input
&lt;textarea
    className={styles.CodeInput}
    value={codeInput}
    onChange={(e) => setCodeInput(e.target.value)}
>&lt;/textarea>

// rendered text
&lt;CodeBlock
    code={codeInput}
    language={codeLang}
    theme={themeLight ? stack : stackDark}
>&lt;/CodeBlock></code></pre>
    <p class="a-text--copy">The value of the middle layer was determined by the users input in the top layer text area, which was dynamically rendered using an onChange method. Finally, I made the top layer text content transparent to the user, resulting in a final product that appeared as though the users input was being live highlighted.</p>
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See The Rest Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/crumb/blob/main/src/components/CodeToImg/Output/OutputDisplay/RenderedImage/UserInput/UserInput.jsx" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
