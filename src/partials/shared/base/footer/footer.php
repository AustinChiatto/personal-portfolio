<footer>
    <section class="s-section">
        <div class="o-footer">
            <a class="a-text--md a-text--white o-footer__email" href="mailto:chiattoaustin@gmail.com" title="Send Me an Email">hello@austinchiatto.com</a>
            <hr class="o-footer__hr">
            <ul class="o-footer__link-list">
                <li><a class="a-text--highlight a-text--base a-link-primary" href="https://www.linkedin.com/in/austin-chiatto" title="View LinkedIn Profile" target="_blank">LinkedIn</a></li>
                <li><a class="a-text--highlight a-text--base a-link-primary" href="https://github.com/AustinChiatto" title="View GitHub Profile" target="_blank">GitHub</a></li>
                <li><a class="a-text--highlight a-text--base a-link-primary" href="https://codepen.io/austinchiatto" title="View Codepen Profile" target="_blank">Codepen</a></li>
            </ul>
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

<!-- highlight JS code - used for code blocks in project pages -->
<script src="build/js/highlight.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightElement(block);
    });
});
</script>