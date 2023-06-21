const bioLine = new SplitType(".o-about-bio__copy", { types: "lines" });

const lines = document.querySelectorAll(".line");

lines.forEach((e, i) => {
    ScrollTrigger.create({
        trigger: e,
        start: "top 60%",
        end: "bottom 60%",
        onUpdate: (self) => {
            if (self.progress <= 0) {
                gsap.to(e, {
                    color: "#6E6E73",
                    duration: 0.2,
                });
            } else {
                gsap.to(e, {
                    color: "#eef0f2",
                    duration: 0.2,
                });
            }
        },
    });
});
