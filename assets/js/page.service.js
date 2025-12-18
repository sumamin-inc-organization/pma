document.addEventListener("DOMContentLoaded", function () {
	var worksSwiper = new Swiper(".worksSwiper", {
		slidesPerView: 1.2, // 1要素＋次の要素が0.2見える
		spaceBetween: 10, // スマホ時の余白
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},

		breakpoints: {
			768: {
				enabled: false, // PCはカルーセル無効化
				slidesPerView: "auto",
				spaceBetween: 0,
			},
		},
	});
});
