const card = document.querySelectorAll(".js-projectDetailCard"),
    contentPanel = document.querySelector(".js-contentPanel"),
    panelModal = document.querySelector(".js-panelModal"),
    ajaxWorkaround = document.querySelector(".js-ajaxWorkaround");

// set styling for animation
gsap.set(contentPanel, {
    display: "none",
    opacity: 0,
});

gsap.set(panelModal, {
    x: "100%",
});

// panel open
// ===========================
let panelOpen = gsap.timeline({ paused: true });

// if any card is clicked - open designated panel
card.forEach((e) => {
    e.addEventListener("click", (e) => {
        e.preventDefault();
        document.body.style.overflow = "hidden"; // hide body overflow - prevent scrolling when panel is open
        // stop smooth scrolling with lenis
        lenis.stop();

        const cardId = e.target.id;

        // Make an AJAX request to the PHP file
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const content = xhr.responseText;
                contentPanel.innerHTML = content;
                // open panel animation
                // ===========================
                panelOpen
                    .to(contentPanel, {
                        display: "grid",
                        opacity: 1,
                        background: "#0f0f0f25",
                        backdropFilter: "blur(0.5rem)",
                        duration: 0.2,
                        ease: "power1.out",
                    })
                    .to(panelModal, {
                        x: 0,
                        duration: 0.2,
                        ease: "power1.out",
                    });

                panelOpen.play();
            }
        };
        xhr.open("GET", `src/partials/shared/molecule/content-panel.php?cardId=${cardId}`, true);
        xhr.send();
    });
});

// panel close
// ===========================
let panelClose = gsap.timeline({ paused: true });

// close panel if user clicks outside of panel
contentPanel.addEventListener("click", (e) => {
    if (!panelModal.contains(e.target)) {
        document.body.style.overflow = ""; // show body overflow
        closeAnimation();
    }
});

// close panel if user clicks the close icon
document.querySelector(".js-panelClose").addEventListener("click", closeAnimation);

// function that runs the close animation - used in the above event handlers
function closeAnimation() {
    lenis.start(); // start lenis smooth scroll
    panelClose
        .to(panelModal, {
            x: "100%",
            duration: 0.2,
            ease: "power1.out",
        })
        .to(
            contentPanel,
            {
                display: "none",
                opacity: 0,
                backdropFilter: "blur(0rem)",
                duration: 0.2,
                ease: "power1.out",
            },
            "<"
        );

    panelClose.play();
}
