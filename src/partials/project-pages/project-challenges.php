<section class="s-section">
    <div class="s-section__content">
        <div class="m-intro-container m-intro-container--vh100 js-chalHeaderCont">
            <h2 class="a-text--center js-chalHeader">Challenges Overcome <span class="a-text--highlight">in the <br></span> Development <span class="a-text--highlight">of Asteroid Run</span></h2>
        </div>
    </div>
</section>
<div class="o-challenge">
    <section class="s-section js-chalImgCont">
        <div class="s-section__content o-challenge__img-cont js-chalImg">
            <img class="o-challenge__img" src="../src/assets/images/asteroid-run_challenge-mockup.png" alt="">
        </div>
    </section>
    <section class="s-section js-chalCopyCont">
        <div class="s-section__content--wide o-challenge__grid">
            <div class="o-challenge__copy">
                <h3 class="o-challenge__copy-heading">Player Projectiles</h3>
                <p>Players get to channel their inner space blasting enemy ships with a hail of projectiles. But let me tell you, managing all those projectiles was no walk in the space park.</p>
                <pre><code>document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});</code></pre>
                <p>As a developer who was still getting the hang of <span class="a-text--white">HTML canvas</span> and <span class="a-text--white">JavaScript objects</span>, I found the whole process of creating, animating, and detecting collisions for the projectiles to be a bit of a black hole.</p>
                <pre><code>const projHero = document.querySelector(".js-projHero");</code></pre>
            </div>
            <div class="o-challenge__copy">
                <h3 class="o-challenge__copy-heading">Player Projectiles</h3>
                <p>Players get to channel their inner space blasting enemy ships with a hail of projectiles. But let me tell you, managing all those projectiles was no walk in the space park.</p>
                <pre><code>document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});</code></pre>
                <p>As a developer who was still getting the hang of <span class="a-text--white">HTML canvas</span> and <span class="a-text--white">JavaScript objects</span>, I found the whole process of creating, animating, and detecting collisions for the projectiles to be a bit of a black hole.</p>
                <pre><code>const projHero = document.querySelector(".js-projHero");</code></pre>
            </div>
            <div class="o-challenge__copy">
                <h3 class="o-challenge__copy-heading">Enemy Behaviour</h3>
                <p class="a-text--highlight">The next challenge I faced was <span class="a-text--white">creating enemies</span> that kept players on their toes. I wanted to make sure that the <span class="a-text--white">enemies didn't appear in predictable spots</span>, so I had to figure out a way to spawn them at <span class="a-text--white">random x-axis positions</span> above the canvas.</p>
                <p class="a-text--highlight">But that was only half the battle. I also had to make sure that the <span class="a-text--white">enemies moved in a way that felt natural and unpredictable</span>, while staying <span class="a-text--white">within the bounds of the canvas</span>.</p>
                <p class="a-text--highlight">So, I will need a random animation interval, random spawn position, random movement direction... I have a feeling <span class="a-text--white">Math.random()</span> will come in handy!</p>
            </div>
            <div class="o-challenge__copy js-chalCopyTrig">
                <h3 class="o-challenge__copy-heading">A Galactic Clock</h3>
                <p class="a-text--highlight">I came up with a system that <span class="a-text--white">generates a random number each time an enemy object is created.</span> Just like if each enemy had their very own galactic clock that started the moment they were born.</p>
                <p class="a-text--highlight">That random number is used to <span class="a-text--white">set a frame rate for spawning new enemies and changing enemy direction.</span> </p>
                <p class="a-text--highlight">To spawn an enemy at a <span class="a-text--white">random x-axis position</span> was as simple as writing a <span class="a-text--white">Math.random() function in place of the x: position</span> of the enemy.</p>
                <p class="a-text--highlight">The trickiest part is keeping all these troublemakers within bounds! I tried a few methods to solve this but in the end, the simplest answer seems to be the last one thought of. <span class="a-text--white">When an enemy tries to leave the bounds of the screen the direction is simply reversed</span>, pushing the enemy away from the edge of the canvas, and back towards the center. There is no escape in Asteroid Run!</p>
            </div>
        </div>
    </section>
</div>