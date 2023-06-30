// Project List Animation
// ===========================

const intro = document.querySelector(".js-projectListIntro");
const listHeading = document.querySelector(".js-projectListHeading");
const projectList = document.querySelector(".js-projectList");
const projectListBtn = document.querySelector(".js-projectListIntroBtn");

// pin section heading
let listHeadingPin = ScrollTrigger.create({
    trigger: listHeading,
    start: "center center",
    pin: intro,
    endTrigger: ".js-projectListTrigger",
    end: "bottom 25%",
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
            start: "bottom 45%",
            scrub: true,
            end: "bottom 35%",
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
            start: "top 60%",
            scrub: true,
            end: "top center",
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
            start: "bottom 45%",
            scrub: true,
            end: "bottom 35%",
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
        listHeading.textContent = "See more of what I enjoy doing";
        // checks if the project button is present on the page
        if (projectListBtn) {
            projectListBtn.classList.remove("u-visibly-hidden");
        }
    },

    // check if card re-enters the scroll trigger
    onLeaveBack: () => {
        listHeading.innerHTML = 'My latest <span class="a-text--highlight">imposter syndrome <br> inducing</span> projects';
        // checks if the project button is present on the page
        if (projectListBtn) {
            projectListBtn.classList.add("u-visibly-hidden");
        }
    },
});

// handle content panel
// ===========================
