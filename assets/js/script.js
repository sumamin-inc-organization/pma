(function($){
	"use strict";
	$(document).ready(function(){

		/* Scroll to top */
		constrau_scrollUp();
		function constrau_scrollUp(options) {
			
			var defaults = {
				scrollName: 'scrollUp', 
				topDistance: 600, 
				topSpeed: 800, 
				animation: 'fade', 
				animationInSpeed: 200, 
				animationOutSpeed: 200, 
				scrollText: '<i class="fas fa-angle-up"></i>', 
				scrollImg: false, 
				activeOverlay: false 
			};

			var o = $.extend({}, defaults, options),
			scrollId = '#' + o.scrollName;


			$('<a/>', {
				id: o.scrollName,
				href: '#top',
				title: o.scrollText
			}).appendTo('body');


			if (!o.scrollImg) {

				$(scrollId).html(o.scrollText);
			}


			$(scrollId).css({'display': 'none', 'position': 'fixed', 'z-index': '2147483647'});


			if (o.activeOverlay) {
				$("body").append("<div id='" + o.scrollName + "-active'></div>");
				$(scrollId + "-active").css({'position': 'absolute', 'top': o.topDistance + 'px', 'width': '100%', 'border-top': '1px dotted ' + o.activeOverlay, 'z-index': '2147483647'});
			}


			$(window).scroll(function () {
				switch (o.animation) {
					case "fade":
					$(($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed));
					break;
					case "slide":
					$(($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed));
					break;
					default:
					$(($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0));
				}
			});

			
			$(scrollId).on( "click", function (event) {
				$('html, body').animate({scrollTop: 0}, o.topSpeed);
				event.preventDefault();
			});

		}

		/* Fix empty menu in test_uni_data */
		if( $( '.widget_nav_menu ul li' ).length > 0 ){
			$( '.widget_nav_menu ul li a:empty' ).parent().css('display','none');
		}

		/* Select 2 */
		$('select').select2({ 
			width: '100%'
		});


		

		/* Popup Image - PrettyPhoto */
		if( $("a[data-gal^='prettyPhoto']").length > 0 ){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal', theme: 'facebook',slideshow:5000, autoplay_slideshow:true});
		}
		

		$( '.ovatheme_header_default li.menu-item button.dropdown-toggle').off('click').on( 'click', function() {
			$(this).parent().toggleClass('active_sub');
		});

		$(".comment-reply-link").siblings('i').css('display', 'inline-block');

		$(".categories a").siblings('i').css('display', 'inline-block');
		$(".categories a").siblings('.meta-slash').css('display', 'inline-block');


		/* Caousel Thumbnail Woo */
		if( $('.woo-thumbnails').length > 0 ){
			$('.woo-thumbnails .owl-carousel').each(function(){

				var rtl = false;
				if( $('body').hasClass('rtl') ){
					rtl = true;
				}

				$(this).owlCarousel({
					autoplay: true,
					autoplayHoverPause: true,
					loop: false,
					margin: 20,
					dots: false,
					nav: true,
					vertical: true,
					rtl: rtl,
					responsive: {
						0:    {items: 2},
						479:  {items: 2},
						768:  {items: 3},
						1024: {items: 3}
					}
				});
			});
		}

      if( $('.button_popup').length > 0 ){
         $(".button_popup").videoPopup({
            autoplay: 1,
            controlsColor: 'white',
            showVideoInformations: 0,
            width: 1000,
            customOptions: {
               rel: 0,
               end: 60
            }
         });
      };


   });	
	$(window).on("scroll", function(){
		if ( $(window).scrollTop() >= 200 ) {
			$(".header-top").addClass("fixed-header");
			$(".breadcrumbs-cus").addClass("fix_breadcrumbs")
		}
		else {
			$(".header-top").removeClass("fixed-header");
			$(".breadcrumbs-cus").removeClass("fix_breadcrumbs")
		}
	});
	$(document).ready(function(){
		$("ul#sya_yearslist li:first-child a").addClass("active");
		$("ul.sya_yearslist li :eq(0)").addClass('active');
			$("sya_container .content-tab").not(':eq(0)').addClass('hides');
			$("ul.sya_yearslist li a").click(function(){
			var $this = $(this),
				$href = this.hash,
				$tab = $($href),
				$currentTab = $("sya_container .content-tab");
				
				$("ul.sya_yearslist li").removeClass('active');
				
				$this.parent().addClass('active');
				$currentTab.addClass('hides');
				$tab.removeClass('hides');
				return false;

		});
		$(".blog .ovatheme_breadcrumbs ul.breadcrumb li:last-child").text("お知らせ");
		$(".blog article .post-readmore-constrau a").text("もっと読む");
		$("#caf-filter-layout1 .caf-filter-layout1 li:first-child a").text("すべて");
	});
})(jQuery);

// カタカタ変換

(function ($) {
    $.fn.autoKana = function (element1, element2, passedOptions) {

        var options = $.extend(
            {
                'katakana': false
            }, passedOptions);

        var kana_extraction_pattern = new RegExp('[^ 　ぁあ-んー]', 'g');
        var kana_compacting_pattern = new RegExp('[ぁぃぅぇぉっゃゅょ]', 'g');
        var elName,
            elKana,
            active = false,
            timer = null,
            flagConvert = true,
            input,
            values,
            ignoreString,
            baseKana;

        elName = $(element1);
        elKana = $(element2);
        active = true;
        _stateClear();

        elName.blur(_eventBlur);
        elName.focus(_eventFocus);
        elName.keydown(_eventKeyDown);

        function start() {
            active = true;
        };

        function stop() {
            active = false;
        };

        function toggle(event) {
            var ev = event || window.event;
            if (event) {
                var el = Event.element(event);
                if (el.checked) {
                    active = true;
                } else {
                    active = false;
                }
            } else {
                active = !active;
            }
        };

        function _checkConvert(new_values) {
            if (!flagConvert) {
                if (Math.abs(values.length - new_values.length) > 1) {
                    var tmp_values = new_values.join('').replace(kana_compacting_pattern, '').split('');
                    if (Math.abs(values.length - tmp_values.length) > 1) {
                        _stateConvert();
                    }
                } else {
                    if (values.length == input.length && values.join('') != input) {
                        if (input.match(kana_extraction_pattern)) {
                            _stateConvert();
                        }
                    }
                }
            }
        };

        function _checkValue() {
            var new_input, new_values;
            new_input = elName.val()
            if (new_input == '' && elKana.val() != '') {
                _stateClear();
                _setKana();
            } else {
                new_input = _removeString(new_input);
                if (input == new_input) {
                    return;
                } else {
                    input = new_input;
                    if (!flagConvert) {
                        new_values = new_input.replace(kana_extraction_pattern, '').split('');
                        _checkConvert(new_values);
                        _setKana(new_values);
                    }
                }
            }
        };

        function _clearInterval() {
            clearInterval(timer);
        };

        function _eventBlur(event) {
            _clearInterval();
        };
        function _eventFocus(event) {
            _stateInput();
            _setInterval();
        };
        function _eventKeyDown(event) {
            if (flagConvert) {
                _stateInput();
            }
        };
        function _isHiragana(chara) {
            return ((chara >= 12353 && chara <= 12435) || chara == 12445 || chara == 12446);
        };
        function _removeString(new_input) {
            if (new_input.indexOf(ignoreString) !== -1) {
                return new_input.replace(ignoreString, '');
            } else {
                var i, ignoreArray, inputArray;
                ignoreArray = ignoreString.split('');
                inputArray = new_input.split('');
                for (i = 0; i < ignoreArray.length; i++) {
                    if (ignoreArray[i] == inputArray[i]) {
                        inputArray[i] = '';
                    }
                }
                return inputArray.join('');
            }
        };
        function _setInterval() {
            var self = this;
            timer = setInterval(_checkValue, 30);
        };
        function _setKana(new_values) {
            if (!flagConvert) {
                if (new_values) {
                    values = new_values;
                }
                if (active) {
                    var _val = _toKatakana(baseKana + values.join(''));
                    elKana.val(_val).change();
                }
            }
        };
        function _stateClear() {
            baseKana = '';
            flagConvert = false;
            ignoreString = '';
            input = '';
            values = [];
        };
        function _stateInput() {
            baseKana = elKana.val();
            flagConvert = false;
            ignoreString = elName.val();
        };
        function _stateConvert() {
            baseKana = baseKana + values.join('');
            flagConvert = true;
            values = [];
        };
        function _toKatakana(src) {
            if (options.katakana) {
                var c, i, str;
                str = new String;
                for (i = 0; i < src.length; i++) {
                    c = src.charCodeAt(i);
                    if (_isHiragana(c)) {
                        str += String.fromCharCode(c + 96);
                    } else {
                        str += src.charAt(i);
                    }
                }
                return str;
            } else {
                return src;
            }
        }
    };
})(jQuery);