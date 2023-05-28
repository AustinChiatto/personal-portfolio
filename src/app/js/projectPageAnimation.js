// Project Hero - Scroll Animation
// ===========================

window.addEventListener('load', function() {
  handleHeroImg();
});

window.addEventListener('resize', function() {
  handleHeroImg();
});

const projHero = document.querySelector(".js-projHero"),
      projHeroImg = document.querySelector(".js-projHeroImg"),
      projHeroHeadings = document.querySelector(".js-projHeadings"),
      externalCTA = document.querySelector(".js-externalCTA");

function handleHeroImg() {
  const clientH = window.innerHeight, // get height of window
  percentageIncrease = 54.08,
  resizedH = clientH + (clientH * (percentageIncrease / 100)), // increase height based on the bezel & stand of the img
  heroImgH = projHeroImg.offsetHeight, // get height of hero image
  aspectRatio = projHeroImg.naturalWidth / projHeroImg.naturalHeight, // calculate aspect ratio of image
  heroImgW = resizedH * aspectRatio; // calculate corresponding width of image
  
  projHeroImg.style.height = `${resizedH}px`;
  projHeroImg.style.width = `${heroImgW}px`;
  console.log("height: " + heroImgH);
  console.log("width: " + heroImgW);
}

// let projHeroAnim = gsap.timeline({
//   scrollTrigger: {
//     trigger: projHero,
//     start: "top top",
//     pin: projHero,
//     endTrigger: externalCTA,
//     end: "top 30%",
//     scrub: true
//   }
// })

// projHeroAnim.from(projHeroImg, {scale: 1, y: '-2.75%'})
// projHeroAnim.to(projHeroImg, {scale: 0.33, y: '-12.25%'})

let animProjHero = gsap.fromTo(
  projHeroImg,
  {
    scale: 1,
    opacity: 0.4,
    y: '-2.75%',
  },
  {
    scale: 0.33,
    opacity: 1,
    y: '-12.25%',
    scrollTrigger: {
      trigger: projHero,
      start: "top top",
      pin: projHero,
      endTrigger: externalCTA,
      end: "top top",
      scrub: true
    }
  }
);

let fadeHeadings = gsap.fromTo(
  projHeroHeadings,
  {
    opacity: 1,
  },
  {
    opacity: 0,
    scrollTrigger: {
      trigger: projHeroImg,
      start: "center 45%",
      endTrigger: projHeroImg,
      end: "center 30%",
      scrub: true,
    }
});


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


