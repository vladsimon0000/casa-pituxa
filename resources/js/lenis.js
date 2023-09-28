import Lenis from '@studio-freight/lenis'

window.addEventListener("DOMContentLoaded", () => {
    // new SplitType("[text-split]", {
    //     types: "words",
    //     tagName: "span",
    // });
    window.matchMedia("(min-width: 767px)").matches &&
        $("[slide-up]").each(function () {
            let tl = gsap.timeline({
                paused: !0,
            });
            var triggerElement, timeline;
            tl.from($(this).find(".word"), {
                opacity: 0,
                yPercent: 75,
                duration: 1,
                lazy: !1,
                ease: "power2.out",
                stagger: {
                    amount: 0.35,
                    ease: "power2.in",
                },
            }),
                tl.from(
                    $(this).find(".h-section-content__p, .btn"),
                    {
                        opacity: 0,
                        duration: 1.1,
                        ease: "power2.inout",
                    },
                    "-=0.55",
                ),
                (triggerElement = $(this)),
                (timeline = tl),
                ScrollTrigger.create({
                    trigger: triggerElement,
                    start: "top bottom",
                    onLeaveBack: () => {
                        timeline.progress(0), timeline.pause();
                    },
                }),
                ScrollTrigger.create({
                    trigger: triggerElement,
                    start: "top 75%",
                    onEnter: () => timeline.play(),
                });
        }),
        $(".menu__item").each(function () {
            let tl = gsap.timeline({
                paused: !0,
            });
            var triggerElement, timeline;
            tl.from($(this).find(".word"), {
                opacity: 0,
                x: "1em",
                duration: 0.8,
                lazy: !1,
                ease: "power2.out",
                stagger: {
                    amount: 0.4,
                    ease: "power2.in",
                },
            }),
                tl.from(
                    $(this).find(".menu__item__title__dietary, .menu__item__title__price"),
                    {
                        opacity: 0,
                        duration: 1.1,
                        lazy: !1,
                        ease: "power2.inout",
                        stagger: {
                            amount: 0.15,
                        },
                    },
                    "-=0.6",
                ),
                (triggerElement = $(this)),
                (timeline = tl),
                ScrollTrigger.create({
                    trigger: triggerElement,
                    start: "top 90%",
                    onEnter: () => timeline.play(),
                });
        }),
        $(".nav-menu__links").each(function () {
            let tl = gsap.timeline({
                paused: !0,
            });
            tl.from($(this).find(".nav-menu__link-item__txt "), {
                opacity: 0,
                yPercent: 75,
                duration: 1,
                ease: "power2.out",
                stagger: {
                    amount: 0.35,
                    ease: "power2.in",
                },
            }),
                $(".navbar__menu-btn--close").on("click", function () {
                    $("body").removeClass("no-scroll-transition"),
                        setTimeout(function () {
                            tl.progress(0), tl.pause();
                        }, 400);
                }),
                $(".navbar__menu-btn--open").on("click", function () {
                    setTimeout(function () {
                        $("body").addClass("no-scroll-transition"), tl.play();
                    }, 200);
                });
        });
}),
(window.onpageshow = function (event) {
    event.persisted && window.location.reload();
}),
gsap.config({
    nullTargetWarn: !1,
});


"use strict";
const lenis = new Lenis({
    lerp: 0.15,
    wheelMultiplier: 1,
    infinite: false,
    gestureOrientation: "vertical",
    normalizeWheel: false,
    smoothTouch: false,
    smoothWheel: true
});
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);
$("[data-lenis-start]").on("click", function () {
    lenis.start();
});
$("[data-lenis-stop]").on("click", function () {
    lenis.stop();
});
$("[data-lenis-toggle]").on("click", function () {
    $(this).toggleClass("stop-scroll");
    if ($(this).hasClass("stop-scroll")) {
        lenis.stop();
    } else {
        lenis.start();
    }
});
function connectToScrollTrigger() {
    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    }
    );
}
connectToScrollTrigger();

lenis.stop();
window.addEventListener("DOMContentLoaded", function () {
    $(".hero-content").each(function () {
        let e = gsap.timeline({
            paused: !0
        });
        e.from($(this).find(".word"), {
            opacity: 0,
            yPercent: 75,
            duration: 1,
            ease: "power2.out",
            stagger: {
                amount: .35,
                ease: "power2.in"
            }
        }),
            e.from($(this).find(".hero-content__p, .btn"), {
                opacity: 0,
                duration: 1.1,
                ease: "power2.inout"
            }, "-=0.55"),
            setTimeout(function () {
                e.play(),
                    lenis.start();
            }, 2800)
    })
});
