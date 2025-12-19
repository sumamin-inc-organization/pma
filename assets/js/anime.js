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
			top: element.getAttribute("data-trigger") || "top 80%",
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

//慣性スクロールはstickyが効かなくなるため一旦無効化
// gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
// let smoothValue = 1.4; // デフォルトは慣性あり

// // 簡易判定：スマホなら慣性オフ
// if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
// 	smoothValue = 0; // 0にすると慣性なし、ネイティブスクロールに近い
// }

// const smoother = ScrollSmoother.create({
// 	wrapper: ".body_inner", // body をラップした要素
// 	content: ".mainContent", // 実際にスクロールさせる要素
// 	smooth: smoothValue, // 慣性の強さ
// 	effects: true, // data-speed, data-lag の効果も有効
// });
