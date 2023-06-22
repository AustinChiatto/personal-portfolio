const missionContainer = document.querySelector(".js-missionContainer");
const missionList = document.querySelector(".js-missionList");
const missionItems = document.querySelector(".js-missionItems");

// move headings
// ===========================
let scrollItems = gsap.timeline({
    scrollTrigger: {
        trigger: missionContainer,
        start: "top top",
        pin: true,
        scrub: true,
        end: "bottom top",
        pinSpacing: true,
    },
});

// scrollItems timeline
scrollItems.from(missionItems, { y: 0 });
scrollItems.to(missionItems, { y: "-25%" });
scrollItems.to(missionItems, { y: "-50%" });
scrollItems.to(missionItems, { y: "-75%" });
scrollItems.to(missionItems, { y: "-75%" });
