// Project-List
// ===========================

// global variables
const projectList = document.querySelector(".js-projects-list");
const projectHeadline = document.querySelector(".js-project-headline");
const projectListHeading = document.querySelector(".js-project-headline h2");
const projectListBtn = document.querySelector(".js-project-headline .a-button");
const projectListItem = document.querySelectorAll(".js-projects-list__item");
const projectCard = document.querySelectorAll(".js-project-card");
let lastCard = projectCard[projectCard.length - 1];


// GSAP scroll trigger
let stickyProjectHeading = ScrollTrigger.create({
    trigger: projectHeadline,
    start: "top top",
    pin: ".js-pin-headline",
    endTrigger: projectList,
    end: "bottom top"
});

let headingChange = ScrollTrigger.create({
    trigger: lastCard,
    start: "center center",
    end: "center center",

    // check when card leaves the scroll trigger
    onLeave: function() { 
        projectListHeading.textContent = 'See more of what I enjoy doing'
        projectListBtn.classList.remove("u-visually-hidden");
      },

      // check if card re-enters the scroll trigger
      onLeaveBack: function() { 
        projectListHeading.innerHTML = 'My latest <span class="a-heading--highlight">imposter <br> syndrome inducing</span> projects';
        projectListBtn.classList.add("u-visually-hidden");
      }
});

// todo:
  // create new scroll triggers for first and last cards
    // this is to track their position on the page for the headline dim/reveal transitions
  // add card rotation or subtle animations
  // add hover effect
    // backdrop blur circle