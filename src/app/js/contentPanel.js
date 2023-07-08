const card = document.querySelectorAll(".js-projectDetailCard"),
    contentPanel = document.querySelector(".js-contentPanel"),
    panelModal = document.querySelector(".js-panelModal");

gsap.set(contentPanel, {
    display: "none",
    opacity: 0,
});

gsap.set(panelModal, {
    x: "100%",
});

// initialize panel timelines
let panelOpen = gsap.timeline({ paused: true });
let panelClose = gsap.timeline({ paused: true });

card.forEach((e) => {
    e.addEventListener("click", (e) => {
        e.preventDefault();
        document.body.style.overflow = "hidden"; // hide body overflow - prevent scrolling when panel is open
        // stop smooth scrolling with lenis
        lenis.stop();
        // open panel animation
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
    });
});

contentPanel.addEventListener("click", (e) => {
    if (!panelModal.contains(e.target)) {
        document.body.style.overflow = ""; // show body overflow
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
});
