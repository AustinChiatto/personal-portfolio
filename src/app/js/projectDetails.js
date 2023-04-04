// global variables
// ===========================

const processContainer = document.querySelectorAll(".js-process-container");
const processBtn = document.querySelectorAll(".js-process-btn");

// Process tab interaction
// ===========================

// hide all tabs without the js-active tag
for (i = 0; i < processContainer.length; i++) {
    processContainer[i].style.display = "none";
    processContainer[0].style.display = "block";
}

// remove the class js-active from all buttons
for (i = 0; i < processBtn.length; i++) {
    processBtn[i].classList.remove("js-active");
    // add js-active to the first button
    processBtn[0].classList.add("js-active");
}

// loops through all of the cards buttons
processBtn.forEach((e, index) => {
    // waits for click
    e.addEventListener("click", () => {
        // removes js-active from all buttons
        for (i = 0; i < processBtn.length; i++) {
            processBtn[i].classList.remove("js-active");
        }

        // adds js-active to the button that is clicked
        e.classList.add("js-active");

        // removes all processContainers
        for (i = 0; i < processContainer.length; i++) {
            processContainer[i].style.display = "none";
        }

        // displays the container that matches the index of the button clicked
        processContainer[index].style.display = "block";
    });
});