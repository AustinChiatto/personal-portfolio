// Home hero circle animations
// ===========================

const jsCircle = document.querySelector(".js-circle");
const textTop = document.querySelector(".js-home-hero__text-top");
const textBot = document.querySelector(".js-home-hero__text-bottom");

let homeCircle = gsap.timeline({
    scrollTrigger: {
      trigger: ".js-home-hero",
      pin: true,   // pin the trigger element while active
      start: "top top", // when the top of the trigger hits the top of the viewport
      scrub: true,
      end: "+=2000", // end after scrolling 500px beyond the start
      
      onUpdate(){
        console.log(gsap.getProperty(jsCircle, "rotateZ"));

        currentRotation = gsap.getProperty(jsCircle, "rotateZ");

        if(currentRotation >= 180){
            console.log("half way");
            textTop.textContent = "On The Web";
            // document.querySelector(".js-home-scroll-fade").style.color = "#6E6E73";
            // document.querySelector(".js-home-scroll-hide").style.opacity = 0;
        } else {
            textTop.textContent = "Building Things";
        }
      }
    }
  });
  
  homeCircle.to(jsCircle, {rotateZ: 360});
  homeCircle.to(".js-home-scroll-hide", {opacity: 0} ,"<");

  







// Home
// ===========================
// const homeHero = document.querySelector('.js-home-hero');
// const homeHeroText = new SplitType('.js-home-hero-text');

// gsap.to(".word", {
//     y:0,
//     opacity: 1,
//     stagger: 0.05,
//     delay: 0.1,
//     duration: 0.02
// });

