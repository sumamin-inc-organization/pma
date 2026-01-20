document.addEventListener("DOMContentLoaded", function() {  
    // nav menu開閉
    document.querySelector('.close__btn').addEventListener('click', function() {
        document.body.classList.remove('stop');
			document.querySelector('.header__menu').classList.remove('open');
    });

    document.querySelector('.headerMenu').addEventListener('click', function() {
			console.log('click');
        document.body.classList.add('stop');
			document.querySelector('.header__menu').classList.add('open');
    });

    document.querySelector('.menu__container').addEventListener('click', function(e) {
        if (!e.target.closest('.menu__wrap')) {
            document.body.classList.remove('stop');
				document.querySelector('.header__menu').classList.remove('open');
        }
    });
});