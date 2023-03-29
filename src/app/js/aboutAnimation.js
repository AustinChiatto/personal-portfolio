const bioLine = new SplitType('.o-about-bio__copy', { types: 'lines' });

// gsap.to(".line", {
//     color: "#eef0f2",
//     stagger: 0.05,
//     delay: 0.1,
//     duration: 0.02
// });

// let stickyProjectHeading = ScrollTrigger.create({
//     trigger: projectHeadline,
//     start: "top top",
//     pin: ".js-pin-headline",
//     endTrigger: projectList,
//     end: "bottom top",
// });

// animation: gsap.to(e, {
//     color: '#eef0f2'
//     }),

const lines = document.querySelectorAll('.line');

lines.forEach((e, i) => {
  ScrollTrigger.create({
    trigger: e,
    start: 'top 60%',
    end: 'bottom 60%',
    onUpdate: (self) => {
        if (self.progress <= 0) {
          gsap.to(e, {
            color: "#6E6E73",
            duration: 0.2
          });
        // } else if (self.progress >= 1) {
        //     gsap.to(e, {
        //       color: "#6E6E73",
        //       duration: 0.2
        //     });
        } else {
          gsap.to(e, {
            color: "#eef0f2",
            duration: 0.2
          });
        }
      }  
  });
});

