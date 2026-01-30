// GSAP と ScrollTrigger 読み込み
gsap.registerPlugin(ScrollTrigger);

// gsap アニメーション
gsap.to("#js-rotate", {
	rotation: 360,
	duration: 20,
	repeat: -1,
	ease: "none",
});

/* Fade In Pop Up */
const fadeInText = document.querySelectorAll(".js-fadeIn");

if (fadeInText.length > 0) {
	fadeInText.forEach((element) => {
		ScrollTrigger.create({
			trigger: element,
			start: element.getAttribute("data-trigger") || "top 80%",
			onEnter: () => {
				gsap.to(element, {
					x: 0,
					y: 0,
					autoAlpha: 1,
					duration: 0.7,
					ease: "power2.inOut",
				});
			},
		});
	});
}

const lineTriggers = document.querySelectorAll(".js-border");

if (lineTriggers.length > 0) {
	lineTriggers.forEach((element) => {
		ScrollTrigger.create({
			trigger: element,
			start: "top 80%",
			onEnter: () => {
				element.classList.add("active");
			},
		});
	});
}