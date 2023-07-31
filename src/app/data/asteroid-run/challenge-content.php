<?php
// challenge mockup url
// ===========================
$challenge_mockup_url = "asteroid-run_challenge-image-001.png";
$challenge_mockup_alt = "A pixel art style game screen with enemy space ships firing purple projectiles at the player";

// challenge section content
// ===========================
$challenge_01 = '
    <h3 class="o-project-challenge__heading">Enemy Movement</h3>
    <p class="a-text--copy">I wanted the spawning and movement of the enemies to feel organic but also to have a hint of predictability.</p>
    <p class="a-text--copy">What I found difficult was ensuring that the enemies moved in a random direction for a length of time, yet remain in bounds of the canvas and have their animation timing be different than the other objects.</p>
    <p class="a-text--copy">The first thing I tried was the following:</p>
    <pre><code>if (enemy.position.x + enemy.width >= canvas.width && enemy.position.y + enemy.height >= canvas.height - player.height * 2) {
        enemy.velocity.x = enemyMovementSpeed;
    } else if (enemy.position.x) {
        enemy.velocity.x = -enemyMovementSpeed;
    } else if (enemy.position.y) {
        enemy.velocity.y = -enemyMovementSpeed;
    }</code></pre>
    <p class="a-text--copy">This did not work, and even if it had the enemy would have stopped in its tracks if it touched the edge of the canvas.</p>
';
$challenge_02 = '
    <h3 class="o-project-challenge__heading">The "U" Turn</h3>
    <p class="a-text--copy">To solve this I used a handy (sometimes illegal) manuever called the "U" turn. It may not be the most graceful, but when an enemy touches an edge of the canvas the movement direction is immediately reversed, sending the enemy back towards the middle of the canvas.</p>
    <pre><code>// perform a "U" turn
    if (enemy.position.x <= 0) {
        enemy.velocity.x = enemyMovementSpeed;
    } else if (enemy.position.x + enemy.width >= canvas.width) {
        enemy.velocity.x = -enemyMovementSpeed;
    } else if (enemy.position.y + enemy.height >= canvas.height - player.height * 2) {
        enemy.velocity.y = -enemyMovementSpeed;
    } else if (enemy.position.y <= 0) {
        enemy.velocity.y = enemyMovementSpeed;
    }</code></pre>
    <p class="a-text--copy">This handled the out of bounds issue, and for the asynchronous animations I simply started a new animation loop when the enemy is rendered, rather than on game start.</p>
    
';

$challenge_03 = '
    <div class="js-projChalEnd">
        <h3 class="o-project-challenge__heading">See All Of This Solution</h3>
        <a class="a-button" href="https://github.com/AustinChiatto/asteroid-run-2.0.0/blob/main/js/enemies/enemy.js" title="View Code on GitHub" target="_blank">View Code</a>
    </div>
';

// array of all challenges
$challenges = [$challenge_01, $challenge_02, $challenge_03];
?>
