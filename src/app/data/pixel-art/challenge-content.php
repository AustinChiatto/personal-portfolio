<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "pixel-art_challenge-image-001.png";
$challenge_mockup_alt = "pixel-art_challenge";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Individual Pixel State</h3>
    <p class="a-text--copy">The most challenging part of this project was actually having the state of the pixels updates individually. No matter what I did the entire drawing canvas would be filled with the chosen color.</p>
    <p class="a-text--copy">This is obviously not drawing but just throwing the entire paint bucket onto the canvas, which is exactly the opposite of what this project is supposed to be.</p>
    ';

$challenge_02 = '
    <h3 class="o-project-challenge__heading">Better Array Management</h3>
    <p class="a-text--copy">The solution come in the form of “new Array()”. I set the total count of pixels I wanted to display within the canvas dimensions. Here I chose to do a 16x16 grid of pixels (256 total).</p>
    <p class="a-text--copy">I then was able to use that pixel count to create an array of pixels within the default state, which I filled with the default color.</p>
    <p class="a-text--copy">Then I built out a function which spread the array out, identified the pixel that matched the index which was passed from the child prop, then the "setPixelColors" state function was used to set the color of the pixel to be the selected color passed in.</p>
<pre><code language="typescript">// 16x16
const canvasPixelCount = 256;

const [pixelColors, setPixelColors] = useState(new Array(canvasPixelCount).fill(color));

// set color of pixel
const handlePlacePixel = (index) => {
    const newPixelColors = [...pixelColors];
    newPixelColors[index] = color;
    setPixelColors(newPixelColors);
};</code></pre>
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See The Rest Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/class-portrait" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
