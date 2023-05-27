// Project Challenges - Scroll Animation
// ===========================

const chalHeaderCont = document.querySelector('.js-chalHeaderCont'),
      chalHeader = document.querySelector('.js-chalHeader'),
      chalImgCont = document.querySelector(".js-chalImgCont"),
      chalImg = document.querySelector(".js-chalImg"),
      chalCopyCont = document.querySelector(".js-chalCopyCont"),
      chalCopy = document.querySelector(".js-chalCopy"),
      chalCopyTrig = document.querySelector(".js-chalCopyTrig");

// header pin
let pinChalHeader = ScrollTrigger.create({
  trigger: chalHeaderCont,
  start: "top top",
  pin: chalHeader,
  endTrigger: chalImgCont,
  end: "bottom top",
  scrub: true
});

// img pin
let pinChalImg = ScrollTrigger.create({
  trigger: chalImgCont,
  start: "center center",
  pin: chalImgCont,
  endTrigger: chalCopyCont,
  end: "bottom bottom",
  scrub: true,
  pinSpacing: false,

  onEnter: function() { 
      chalHeader.classList.add("u-visibly-hidden");
    },
  onLeaveBack: function() {
    chalHeader.classList.remove("u-visibly-hidden");
  }
});

// slide in and out animations
let slideOutChalImg = gsap.to(
  chalImg,
  {
  scrollTrigger: {
    trigger: chalImg,
    start: "center center",
    endTrigger: chalCopyCont,
    end: "top 30%",
    scrub: true,
  },
  x: '-60%'
});


