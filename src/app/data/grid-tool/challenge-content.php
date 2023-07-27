<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "grid-tool-challenge.png";
$challenge_mockup_alt = "grid-tool-challenge.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Multi-level Props</h3>
    <p class="a-text--copy">One of the most difficult challenges I had during the development of this project, actually had to do with the way I initially taught myself React.</p>
    <p class="a-text--copy">React hooks came later in my study so passing values through many component levels was quite difficult. For instance, the values set in the "grid control bar" that sets the column, row, and gap values.</p>
    <p class="a-text--copy">These components are children of the "grid control bar" but the values have to be passed to the "grid output" which is also a multi-level child component. This meant at the time, I had very few options as to a solution.</p>
    <p class="a-text--copy">The solution I found at the time was to raise the state of the values all the way up to the top level parent component, then passed the state and setState method all the way down the chain to the appropriate components.</p>
    <p class="a-text--copy">This was incredibly cumbersome and meant adding new controls in the future would be equally so.</p>
    ';
$challenge_02 = '
    <h3 class="o-project-challenge__heading">useContext To The Rescue!</h3>
    <p class="a-text--copy">After stumbling my way through the previous solution, I knew there must be an easier and more efficient way to handle this as passing values like this is quite common.</p>
    <p class="a-text--copy">Enter my discovery of the useContext Hook. I created two contexts, one handled the setting of state that was passed to it via it&apos;s parent, the other context hook. This meant I could update the grid control values and have them directly effect the grid output child.</p>
    <pre><code>// used to store the value of the grid control component
export function useGridControl() {
    return useContext(GridControlContext);
}

// passes the value of the grid control to the grid output component
export function useUpdateInput() {
    return useContext(updateInputContext);
}</code></pre>
    <pre><code>return (
        // GridControlContext.provider passes value to GridControlContext via input value
        // children of the updateInputContext have access to the updateInput value
        &lt;GridControlContext.Provider value={inputValue}>
            &lt;updateInputContext.Provider value={updateInput}>{children}&lt;/updateInputContext.Provider>
        &lt;/GridControlContext.Provider>
);</code></pre>
    <p class="a-text--copy">This solved the problem but I had to make sure this hook was not over used as it could lead to over complicated dependencies.</p>
    <p class="a-text--copy">See this entire file on <a class="a-link-primary" href="https://github.com/AustinChiatto/grid-tool--2.0/blob/main/src/GridControlContext.jsx" target="_blank">GitHub</a></p>
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See All Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/grid-tool--2.0/blob/main/src/GridControlContext.jsx" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
