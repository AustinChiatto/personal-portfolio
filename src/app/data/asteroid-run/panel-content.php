<?php
// panel content
// ===========================
$team_panel_content = '
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">My Role</h4>
        <p class="a-text--copy">For this project, I took on the responsibilities of both a UI/UX designer and a game developer. Since I worked on this project individually, it provided an excellent opportunity for me to enhance my design skills and improve my development capabilities.</p>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">UI & UX</h4>
        <p class="a-text--copy">One of the key aspects of my role was re-designing the graphics of the game. I transformed the minimalistic graphics from the initial version into a retro-inspired pixel art style. This involved creating pixel art graphics for various in-game elements, such as the player, enemies, objects, and animations. The pixel art style added a nostalgic and visually appealing aesthetic to the game, enhancing the overall experience for players.</p>
        <p class="a-text--copy">In addition to the pixel art graphics, I also incorporated a tiled background. To accomplish this, I utilized a <a class="a-link-primary" href="https://deep-fold.itch.io/space-background-generator" target="_blank">tool</a> that I found, which assisted in generating the tiled background. This tool streamlined the process of creating a visually engaging background for the game.</p>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Developer</h4>
        <p class="a-text--copy">As for the development, I implemented the game and its range of features using JavaScript classes and objects. JavaScript provided a powerful language for developing the game&apos;s functionality and interactivity. I leveraged object-oriented programming principles to organize and structure the codebase which were not utilized during the development of the first version.</p>
        <p class="a-text--copy">To render the game dynamically on the screen, I utilized HTML canvas, this allowed for drawing the graphics and animations programmatically. By utilizing the canvas element, I was able to bring the pixel art graphics and game mechanics to life, creating an engaging user experience.</p>
    </article>
';

$git_panel_content = '
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version History</h4>
        <p class="a-text--copy">Starting from the latest release, the following is a log of this projects version history.</p>
    </article>
    <ul class="m-link-list--left">
        <li><a class="a-button" href="https://asteroid-run.austinchiatto.com/" title="Play Asteroid Run" target="_blank">Asteroid Run V2</a></li>
    </ul>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version 2.1.0</h4>
        <p class="a-text--copy a-text--highlight">This release focused on improving the games foundational features and adding necessary game components.</p>
        <ul class="a-list">
            <li class="a-list__item"><p class="a-text--copy">Added Start & Game Over screens</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added level count</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added increased difficulty as level increases</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added persistent player control description</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added alternate player controls</p></li>
        </ul>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version 2.0.0</h4>
        <p class="a-text--copy a-text--highlight">This release of the project saw a complete re-haul of all systems and graphics.</p>
        <ul class="a-list">
            <li class="a-list__item"><p class="a-text--copy">Changed player control to keyboard inputs rather than cursor movement</p></li>
            <li class="a-list__item"><p class="a-text--copy">Changed obstacles into enemies with randomized movement patterns</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added ability for players to shoot enemies</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added enemy projectiles</p></li>
            <li class="a-list__item"><p class="a-text--copy">Changed graphics to custom pixel art</p></li>
            <li class="a-list__item"><p class="a-text--copy">Changed score to be calculated based on enemy & player projectile collisions</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added scrolling tiled backdrop</p></li>
        </ul>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version 1.2.0</h4>
        <ul class="a-list">
            <li class="a-list__item"><p class="a-text--copy">Added difficulty scaling based on player score</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added increased game boarder collision detection</p></li>
        </ul>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version 1.1.0</h4>
        <ul class="a-list">
            <li class="a-list__item"><p class="a-text--copy">Added UI themes</p></li>
            <li class="a-list__item"><p class="a-text--copy">Fixed collision detection</p></li>
            <li class="a-list__item"><p class="a-text--copy">Fixed difficulty increase not resetting between rounds</p></li>
        </ul>
    </article>
    <article class="m-content-panel__section">
        <h4 class="m-content-panel__copy-heading">Version 1.0.0</h4>
        <p class="a-text--copy a-text--highlight">The first release of Asteroid Run</p>
        <ul class="a-list">
            <li class="a-list__item"><p class="a-text--copy">Added control of player via mouse cursor</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added randomized obstacle spawning</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added obstacle Y-axis movement</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added player-enemy collision detection</p></li>
            <li class="a-list__item"><p class="a-text--copy">Added game over screen that is triggered on player collision</p></li>
        </ul>
    </article>
';

$purpose_panel_content = '
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">Project Intensions</h4>
    <p class="a-text--copy">The purpose of the first version of this project was to grow my skills as a JavaScript developer, this version (version 2.0) is meant to do the same thing. But instead this version is focused around JavaScript Objects, their syntax and functionality, as well as HTML canvas as a renderer.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">JavaScript Objects</h4>
    <p class="a-text--copy">Prior to the development of this project I had very little knowledge when it came to JS objects... Most of my time spent developing with JS during my program here at BCIT was spent away from OOP. I wanted to change that, and thought that just like learning JS basics, developing a game would using OOP would be just as fun of a learning process!</p>
    <p class="a-text--copy">I was right, this game was incredibly fun to build, I really enjoy writing JS objects as it was relatively easy to pick up with my experience with PHP objects was able to translate here quite well.</p>
    <p class="a-text--copy">I actually found myself enjoying the process so much that in the first commit of Asteroid Run 2.0 has all of the JS in a single file because I was wanting to build new features so quickly that I had completely lost track of my file organization, which is usually one of my favourite parts during the set-up process (don&apos;t judge me!)</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">HTML Canvas</h4>
    <p class="a-text--copy">Another technology I wanted to try was HTML canvas, the first version of Asteroid Run saw the player, objects, and other elements appended straight to the DOM. In hindsight this seems super weird for a game and was something I wanted to change in a future version.</p>
    <p class="a-text--copy">Which is where HTML canvas rendering came into play. This, combined with JavaScript objects made a huge difference in the way I built this game. For example, instead of trying to keep the player inside the bounds of some arbitrary parent element using .getBoundingClientRect()</p>
    <p class="a-text--copy">which was then followed by an horrendous if statement block for the player, I could simply check that the player is within the canvas dimensions, then only let the controls work if so.</p>
</article>
';

$technology_panel_content = '
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">Technology</h4>
    <p class="a-text--copy">The first version of Asteroid Run was focused on learning the basics of vanilla front-end languages, and I wanted to continue that trend with version 2.0 by honing my skills in these languages.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">HTML (canvas)</h4>
    <p class="a-text--copy">I chose to use HTML canvas to render the game rather than use the same mix and match appendChild technique I used for the first version of the game. This made things much cleaner and resulted in the game consisting of very little static HTML.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">CSS</h4>
    <p class="a-text--copy">As the game is using a new art style that consists of pixel art graphics which were then rendered via JS and HTML canvas, again like the HTML, the site consists of very little static CSS.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">JavaScript</h4>
    <p class="a-text--copy">This is where the heavy lifting is in this new version of the game. I continued on the vanilla front-end language trend of the last version however, I chose to really focus on the object oriented side of JavaScript. I did this for two reasons:</p>
    <p class="a-text--copy">The first being that JS objects was where my skills suffered the most and I wanted to grow my skills as a front-end developer, which meant being at least familiar with JavaScript OOP.</p>
    <p class="a-text--copy">The second was that I knew that understanding JavaScript objects meant learning frameworks such as React would be that much easier.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">Aseprite</h4>
    <p class="a-text--copy">Aseprite is a tool I used to create the pixel art during the development of the game. It has an easy to understand interface and was specifically designed to create pixel art graphics which made creating and exporting the assets incredibly easy.</p>
</article>
<article class="m-content-panel__section">
    <h4 class="m-content-panel__copy-heading">GitHub</h4>
    <p class="a-text--copy">I chose to use GitHub as my version control system as it is something I am familiar with using and provides easy functionality across multiple of my applications. The added bonus of having VS Code extensions for managing repo&apos;s makes the use of GitHub as my version control a no brainer!</p>
</article>
';
?>
