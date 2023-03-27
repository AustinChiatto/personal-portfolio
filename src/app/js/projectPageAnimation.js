let projectAnimTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: ".js-project-anim",
      pin: true,   // pin the trigger element while active
      start: "top top", // when the top of the trigger hits the top of the viewport
      scrub: true,
      end: "+=2000", // end after scrolling 500px beyond the start
    }
  });
  
  projectAnimTimeline.to(".js-project-anim__container", {opacity: 1});
  projectAnimTimeline.to(".js-project-anim__container", {rotate: 90, borderColor: "#9fa3a7"});
  projectAnimTimeline.to(".js-project-anim__item", {opacity: 0}, "<");
  projectAnimTimeline.to(".js-project-anim__container", {aspectRatio: "1.5/1"});
  projectAnimTimeline.to(".js-project-anim__container", {rotate: 180});
  projectAnimTimeline.to(".js-project-anim__container", {opacity: 0, duration: 1});

// milestone side scroller
// let projectMilestoneTrigger = ScrollTrigger.create({
//     trigger: ".js-project-milestones",
//     start: "top top",
//     pin: true,
//     end: "+=1000"
//   });
  
//   let horizontalSection = gsap.utils.toArray(".o-milestones__section");
  
//   gsap.to(horizontalSection, {
//     xPercent: -100 * (horizontalSection.length - 1),
//     ease: "none",
//     scrollTrigger: {
//       trigger: ".o-milestones",
//       pin: true,
//       scrub: 1,
//     //   snap: 1 / (horizontalSection.length - 1),
//       // ! get width of window and multiply it by number of sections and then enter that value below instead of this fixed value
//       end: "+=3500",
//     }
//   });