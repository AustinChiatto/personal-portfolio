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
                <p class="a-text--highlight"><span class="a-text--white">Players get to channel their inner space cowboy by blasting enemy ships with a hail of projectiles</span>. But let me tell you, managing all those projectiles was no walk in the space park.</p>
                <p class="a-text--highlight">As a developer who was still getting the hang of <span class="a-text--white">HTML canvas</span> and <span class="a-text--white">JavaScript objects</span>, I found the whole process of creating, animating, and detecting collisions for the projectiles to be a bit of a black hole.</p>
                <p class="a-text--highlight">To make matters worse, players could fire off <span class="a-text--white">as many projectiles as they wanted</span>, which meant I had to come up with a way to keep track of all those little rascals.</p>
            </div>
            <div class="o-challenge__copy">
                <h3 class="o-challenge__copy-heading">Cosmic Storage Array</h3>
                <p class="a-text--highlight">To solve this, <span class="a-text--white">every time the player hit the "z" key</span> to fire a projectile, <span class="a-text--white">a new object is created and pushed to an array</span>. This array acts like a cosmic garage, holding all the active projectiles in the game.</p>
                <p class="a-text--highlight">This means I can simply use a forEach loop to <span class="a-text--white">loop through each projectile</span> to <span class="a-text--white">test if the projectile is "inside" an enemy</span> ship, <span class="a-text--white">or has exited the canvas</span>. If either is true the projectile is simply <span class="a-text--white">spliced from the array</span>, limiting the number of projectiles on screen to a manageable amount.</p>
                <p class="a-text--highlight">Now players can shoot to their heart's content, and watch their enemies explode into a shower of space debris, <span class="a-text--white">without crashing their browser</span>. It's a beautiful thing.</p>
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