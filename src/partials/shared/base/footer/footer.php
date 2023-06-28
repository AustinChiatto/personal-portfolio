<footer>
    <section class="s-section--theme-light">
        <div class="s-section__content--wide o-footer">
            <div class="o-footer__cta">
                <h2>Reach out, see what else I'm up to on the internet, or recommend a good movie.</h2>
                <a class="a-text--lg o-footer__email" href="#">hello@austinchiatto.com</a>
            </div>
        </div>
    </section>
    <section class="s-section">
        <div class="s-section__content--wide">
            <div class="o-footer__recap">
                <div class="o-footer__recap-headings">
                    <h2>Austin Chiatto</h2>
                    <h3 class="a-text--base a-text--highlight">Front End Developer</h3>
                </div>
                <div class="o-footer__recap-links">
                    <a class="a-text--highlight" href="#">Email</a>
                    <a class="a-text--highlight" href="#">LinkedIn</a>
                    <a class="a-text--highlight" href="#">GitHub</a>
                    <a class="a-text--highlight" href="#">Codepen</a>
                </div>
            </div>
            <div class="o-footer__copyright-container">
                <p>&copy; 2023</p>
                <a class="a-text--highlight" href="#top">Top</a>
            </div>
        </div>
    </section>
</footer>
<!-- Lenis Smooth Scroll -->
<script src="../src/app/js/lenis.min.js"></script>
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<!-- GSAP Scroll Trigger Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<!-- Animations for links - site wide -->
<script src="../src/app/js/linkAnimation.js"></script>
<!-- test -->
<script>
    const lenis = new Lenis({
        duration: 1.1,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -20 * t))
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    lenis.on("scroll", ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
</script>