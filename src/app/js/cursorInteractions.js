// get cursor position
// if cursor position enters card
// display hover interaction (if screen size > mobile)



const cursorFollow = document.querySelector(".a-cursor-follower");
const projCard = document.querySelectorAll(".js-project-list-item");

// gsap.to(cursorFollow, {x:e.clientX, y:e.clientY, duration: 0.5, ease:"sine.inout"});

// window.addEventListener("mousemove", (e) => {

//     const xPos = e.clientX;
//     const yPos = e.clientY;

//     projCard.forEach((item) => {
        
//         const cardBounds = item.getBoundingClientRect();
//         const top = cardBounds.top;
//         const bottom = cardBounds.bottom;
//         const right = cardBounds.right;
//         const left = cardBounds.left;
    
//         if(xPos <= right && xPos >= left && yPos >= top && yPos <= bottom){
//             gsap.to(cursorFollow, {x: xPos, y: yPos, opacity: 1, duration: 0.5, ease:"sine.inout"});
//             console.log("in");
//         } else {
//             // gsap.to(cursorFollow, {opacity: 0});
//             console.log("out");
//         }
//     });

// });


// window.addEventListener("mousemove", (e) => {
//     projCard.forEach(element => {
//         element.addEventListener("mouseover", (e) => {
//             console.log("in");
//         })
//     });
// });








