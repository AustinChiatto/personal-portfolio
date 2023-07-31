<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "grid-tool_challenge-image-001.png";
$challenge_mockup_alt = "grid-tool-challenge.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Prop Drilling</h3>
    <p class="a-text--copy">The most challenging part of this project was attempting to build it without fully understanding React. It led me down lengthy documentation paths, dead ends, and obviously wrong answers, but by far the most difficult of these was not knowing what questions to ask in the first place.</p>
    <p class="a-text--copy">In JavaScript passing information from one place to another can be simple. In React it can be simple too but what if I want to pass information from one component to a distant sibling component?</p>
    <p class="a-text--copy">I tried raising states and props all the way up to the nearest ancestor but that quickly became unmanageable.</p>
    <p class="a-text--copy">I needed a way to manage and send props to the components that needed it in a more concise and organized manner. This is where knowing what questions to ask would have been nice.</p>
    ';
$challenge_02 = '
    <h3 class="o-project-challenge__heading">The useContext Hook</h3>
    <p class="a-text--copy">The solution to my problem was the useContext Hook. This Hook allows me (according to the documentation) to “teleport” data to the components that need it, without passing props along the entire component tree.</p>
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
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See All Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/crumb/blob/main/src/GridControlContext.jsx" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
