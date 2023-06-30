<footer>
    <section class="s-section">
        <div class="o-footer">
            <a class="a-text--lg a-text--white o-footer__email" href="#">hello@austinchiatto.com</a>
            <hr class="o-footer__hr">
            <ul class="o-footer__link-list">
                <li><a class="a-text--highlight a-text--base" href="#">LinkedIn</a></li>
                <li><a class="a-text--highlight a-text--base" href="#">GitHub</a></li>
                <li><a class="a-text--highlight a-text--base" href="#">Codepen</a></li>
            </ul>
        </div>
        <div class="s-section__content--full">
            <div class="o-footer__copyright-container">
                <p class="a-text--copy">&copy; 2023</p>
                <a class="a-text--copy a-text--highlight" href="#top">Top</a>
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
<!-- smooth scrolling -->
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
<script src="build/js/highlight.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightElement(block);
    });
});
</script>