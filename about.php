<!DOCTYPE html>
<?php
require "src/app/init.php";
$title_tag = "Austin Chiatto | More about me";
$meta_desc = "I'm a developer, fascinated and inspired by the ability to bring ideas to life with code.";
$og_url = "https://austinchiatto.com/public/about.php";
$og_image = "src/assets/images/about-section__image-00.jpg";
require "src/partials/shared/base/head.php";
?>
<body>
    <!-- Header -->
    <?php require "src/partials/shared/base/header/header.php"; ?>
    <main>
        <section class="s-section">
            <div class="s-section__content m-intro-container--about-page">
                <h2 class="a-text--base a-text--highlight">My friends call me bald, but most</h2>
                <h1>Call Me Austin</h1>
            </div>
        </section>
        <section class="s-section">
            <div class="s-section__content">
                <div class="m-content-grid--pad-bottom js-contentGrid">
                    <div class="m-content-grid__column">
                        <?php require "src/partials/shared/atoms/about-card.php"; ?>
                    </div>
                    <div class="m-content-grid__column">
                        <?php require "src/partials/shared/atoms/about-card.php"; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php require "src/partials/shared/base/footer/footer.php"; ?>
    <!-- SplitType.js -->
    <script src="https://unpkg.com/split-type"></script>
    <!-- animation.js file -->
    <script src="src/app/js/aboutAnimation.js"></script>
</body>
</html>