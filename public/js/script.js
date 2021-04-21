new Glider(document.querySelector('.glider'), {
    slidesToShow: 4,
    draggable: true,
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    }
});

gsap.from(".glider", {duration: 1, ease: "bounce.out",y: -200});

gsap.registerPlugin(ScrollTrigger);

gsap.to(".filmOverlay", {
    scrollTrigger: ".filmOverlay",
    opacity: 1,
    stagger: 0.3,
    duration:1
});



