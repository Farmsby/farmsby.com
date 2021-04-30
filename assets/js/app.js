gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".images-container img");

gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  duration: 4,
  ease: "linear",
  scrollTrigger: {
    trigger: ".hero",
    start: "top top",
    end: () => innerHeight * 4,
    scrub: true,
    // pin: ".grid",
    anticipatePin: 1
  }
})