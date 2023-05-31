window.addEventListener('load', function() {
  handleHeroImg();
});

window.addEventListener('resize', function() {
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
    resizedH = clientH + (clientH * (percentageIncrease / 100)), // increase height based on the bezel & stand of the img
    aspectRatio = projHeroImg.naturalWidth / projHeroImg.naturalHeight, // calculate aspect ratio of image
    heroImgW = resizedH * aspectRatio; // calculate corresponding width of image

  if (clientW > 560) {
    projHeroImg.style.height = `${resizedH}px`;
    projHeroImg.style.width = `${heroImgW}px`;
  } else {
    projHeroImg.style.height = 'auto';
    projHeroImg.style.width = '100%';
    heroImgCont.style.position = 'relative';
  }
}

if (clientW > 560) {
  let animProjHero = gsap.fromTo(
    projHeroImg,
    {
      scale: 1,
      opacity: 0.4,
      y: '-2.75%',
    },
    {
      scale: (clientW < 670) ? 0.2 : 0.33,
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
}

// fade out hero headings on scroll
let fadeHeadings = gsap.fromTo(
  projHeroHeadings,
  {
    opacity: 1,
    y: 0
  },
  {
    opacity: 0,
    y: '-15%',
    scrollTrigger: {
      trigger: projHeroHeadings,
      start: "center center",
      endTrigger: projHeroHeadings,
      end: "center 40%",
      scrub: true,
    }
});


// Project Challenges - Scroll Animation
// ===========================
const chalHeaderCont = document.querySelector('.js-chalHeaderCont'), // container for the section header
      chalHeader = document.querySelector('.js-chalHeader'), // section header
      chalImgCont = document.querySelector(".js-chalImgCont"), // container for the challenge section image
      chalImg = document.querySelector(".js-chalImg"), // challenge section image
      chalCopyCont = document.querySelector(".js-chalCopyCont"); // container for all of the challenge section written content



// pin section heading
let pinChalHeader = ScrollTrigger.create({
  trigger: chalHeaderCont,
  start: "top top",
  pin: chalHeader,
  endTrigger: chalImgCont,
  end: "bottom top",
  scrub: true
});

// pin image and handle hiding the heading
let pinChalImg = ScrollTrigger.create({
  trigger: chalImgCont,
  start: "center center",
  pin: chalImgCont,
  endTrigger: chalCopyCont,
  end: "bottom top",
  scrub: true,
  pinSpacing: false,

  onEnter: () => { 
    chalHeader.classList.add("u-visibly-hidden");
  },

  onLeaveBack: () => {
    chalHeader.classList.remove("u-visibly-hidden");
  },

  // ! need to write a refresh method as the heading stays hidden if the browser
  // ! is refreshed midway through the animation. - it makes leaveBack not work.
  // onRefresh() {
  //   chalHeader.classList.remove("u-visibly-hidden");
  // }
});

// handle image slide in when scrolling out of the challenge section
let chalImgSlideIn = gsap.fromTo(
  chalImg,
  {
    x: (clientW < 670) ? '-80%' : '-70%'
  },
  {
    x: 0,
    scrollTrigger: {
      trigger: chalCopyCont,
      start: "bottom center",
      endTrigger: chalCopyCont,
      end: "bottom top",
      scrub: true,
    },

    // ? solution for a bug causing the image to get stuck in slide out position if reloaded inside of the section.
    // reset to original position if refreshed inside of animation.
    onRefresh() {
      gsap.to(chalImg, {x: 0})
    }
  }
);

// handle image slide out when scrolling into the challenge section
let chalImgSlideOut = gsap.fromTo(
  chalImg,
  {
    x: 0
  },
  {
    x: (clientW < 670) ? '-80%' : '-70%',
    scrollTrigger: {
      trigger: chalCopyCont,
      start: "top 65%",
      endTrigger: chalCopyCont,
      end: "top top",
      scrub: true,
    }
  }
);