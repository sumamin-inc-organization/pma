// 固定ヘッダーをコンテンツエリアに入った時に見た目を変更する
$(document).ready(function () {
	$(window).on("scroll", function () {
		var footerStart = $(document).height() - $(".footer").height();
		var elementTop = $(".kv").height();
		if ($(".first_section").length > 0) {
			elementTop = getElementTop($(".first_section")[0]);
		}
		if (
			$(".kv").height() < $(this).scrollTop() ||
			elementTop < $(this).scrollTop()
		) {
			$(".header__inner").addClass("fixType");
			$(".headerList__item").addClass("black");
			$(".headerMenu").addClass("black");
			$(".logo_img02").fadeIn(500);
			$(".logo_img01").fadeOut(500);
		} else {
			$(".header__inner").removeClass("fixType");
			$(".headerList__item").removeClass("black");
			$(".headerMenu").removeClass("black");
			$(".logo_img01").fadeIn(500);
			$(".logo_img02").fadeOut(500);
		}
	});
});

//要素の上部の位置を取得
function getElementTop(el) {
	const rect = el.getBoundingClientRect();
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	return rect.top + scrollTop;
}

//lanilani画像のオリジナル画像を表示させる
$(document).ready(function () {
	$(".rss_item .rss_image img").each(function () {
		// var style = $(this).attr("style");
		// var newSrc = style.replace(/-300x.*\.(jpg|png)/, ".$1");
		// $(this).attr("style", newSrc);
		var src = $(this).attr("src");
		var newSrc = src.replace(/-300x.*\.(jpg|png)/, ".$1");
		$(this).attr("src", newSrc);
	});
});
