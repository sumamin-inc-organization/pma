<?php
function load_assets() {
	// jQuery
    wp_enqueue_script('jquery');

	// GSAP
	wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/gsap.min.js', [], null, true );
	wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollTrigger.min.js', ['gsap'], null, true );

	// swioer
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );

    // CSS
    wp_enqueue_style( 'reset_style', get_stylesheet_directory_uri().'/assets/css/common/reset.css' );
    wp_enqueue_style( 'variable_style', get_stylesheet_directory_uri().'/assets/css/common/variable.css');
    wp_enqueue_style( 'common_style', get_stylesheet_directory_uri().'/assets/css/common/style.css');
    wp_enqueue_style( 'hamburger_style', get_stylesheet_directory_uri().'/assets/css/common/hamburger.css');

    // JavaScript
	wp_enqueue_script('anime_script', get_stylesheet_directory_uri().'/assets/js/anime.js', ['gsap', 'gsap-scrolltrigger'], null, true);    
	wp_enqueue_script( 'slider_script', get_stylesheet_directory_uri().'/assets/js/slider.js', ['swiper'], null, true );
	wp_enqueue_script( 'accordion_script', get_stylesheet_directory_uri().'/assets/js/accordion.js', array('jquery'), null, true );
    wp_enqueue_script( 'hamburger_script', get_stylesheet_directory_uri().'/assets/js/hamburger.js', array(), null, true );
	wp_enqueue_script( 'switch_script', get_stylesheet_directory_uri().'/assets/js/switch.js', array('jquery'), null, true );

    if( is_front_page() ){
        wp_enqueue_style( 'page-top_style', get_stylesheet_directory_uri().'/assets/css/page-top.css' );
        wp_enqueue_style( 'hawaii-information_style', get_stylesheet_directory_uri().'/assets/css/template/hawaii-information.css');
		wp_enqueue_script('loading_script',get_stylesheet_directory_uri().'/assets/js/loading.js',array('jquery'),null,true);
    } else {
        wp_enqueue_style( 'lower_style', get_stylesheet_directory_uri().'/assets/css/common/lower.css' );
    }
	if( is_page('company') || is_page('company-en') ){
		wp_enqueue_style( 'page-company_style', get_stylesheet_directory_uri().'/assets/css/page-company.css' );
	}
    if( is_page('service') ){
        wp_enqueue_style( 'page-service_style', get_stylesheet_directory_uri().'/assets/css/service/page-service.css' );
		wp_enqueue_script( 'page-service_script', get_stylesheet_directory_uri().'/assets/js/page-service.js', array(), null, true );
    }
	if( is_page('service-editorial') ){
		wp_enqueue_style( 'page-contact_style', get_stylesheet_directory_uri().'/assets/css/page-contact.css' );
		wp_enqueue_style( 'page-service-editorial_style', get_stylesheet_directory_uri().'/assets/css/service/page-service-editorial.css' );
	}
	if( is_page('service-media') || is_page('service-media-en') ){
		wp_enqueue_style( 'service-media', get_stylesheet_directory_uri().'/assets/css/service/page-service-media.css' );
		wp_enqueue_script( 'page-service.media_script', get_stylesheet_directory_uri().'/assets/js/page-service-media.js', array(), null, true );
	}
	if( is_page( 'service-contents' ) ){
		wp_enqueue_style( 'service-contents', get_stylesheet_directory_uri().'/assets/css/service/page-service-contents.css' );
	}
	if( is_page( 'service-event' ) ){
		wp_enqueue_style( 'service-event', get_stylesheet_directory_uri().'/assets/css/service/page-service-event.css' );
	}
	if( is_page( 'service-consulting' ) ){
		wp_enqueue_style( 'service-consulting', get_stylesheet_directory_uri().'/assets/css/service/page-service-consulting.css' );
	}
	if( is_page( 'service-apparel' ) || is_page('service-apparel-en') ){
		wp_enqueue_style( 'service-apparel', get_stylesheet_directory_uri().'/assets/css/service/page-service-apparel.css' );
	}
	if( is_page( 'service-ec' ) || is_page('service-ec-en')  ){
		wp_enqueue_style( 'service-ec', get_stylesheet_directory_uri().'/assets/css/service/page-service-ec.css' );
	}
	if( is_page( 'service-sdgs' ) ){
		wp_enqueue_style( 'service-sdgs', get_stylesheet_directory_uri().'/assets/css/service/page-service-sdgs.css' );
	}
	if( is_page( 'service-food' ) ){
		wp_enqueue_style( 'service-food', get_stylesheet_directory_uri().'/assets/css/service/page-service-food.css' );
	}
	if( is_page( 'works' ) ){
		wp_enqueue_style( 'page-works_style', get_stylesheet_directory_uri().'/assets/css/works/page-works.css' );
		wp_enqueue_script( 'page-works_script', get_stylesheet_directory_uri().'/assets/js/page-works.js', array(), null, true );
	}
	if( is_page( 'works-editorial' ) ) {
		wp_enqueue_style( 'page-works-editorial_style', get_stylesheet_directory_uri().'/assets/css/works/page-works-editorial.css' );
	}
	if ( is_page( array( 'works-editorial', 'works-media', 'works-contents', 'works-event', 'works-consulting', 'works-apparel', 'works-ec', 'works-sdgs', 'works-food') ) ) {
		wp_enqueue_style( 'works-common_style', get_stylesheet_directory_uri().'/assets/css/works/works-common.css' );
	}
	if ( is_page('news') || is_archive() || is_search() ) {
		wp_enqueue_style( 'page-news_style', get_stylesheet_directory_uri().'/assets/css/page-news.css' );
	}
	if( is_page('vision') ){
		wp_enqueue_style( 'page-vision_style', get_stylesheet_directory_uri().'/assets/css/page-vision.css' );
	}
	if( is_page('recruit') ){
		wp_enqueue_style( 'page-recruit_style', get_stylesheet_directory_uri().'/assets/css/page-recruit.css' );
	}
	if( is_page('contact') ){
		wp_enqueue_style( 'page-contact_style', get_stylesheet_directory_uri().'/assets/css/page-contact.css' );
	}
	if( is_page('privacy_policy') ){
		wp_enqueue_style( 'page-privacy_policy_style', get_stylesheet_directory_uri().'/assets/css/page-privacy-policy.css' );
	}
	if( is_page('apparel-lp') ){
		wp_enqueue_style( 'page-company_style', get_stylesheet_directory_uri().'/assets/css/page-apparel-lp.css' );
	}
	if( is_page('sdgs-lp') ){
		wp_enqueue_style( 'page-company_style', get_stylesheet_directory_uri().'/assets/css/page-sdgs-lp.css' );
	}
	if( is_single() ){
		wp_enqueue_style( 'single_style', get_stylesheet_directory_uri().'/assets/css/single.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'load_assets' );

// サムネイル
add_theme_support('post-thumbnails');

// ページネーション
function custom_pagination_with_search($query) {
	$big = 999999999;
	$pagination = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $query->max_num_pages,
		'mid_size' => 2,
		'prev_text' => '<svg width="34" height="8" viewBox="0 0 34 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.33 0.935547L1.21 7.06555H34" stroke="#333333" stroke-miterlimit="10"/></svg>',
		'next_text' => '<svg width="34" height="8" viewBox="0 0 34 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.67 0.935547L32.79 7.06555H0" stroke="#333333" stroke-miterlimit="10"/></svg>',
		'type' => 'array',
		'add_args' => $_GET,
	));
	if ($pagination) {
		echo '<nav class="pagination"><ul class="pagination_list">';
		foreach ($pagination as $page) echo '<li class="pagination_item">' . $page . '</li>';
		echo '</ul></nav>';
	}
}

// カテゴリ
function cptui_register_my_taxes() {

	// 01大カテゴリ一覧
	$labels = [
		"name" => esc_html__( "01大カテゴリ一覧", "constrau" ),
		"singular_name" => esc_html__( "01大カテゴリ", "constrau" ),
	];
	$args = [
		"label" => esc_html__( "01大カテゴリ一覧", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'l_cat', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "l_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "l_cat", [ "post" ], $args );

	// 02国内・国外
	$labels = [
		"name" => esc_html__( "02国内・国外", "constrau" ),
		"singular_name" => esc_html__( "02国内・国外", "constrau" ),
	];
	$args = [
		"label" => esc_html__( "02国内・国外", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'country', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "country",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "country", [ "post" ], $args );

	// 03詳細一覧
	$labels = [
		"name" => esc_html__( "03詳細一覧", "constrau" ),
		"singular_name" => esc_html__( "03詳細", "constrau" ),
	];
	$args = [
		"label" => esc_html__( "03詳細一覧", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'detail', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "detail",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "detail", [ "post" ], $args );

	// 04Lanilani
	$labels = [
		"name" => esc_html__( "04Lanilani", "constrau" ),
		"singular_name" => esc_html__( "04Lanilani", "constrau" ),
	];
	$args = [
		"label" => esc_html__( "04Lanilani", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'lanilani_cat', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "lanilani_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "lanilani_cat", [ "post" ], $args );

	// 05これまでの実績
	$labels = [
		"name" => esc_html__( "05これまでの実績", "constrau" ),
		"singular_name" => esc_html__( "05これまでの実績", "constrau" ),
	];
	$args = [
		"label" => esc_html__( "05これまでの実績", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'history', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "history",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "history", [ "post" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );