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

// Project-List
// ===========================

// global variables
const projectList = document.querySelector(".js-projects-list");
const projectHeadline = document.querySelector(".js-project-headline");
const projectListHeading = document.querySelector(".js-project-headline h2");
const projectListBtn = document.querySelector(".js-project-headline .a-button");
const projectListItem = document.querySelectorAll(".js-projects-list__item");
const projectCard = document.querySelectorAll(".js-project-card");

// GSAP scroll trigger
let stickyProjectHeading = ScrollTrigger.create({
    trigger: projectHeadline,
    start: "top top",
    pin: ".js-pin-headline",
    endTrigger: projectList,
    end: "bottom top"
});

let headingChange = ScrollTrigger.create({
    trigger: projectList,
    start: "bottom bottom",
    end: "bottom bottom",

    onLeave: function() { 
        console.log('End');
        projectListHeading.textContent = 'See more of what I enjoy doing'
        projectListBtn.classList.remove("u-visually-hidden");
      },
      onLeaveBack: function() { 
        console.log('Start')
        projectListHeading.innerHTML = 'My latest <span class="a-heading--highlight">imposter <br> syndrome inducing</span> projects';
        projectListBtn.classList.add("u-visually-hidden");
      }
});

// get each card
// loop through card array
// check when current card is in middle of screen
// change text based on card

