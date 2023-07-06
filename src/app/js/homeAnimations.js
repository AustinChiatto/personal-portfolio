const missionContainer = document.querySelector(".js-missionContainer");
const missionList = document.querySelector(".js-missionList");
const missionItems = document.querySelector(".js-missionItems");

let zoomIn = gsap.timeline({
    scrollTrigger: {
        trigger: ".js-heroContainer",
        start: "top top",
        pin: ".js-heroContainer",
        scrub: true,
        end: "bottom -100%",
    },
});

zoomIn.to(".js-heroBlur", { filter: "blur(8px)", color: "#6E6E73", duration: 2, ease: "power1.in" }, "<");
zoomIn.to(".js-heroHeading", { scale: 100, x: "-345%", y: "1000%", duration: 6, delay: 1, ease: "power1.in" }, "<");
zoomIn.to(".js-heroContainer", { backgroundColor: "#0f0f0f", duration: 1, delay: 4 }, "<");
zoomIn.to(missionList, { opacity: 1, duration: 1, delay: 0.25 }, "<");
zoomIn.to(missionItems, { y: "-25%", duration: 1 });
zoomIn.to(missionItems, { y: "-50%", duration: 1 });
zoomIn.to(missionItems, { y: "-75%", duration: 1 });
zoomIn.to(missionItems, { y: "-75%", duration: 1 });
