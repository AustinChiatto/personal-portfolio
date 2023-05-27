// Global Variables
// ===========================
const projectList = document.querySelector(".js-projects-list"),
      projectHeadline = document.querySelector(".js-project-headline"),
      projectListHeading = document.querySelector(".js-project-heading"),
      projectListBtn = document.querySelector(".js-project-headline .a-button"),
      projectListItem = document.querySelectorAll(".js-projects-list__item"),
      projectCard = document.querySelectorAll(".js-project-card"),
      lastCard = projectCard[projectCard.length - 1],
      firstCard = projectCard[0],
      currentLocation = window.location.pathname;

// Pinned Heading
// ===========================
let stickyProjectHeading = ScrollTrigger.create({
    trigger: projectHeadline,
    start: "top top",
    pin: ".js-pin-headline",
    endTrigger: projectList,
    end: "bottom top",
});

// heading fade out
// ===========================
let fadeOut = gsap.timeline({
  scrollTrigger: {
    trigger: firstCard,
    start: "top 75%",
    scrub: true,
    end: "top 30%"
  }
});

// fadeOut timeline
fadeOut.from(projectListHeading, {opacity: 1, y: 0});
fadeOut.to(projectListHeading, {opacity: 0, scale: 0.9});
fadeOut.to(projectListHeading, {scale: 0.9, color: "#6E6E73"});

// headline fade In
// ===========================
let fadeIn = gsap.timeline({
  scrollTrigger: {
    trigger: lastCard,
    start: "bottom 30%",
    scrub: true,
    end: "bottom -30%"
  }
});

// fadeIn timeline
fadeIn.to(projectListHeading, {opacity: 1, scale: 1});
fadeIn.to(projectListHeading, {color: "#eef0f2"}, "<");
fadeIn.from(projectListBtn, {opacity: 0, scale: 0.9}, "<");
fadeIn.to(projectListBtn, {opacity: 1, scale: 1});


// Change text content of heading
// ===========================
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
