// Barba Page Transitions
// ===========================
// const loadingScreen = document.querySelector('.m-barba-transition')

// function pageTransitionIn() {
//   return gsap
//     .to(loadingScreen, { duration: .5, scaleY: 1, transformOrigin: 'bottom left'})
// }
// function pageTransitionOut(container) {
//   return gsap
//     .timeline({ delay: 1 })
//     .add('start')
//     .to(loadingScreen, {
//       duration: 0.5,
//       scaleY: 0,
//       skewX: 0,
//       transformOrigin: 'top left',
//       ease: 'power1.out'
//     }, 'start')
//     .call(contentAnimation, [container], 'start')
// }


// function contentAnimation(container) {
//   $(container.querySelector('.green-heading-bg')).addClass('show')
//   return gsap
//     .timeline()
//     .from(container.querySelector('.is-animated'), {
//       duration: 0.5,
//       translateY: 10,
//       opacity: 0,
//       stagger: 0.4
//     })
//     .from(mainNavigation, { duration: .5, translateY: -10, opacity: 0})
// }
  // barba.init({

  //   transitions: [{

  //     async leave(data) {

  //       pageTransitionIn()

  //     },

  //     async enter(data) {
  //       pageTransitionOut()
  //     },

  //     // async once(data) {
  //     //   contentAnimation();
  //     // }
  //   }]
  // });





// get each card
// loop through card array
// check when current card is in middle of screen
// change text based on card

// Project Page
// ===========================

// let projectAnimTrigger = ScrollTrigger.create({
//   trigger: ".js-project-anim",
//   start: "top top",
//   pin: true,
//   end: "+=1000"
// });






