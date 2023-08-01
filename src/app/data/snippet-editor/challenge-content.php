<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "snippet-editor_challenge-image-001.png";
$challenge_mockup_alt = "snippet-editor.png";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Adapting Colors</h3>
    <p class="a-text--copy">The most difficult hurdle to overcome in the development of this snippet editor was the color picker. Having the user change the main color of the snippet was not too hard but changing the accent colors of the button automatically was!</p>
    <p class="a-text--copy">This project stores the styles for each button in a JSON object, this was what made it challenging. JSON is static data, which made getting and setting styles more difficult as I couldn&apos;t find an efficient way to set both the base styles, and hover styles dynamically.</p>
    <p class="a-text--copy">This was especially the case with the color prop, I wanted to set primary, secondary, and special color properties within the JSON, then spread that across the React component. This proved impossible because of the structure of JSON, so a new solution had to be imagined.</p>
    ';

$challenge_02 = '
    <h3 class="o-project-challenge__heading">Separation of Functions</h3>
    <p class="a-text--copy">The solution to this challenge was to write separate functions for the base and hover states of the snippet. Then spread the JSON properties to each function while adding in the dynamic properties.</p>
    <p class="a-text--copy">In addition to that I also included the color change within the useContext file to be able to check if the color has been changed, and if so, update the property in state, and pass it to the button. This now changes for both the hover and base states for both the main color and secondary color props.</p>
<pre><code language="typescript">// == useContext File ==
// color section of update method
else if (operation === "colorChange") {
    const newValues = [...prevValues];
    newValues[index] = newColor;
    return newValues;
}

// == Color Input ==
// Handle color change
const handleColorChange = (newColor) => {
    updateValues(2, "colorChange", newColor); // Update the color value directly in the inputValue state
};</code></pre>
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
