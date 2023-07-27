window.addEventListener("load", function () {
    handleHeroImg();
});

window.addEventListener("resize", function () {
    handleHeroImg();
});

// Project Hero - Scroll Animation
// ===========================
const projHero = document.querySelector(".js-projHero"),
    projHeroImg = document.querySelector(".js-projHeroImg"),
    heroImgCont = document.querySelector(".js-projHeroImgCont"),
    projHeroHeadings = document.querySelector(".js-projHeadings"),
    externalCTA = document.querySelector(".js-externalCTA"),
    clientW = window.innerWidth; // get width of window

function handleHeroImg() {
    const clientH = window.innerHeight, // get height of window
        percentageIncrease = 54.08,
        resizedH = clientH + clientH * (percentageIncrease / 100), // increase height based on the bezel & stand of the img
        aspectRatio = projHeroImg.naturalWidth / projHeroImg.naturalHeight, // calculate aspect ratio of image
        heroImgW = resizedH * aspectRatio; // calculate corresponding width of image

    projHeroImg.style.height = `${resizedH}px`;
    projHeroImg.style.width = `${heroImgW}px`;
}

let animProjHero = gsap.fromTo(
    projHeroImg,
    {
        scale: 1,
        opacity: 0.4,
        y: "-2.75%",
    },
    {
        scale: clientW < 670 ? 0.2 : 0.33,
        opacity: 1,
        y: "-12.25%",
        scrollTrigger: {
            trigger: projHero,
            start: "top top",
            pin: projHero,
            endTrigger: externalCTA,
            end: "top top",
            scrub: true,
        },
    }
);

// fade out hero headings on scroll
let fadeHeadings = gsap.fromTo(
    projHeroHeadings,
    {
        opacity: 1,
    },
    {
        opacity: 0,
        scrollTrigger: {
            trigger: projHeroHeadings,
            start: "center center",
            endTrigger: projHeroHeadings,
            end: "center 30%",
            scrub: true,
        },
    }
);

// Project Challenges - Scroll Animation
// ===========================
const chalHeaderCont = document.querySelector(".js-chalHeaderCont"), // container for the section header
    chalHeader = document.querySelector(".js-chalHeader"), // section header
    projChallenge = document.querySelector(".js-projChallenge"), // container for the challenge section image
    chalVisual = document.querySelector(".js-chalVisual"), // challenge section image
    chalEnd = document.querySelector(".js-projChalEnd"), // challenge section image
    chalCopyCont = document.querySelector(".js-chalCopyCont"); // container for all of the challenge section written content

// get bottom of visual - used to end pin
const chalVisualH = chalVisual.offsetWidth / 2;
const windowHeight = window.innerHeight / 2;
const chalVisualBottom = windowHeight - chalVisualH;

// resize chalEnd container to = chalVisualH
const chalEndH = chalVisualH * 2;
chalEnd.style.height = `${chalEndH}px`;

// handle challenge heading
// ===========================
// pin section heading
let pinChalHeader = ScrollTrigger.create({
    trigger: chalHeaderCont,
    start: "top top",
    pin: chalHeader,
    endTrigger: projChallenge,
    end: "center center",
    scrub: true,
});

let fadeOut = gsap.fromTo(
    chalHeader,
    {
        opacity: 1,
        scale: 1,
    },
    {
        opacity: 0,
        scale: 0.9,
        scrollTrigger: {
            trigger: projChallenge,
            start: "top 70%",
            scrub: true,
            end: "top 50%",
        },
    }
);

// handle challenge visual
// ===========================
// pin image and handle hiding the heading
let pinChalVisual = ScrollTrigger.create({
    trigger: chalVisual,
    start: "center center",
    pin: chalVisual,
    endTrigger: chalEnd,
    end: `top ${chalVisualBottom}px`,
    scrub: true,
    pinSpacing: false,

    onEnter: () => {
        chalHeader.classList.add("u-visibly-hidden");
    },

    onLeaveBack: () => {
        chalHeader.classList.remove("u-visibly-hidden");
    },
});
