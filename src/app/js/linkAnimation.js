// // link hover

// const linkArray = document.querySelectorAll('.js-link');
// const linkText = new SplitType('.js-link', { types: 'chars' });


// linkArray.forEach(e => {

//     let eChar = gsap.utils.toArray(e.querySelectorAll(".char"));

//         let linkHover = gsap.timeline();
//         linkHover.from(eChar, {duration: 0.02, y:0, opacity: 1, stagger: 0.05});
//         linkHover.to(eChar, {duration: 0, y: "100%", opacity: 0, stagger: 0.05});
//         linkHover.to(eChar, {duration: 0.02, y: 0, opacity: 1, stagger: 0.05});

//         linkHover.paused();
        
//     e.addEventListener('mouseenter', () => {
//         linkHover.play();
//     });

//     e.addEventListener('mouseleave', () => {
//         linkHover.reverse();
//     });
// });