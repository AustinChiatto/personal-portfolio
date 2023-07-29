const aboutBio = document.querySelector(".js-aboutBio"),
    bioHeadingCont = document.querySelector(".js-bioHeadingCont"),
    bioHeading = document.querySelector(".js-bioHeading"),
    bioBody = document.querySelector(".js-bioBody"),
    bioSpan = document.querySelectorAll(".js-bioSpan");

// handle challenge heading
// ===========================
// pin section heading
let pinBioHeading = ScrollTrigger.create({
    trigger: bioHeading,
    start: "center center",
    pin: bioHeadingCont,
    endTrigger: aboutBio,
    end: "bottom top",
    scrub: true,
});

const bioHeadingTl = gsap.timeline().fromTo(bioSpan, { display: "none", opacity: 0, filter: "blur(0.5rem)" }, { display: "inline-block", opacity: 1, filter: "blur(0rem)", stagger: 0.3 });

ScrollTrigger.create({
    trigger: bioHeading,
    animation: bioHeadingTl,
    start: "top 85%",
    endTrigger: aboutBio,
    end: "bottom center",
    scrub: 1, // I like the 1 sec delay, set to true for exact anime on scroll
});

let fadeIn = gsap.fromTo(
    bioBody,
    {
        color: "#6E6E73",
    },
    {
        color: "#eef0f2",
        scrollTrigger: {
            trigger: bioBody,
            start: "top 75%",
            scrub: 1,
            end: "top 50%",
        },
    }
);
