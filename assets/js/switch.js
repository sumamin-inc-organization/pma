function updateHeader(scroll) {
	var $headerInner = jQuery(".header__inner");
	var $headerItems = jQuery(".headerList__item");
	var $headerMenu = jQuery(".headerMenu");
	var $logo01 = jQuery(".logo_img01");
	var $logo02 = jQuery(".logo_img02");

	var elementTop = jQuery(".first_section").length
		? getElementTop(jQuery(".first_section")[0], scroll)
		: jQuery(".kv").height();

	if (jQuery(".kv").height() < scroll || elementTop < scroll) {
		$headerInner.addClass("fixType");
		$headerItems.addClass("black");
		$headerMenu.addClass("black");
		$logo02.fadeIn(500);
		$logo01.fadeOut(500);
	} else {
		$headerInner.removeClass("fixType");
		$headerItems.removeClass("black");
		$headerMenu.removeClass("black");
		$logo01.fadeIn(500);
		$logo02.fadeOut(500);
	}
}

function getElementTop(el, scroll) {
	var rect = el.getBoundingClientRect();
	var scrollTop = scroll !== undefined ? scroll : (window.pageYOffset || document.documentElement.scrollTop);
	return rect.top + scrollTop;
}


jQuery(document).ready(function ($) {
	// Lenisが使用されている場合
	if (typeof window.lenis !== 'undefined') {
		window.addEventListener('lenis:scroll', function (e) {
			updateHeader(e.detail.scroll);
		});
	} else {
		// 通常のスクロール
		jQuery(window).on("scroll", function () {
			updateHeader(jQuery(this).scrollTop());
		});
	}

	jQuery(".rss_item .rss_image img").each(function () {
		var src = jQuery(this).attr("src");
		var newSrc = src.replace(/-300x.*\.(jpg|png)/, ".$1");
		jQuery(this).attr("src", newSrc);
	});
});
