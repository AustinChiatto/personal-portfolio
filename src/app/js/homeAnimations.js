// Home hero circle animations
// ===========================

const jsCircle = document.querySelector(".js-circle");
const textTop = document.querySelector(".js-home-hero__text-top");
const textBot = document.querySelector(".js-home-hero__text-bottom");

let homeCircle = gsap.timeline({
    scrollTrigger: {
      trigger: ".js-home-hero",
      pin: true,
      start: "top top",
      scrub: true,
      end: "+=2000",
      
      onUpdate(){
        currentRotation = gsap.getProperty(jsCircle, "rotateZ");

        if(currentRotation >= 180){
            textTop.textContent = "On The Web";
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

