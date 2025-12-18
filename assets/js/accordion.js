$("nav .is-icon").click(function () {
	$("nav .is-icon").not(this).removeClass("open");
	$(this).next("nav .js-accordion").slideToggle();
	$("nav .js-accordion").not($(this).next()).slideUp();
	$(this).toggleClass("open");
});

$(".toggle-icon__wrap").click(function () {
	console.log("slideUp");
	$(".toggle-icon__wrap .toggle-icon")
		.not($(this).find(".toggle-icon"))
		.removeClass("open");
	$(this).next("nav .js-accordion").slideToggle();
	$("nav .js-accordion").not($(this).next()).slideUp();
	$(this).find(".toggle-icon").toggleClass("open");
});

$("footer .is-icon").click(function () {
	$("footer .is-icon").not(this).removeClass("open");
	$(this).next("footer .js-accordion").slideToggle();
	$("footer .js-accordion").not($(this).next()).slideUp();
	$(this).toggleClass("open");
});

//details summaryのアニメーション
document.addEventListener("DOMContentLoaded", () => {
	if (document.querySelectorAll(".details").length > 0) {
		document.querySelectorAll(".details").forEach(function (el) {
			const summary = el.querySelector(".summary");
			const answer = el.querySelector(".answer");
			summary.addEventListener("click", (event) => {
				// デフォルトの挙動を無効化
				event.preventDefault();
				// detailsのopen属性を判定
				if (el.getAttribute("open") !== null) {
					// アコーディオンを閉じるときの処理
					const closingAnim = answer.animate(
						closingAnimation(answer),
						animTiming
					);

					closingAnim.onfinish = () => {
						// アニメーションの完了後にopen属性を取り除く
						el.removeAttribute("open");
					};
				} else {
					// open属性を付与
					el.setAttribute("open", "true");
					// アコーディオンを開くときの処理
					const openingAnim = answer.animate(
						openingAnimation(answer),
						animTiming
					);
				}
			});
		});
	}
});

// アニメーションの時間とイージング
const animTiming = {
	duration: 300,
	easing: "ease-in-out",
};

// アコーディオンを閉じるときのキーフレーム
const closingAnimation = (answer) => [
	{
		height: answer.offsetHeight + "px",
		opacity: 1,
	},
	{
		height: 0,
		opacity: 0,
	},
];

// アコーディオンを開くときのキーフレーム
const openingAnimation = (answer) => [
	{
		height: 0,
		opacity: 0,
	},
	{
		height: answer.offsetHeight + "px",
		opacity: 1,
	},
];

function setHeight() {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
}

setHeight();
window.addEventListener("resize", setHeight);
