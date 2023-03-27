// Home
// ===========================

// hero
const homeHero = document.querySelector('.js-home-hero');
const homeHeroText = new SplitType('.js-home-hero-text');

gsap.to(".word", {
    y:0,
    opacity: 1,
    stagger: 0.05,
    delay: 0.1,
    duration: 0.02
});