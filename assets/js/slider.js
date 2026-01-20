const secSwiper = new Swiper(".secSwiper", {
    loop: true,
    speed: 600,
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
        550: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 60,
        },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const infoSwiper = new Swiper(".infoSwiper", {
    loop: true,
    speed: 600,
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
        550: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//rss用swiper
//swiper用のクラス追加
document.querySelectorAll('.rss_header').forEach(function(element) {
    element.remove();
});

document.querySelectorAll('.feedzy-rss-1 ul').forEach(function(element) {
    element.classList.add('swiper-wrapper');
});

document.querySelectorAll('.rss_item').forEach(function(element) {
    element.classList.add('swiper-slide');
});

document.querySelectorAll('.rss_image').forEach(function(element) {
    element.classList.add('sec__post--imgBox');
});

document.querySelectorAll('.rss_image .fetched').forEach(function(element) {
    element.classList.add('sec__post--img');
});

document.addEventListener("DOMContentLoaded", function() {
    var div1 = document.querySelectorAll(".rss_item .title");
    var div2 = document.querySelectorAll(".rss_item .rss_content");

    document.querySelectorAll('.rss_item').forEach(function(item) {
        var title = item.querySelector('.title');
        var content = item.querySelector('.rss_content');
        var next = title.nextElementSibling;

        item.insertBefore(content, title);

        if (next !== content) {
            item.insertBefore(title, next);
        } else {
            item.insertBefore(title, content.nextElementSibling);
        }
    });
});

// 文字列から最初の "on" を削除する関数
function removeOnPrefix(text) {
	if (text.startsWith("on")) {
		return text.substring(2);
	}
	return text;
}

var elements = document.querySelectorAll('.rss_content small');
elements.forEach(function(element) {
	var originalText = element.textContent;
	var newText = removeOnPrefix(originalText);
	element.textContent = newText;
});

// 画面幅が767px以上の場合の処理
function handleMediaQueryChange(mediaQuery) {
	if (mediaQuery.matches) {
		// 767px以上の場合の処理
		document.querySelectorAll('.rss_image').forEach(function(element) {
			element.style.width = "21.36vw";
			element.style.height = "21.36vw";
		});
	} else {
		// 767px以下の場合の処理
		document.querySelectorAll('.rss_image').forEach(function(element) {
			element.style.width = "69.74vw";
			element.style.height = "69.74vw";
		});
	}
}

// メディアクエリを作成
var mediaQuery = window.matchMedia("(min-width: 767px)");

// 初回チェック
handleMediaQueryChange(mediaQuery);

// メディアクエリの変更を監視
mediaQuery.addEventListener("change", handleMediaQueryChange);

const feedzySwiper = new Swiper(".feedzy-rss-1", {
    loop: true,
    speed: 600,
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
        550: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
