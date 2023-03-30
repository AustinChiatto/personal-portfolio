// get cursor position
// if cursor position enters card
// display hover interaction (if screen size > mobile)

// const follower = document.querySelector(".a-cursor-follower");
// // const follerWidth = follower.offsetWidth / 2;
// const projCard = document.querySelectorAll(".js-project-card");
// let inside = false;

// projCard.forEach((e) => {
//     e.addEventListener("mouseenter", () => {
//         gsap.to(follower, {opacity: 1, duration: 0.3});
//         inside = true;
//     });
    
//     e.addEventListener("mousemove", (e) => {
//         inside = true;
//         gsap.to(follower, {x:(e.clientX ), y:(e.clientY ), duration: 0.5, ease:"sine.inout"});
//     });

//     e.addEventListener("mouseout", () => {
//         gsap.to(follower, {opacity: 0, duration: 0.3});
//         inside = false;
//     });
// });

// window.addEventListener("mousemove", () => {
//     if(inside) {
//         gsap.to(follower, {opacity: 1, duration: 0.2});
//     } else {
//         gsap.to(follower, {opacity: 0, duration: 0.2});
//     }
// });