(function() {
    function initLoading() {
        const $ = (typeof jQuery !== 'undefined') ? jQuery : window.$;

        $(document).ready(function() {

            let images = $('img');
            let totalImages = images.length;
            let loadedImages = 0;
            let loadingComplete = false;
            let imageStatus = {}; // 各画像の状態を追跡

            function finishLoading() {
                if (loadingComplete) return;
                loadingComplete = true;

                setTimeout(function() {
                    $('.loading__inner').fadeOut();
                    setTimeout(function() {
                        $('#loading').addClass('slide-up');
                        if ($('#content').length > 0) {
                            $('#content').fadeIn('slow');
                        }
                        setTimeout(function() {
                            $('#loading').hide();
                        }, 1200);
                    }, 400);
                }, 600);
            }

            if (totalImages === 0) {
                finishLoading();
                return;
            }

            images.each(function(index) {
                let $img = $(this);
                let imgSrc = $img.attr('src');
                let imgId = index;

                if (!imgSrc || imgSrc === '') {
                    let $picture = $img.closest('picture');
                    if ($picture.length > 0) {
                        let $source = $picture.find('source').first();
                        if ($source.length > 0) {
                            imgSrc = $source.attr('srcset') || $source.attr('src');
                        }
                    }
                    if (!imgSrc || imgSrc === '') {
                        imgSrc = $img.attr('srcset');
                        if (imgSrc) {
                            imgSrc = imgSrc.split(',')[0].trim().split(' ')[0];
                        }
                    }
                }

                if (imgSrc && $img[0].complete && $img[0].naturalHeight !== 0) {
                    loadedImages++;
                    imageStatus[imgId] = 'already loaded';
                    if (loadedImages === totalImages) finishLoading();
                    return;
                }

                if (imgSrc) {
                    let img = new Image();
                    img.onload = img.onerror = function() {
                        loadedImages++;
                        imageStatus[imgId] = this.complete ? 'loaded' : 'error';
                        if (loadedImages === totalImages && !loadingComplete) finishLoading();
                    };
                    img.src = imgSrc;
                    imageStatus[imgId] = 'loading';
                } else {
                    loadedImages++;
                    imageStatus[imgId] = 'no src';
                    if (loadedImages === totalImages && !loadingComplete) finishLoading();
                }
            });

            setTimeout(function() {
                if (!loadingComplete) finishLoading();
            }, 5000);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLoading);
    } else {
        initLoading();
    }
})();