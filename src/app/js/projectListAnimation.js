// Project-List
// ===========================

// global variables
const projectList = document.querySelector(".js-projects-list");
const projectHeadline = document.querySelector(".js-project-headline");
const projectListHeading = document.querySelector(".js-project-heading");
const projectListBtn = document.querySelector(".js-project-headline .a-button");
const projectListItem = document.querySelectorAll(".js-projects-list__item");
const projectCard = document.querySelectorAll(".js-project-card");
const lastCard = projectCard[projectCard.length - 1];
const firstCard = projectCard[0];
const currentLocation = window.location.pathname;



// GSAP scroll trigger
let stickyProjectHeading = ScrollTrigger.create({
    trigger: projectHeadline,
    start: "top top",
    pin: ".js-pin-headline",
    endTrigger: projectList,
    end: "bottom top",
});

// headline fade out
// ===========================
let fadeOut = gsap.timeline({
  scrollTrigger: {
    trigger: firstCard,
    start: "top 75%",
    // markers: true,
    scrub: true,
    end: "top 30%"
  }
});

fadeOut.from(projectListHeading, {opacity: 1, y: 0});
fadeOut.to(projectListHeading, {opacity: 0, y: 10});
fadeOut.to(projectListHeading, {y: -10});

// headline fade In
// ===========================
let fadeIn = gsap.timeline({
  scrollTrigger: {
    trigger: lastCard,
    start: "bottom 45%",
    // markers: true,
    scrub: true,
    end: "bottom 20%"
  }
});

fadeIn.to(projectListHeading, {opacity: 1, y: 0}, "<");
fadeIn.from(projectListBtn, {opacity: 0, y: -10}, "<");
fadeIn.to(projectListBtn, {opacity: 1, y: 0}, "<");


let headingChange = ScrollTrigger.create({
  trigger: lastCard,
  start: "center center",
  end: "center center",

  // check when card leaves the scroll trigger
  onLeave: function() { 
    // checks if current page is the all-projects page or not
    if (currentLocation.includes("all-projects")){
    } else {
      projectListHeading.textContent = 'See more of what I enjoy doing'
      projectListBtn.classList.remove("u-visually-hidden");
    }
    },

    // check if card re-enters the scroll trigger
    onLeaveBack: function() { 
      if (currentLocation.includes("all-projects")){
      } else {
        projectListHeading.innerHTML = 'My latest <span class="a-heading--highlight">imposter <br> syndrome inducing</span> projects';
        projectListBtn.classList.add("u-visually-hidden");
      }
    }
});

