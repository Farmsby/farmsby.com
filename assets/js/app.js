$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 1000) {
        $("header.ps-fixed").addClass("transparent");
    } else {
        $("header.ps-fixed").removeClass("transparent");
    }
});


// $(window).scroll(function() {    
//   var scroll = $(window).scrollTop();
//   if (scroll >= 1400) {
//       $("__buttons").addClass("active");
//   } else {
//       $("__buttons").removeClass("active");
//   }
// });


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

let cardsSections = gsap.utils.toArray(".card-view");

gsap.to(cardsSections, {
  xPercent: -100 * (cardsSections.length - 1),
  duration: 2,
  ease: "linear",
  scrollTrigger: {
    trigger: ".pushdown-x2 ul",
    start: "top top",
    end: () => innerHeight * 4,
    scrub: true,
    pin: ".carholder",
    anticipatePin: 1
  }
})


// let cardsButtons = gsap(".__buttons");

// gsap.to(cardsButtons, {
//   position: "fixed",
//   duration: 2,
//   ease: "linear",
//   scrollTrigger: {
//     trigger: ".pushdown-x2 ul",
//     start: "top top",
//     end: () => innerHeight * 4,
//     scrub: true,
//     pin: ".carholder",
//     anticipatePin: 1
//   }
// })