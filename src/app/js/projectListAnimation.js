// Project List Animation
// ===========================

const intro = document.querySelector(".js-projectListIntro");
const listHeading = document.querySelector(".js-projectListHeading");
const projectList = document.querySelector(".js-projectList");
const projectListBtn = document.querySelector(".js-projectListIntroBtn");
const clientW = window.innerWidth; // get width of window

// pin section heading
let listHeadingPin = ScrollTrigger.create({
    trigger: listHeading,
    start: "center center",
    pin: intro,
    endTrigger: ".js-projectListTrigger",
    end: "bottom 35%",
    scrub: true,
    pinSpacing: false,
});

let fadeIn = gsap.fromTo(
    listHeading,
    {
        opacity: 0,
        scale: 0.9,
    },
    {
        opacity: 1,
        scale: 1,
        scrollTrigger: {
            trigger: ".js-projectListTrigger",
            start: "bottom 65%",
            scrub: true,
            end: "bottom 40%",
        },
    }
);

let fadeOut = gsap.fromTo(
    listHeading,
    {
        opacity: 1,
        scale: 1,
    },
    {
        opacity: 0,
        scale: 0.9,
        scrollTrigger: {
            trigger: ".js-projectListTrigger",
            start: "top 40%",
            scrub: true,
            end: "top 30%",
        },
    }
);

// fade project button in
// ===========================
// only need fade in as the button gets visibly hidden on leaveBack
let fadeBtnIn = gsap.fromTo(
    projectListBtn,
    {
        opacity: 0,
        scale: 0.9,
    },
    {
        opacity: 1,
        scale: 1,
        scrollTrigger: {
            trigger: ".js-projectListTrigger",
            start: "bottom 65%",
            scrub: true,
            end: "bottom 40%",
        },
    }
);

// Change text content of heading
// ===========================

let handleIntroChange = ScrollTrigger.create({
    trigger: ".js-projectListTrigger",
    start: "center center",
    end: "center center",

    // check when card leaves the scroll trigger
    onLeave: () => {
        listHeading.textContent = "See More Of What I Love To Do";
        // checks if the project button is present on the page
        if (projectListBtn) {
            projectListBtn.classList.remove("u-visibly-hidden");
        }
    },

    // check if card re-enters the scroll trigger
    onLeaveBack: () => {
        listHeading.innerHTML = "Featured Projects";
        // checks if the project button is present on the page
        if (projectListBtn) {
            projectListBtn.classList.add("u-visibly-hidden");
        }
    },
});

// handle content panel
// ===========================
