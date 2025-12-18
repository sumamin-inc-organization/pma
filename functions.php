<?php
// 外部ファイルの読み込み
function load_assets() {
    // CSSの読み込み
    wp_enqueue_style( 'reset_style', get_stylesheet_directory_uri().'/assets/css/common/reset.css' );
    wp_enqueue_style( 'variable_style', get_stylesheet_directory_uri().'/assets/css/common/variable.css');
    wp_enqueue_style( 'common_style', get_stylesheet_directory_uri().'/assets/css/common/style.css');
    wp_enqueue_style( 'hamburger_style', get_stylesheet_directory_uri().'/assets/css/common/hamburger.css');

    // JavaScriptの読み込み
    // wp_enqueue_script( 'luxy_script', get_stylesheet_directory_uri().'/assets/js/luxy.js', array(), null, true );
    wp_enqueue_script( 'anime_script', get_stylesheet_directory_uri().'/assets/js/anime.js', array(), null, true );
    wp_enqueue_script( 'slider_script', get_stylesheet_directory_uri().'/assets/js/slider.js', array(), null, true );
    wp_enqueue_script( 'accordion_script', get_stylesheet_directory_uri().'/assets/js/accordion.js', array(), null, true );
    wp_enqueue_script( 'hamburger_script', get_stylesheet_directory_uri().'/assets/js/hamburger.js', array(), null, true );
    wp_enqueue_script( 'switch_script', get_stylesheet_directory_uri().'/assets/js/switch.js', array(), null, true );
    

    // トップページのみ読み込み
    if( is_front_page() ){
        wp_enqueue_style( 'page.top_style', get_stylesheet_directory_uri().'/assets/css/page.top.css' );
    } else {
        wp_enqueue_style( 'lower_style', get_stylesheet_directory_uri().'/assets/css/common/lower.css' );
    }
	if( is_page('company') || is_page('company-en') ){
		wp_enqueue_style( 'page.company_style', get_stylesheet_directory_uri().'/assets/css/page.company.css' );
	}
    if( is_page('service') ){
        wp_enqueue_style( 'page.service_style', get_stylesheet_directory_uri().'/assets/css/service/page.service.css' );
		wp_enqueue_script( 'page.service_script', get_stylesheet_directory_uri().'/assets/js/page.service.js', array(), null, true );
    }
	if( is_page('service-editorial') ){
		wp_enqueue_style( 'page.contact_style', get_stylesheet_directory_uri().'/assets/css/page.contact.css' );
		wp_enqueue_style( 'service-common_style', get_stylesheet_directory_uri().'/assets/css/service/service-common.css' );
		wp_enqueue_style( 'page.service-editorial_style', get_stylesheet_directory_uri().'/assets/css/service/page.service-editorial.css' );
	}
	if( is_page('service-media') ){
		wp_enqueue_style( 'page.service-media_style', get_stylesheet_directory_uri().'/assets/css/service/page.service-media.css' );
	}
	if( is_page('service-media') ){
		wp_enqueue_style( 'page.service-media_style', get_stylesheet_directory_uri().'/assets/css/service/page.service-media.css' );
	}
	if( is_page('service-food') ){
		wp_enqueue_style( 'page.service-food_style', get_stylesheet_directory_uri().'/assets/css/service/page.service-food.css' );
	}
	if( is_page('works') ){
		wp_enqueue_style( 'page.works_style', get_stylesheet_directory_uri().'/assets/css/works/page.works.css' );
		wp_enqueue_script( 'page.works_script', get_stylesheet_directory_uri().'/assets/js/page.works.js', array(), null, true );
	}
	if (is_page('works-editorial')) {
		wp_enqueue_style( 'works-common_style', get_stylesheet_directory_uri().'/assets/css/works/works-common.css' );
		wp_enqueue_style( 'page.works-editorial_style', get_stylesheet_directory_uri().'/assets/css/works/page.works-editorial.css' );
	}
	if( is_page('news') ){
		wp_enqueue_style( 'page.news_style', get_stylesheet_directory_uri().'/assets/css/page.news.css' );
	}
	if( is_page('vision') ){
		wp_enqueue_style( 'page.vision_style', get_stylesheet_directory_uri().'/assets/css/page.vision.css' );
	}
	if( is_page('recruit') ){
		wp_enqueue_style( 'page.recruit_style', get_stylesheet_directory_uri().'/assets/css/page.recruit.css' );
	}
	if( is_page('contact') ){
		wp_enqueue_style( 'page.contact_style', get_stylesheet_directory_uri().'/assets/css/page.contact.css' );
	}
	if( is_page('privacy_policy') ){
		wp_enqueue_style( 'page.privacy_policy_style', get_stylesheet_directory_uri().'/assets/css/page.privacy_policy.css' );
	}
	

	if( is_page('apparel-lp') ){
		wp_enqueue_style( 'page.company_style', get_stylesheet_directory_uri().'/assets/css/page.apparel-lp.css' );
	}
	if( is_page('sdgs-lp') ){
		wp_enqueue_style( 'page.company_style', get_stylesheet_directory_uri().'/assets/css/page.sdgs-lp.css' );
	}

}
add_action( 'wp_enqueue_scripts', 'load_assets' );

add_theme_support('post-thumbnails');

function custom_pagination_with_search($query) {
	$big = 999999999;
	$pagination = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $query->max_num_pages,
		'mid_size' => 2,
		'prev_text' => '<svg width="34" height="8" viewBox="0 0 34 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.33 0.935547L1.21 7.06555H34" stroke="#333333" stroke-miterlimit="10"/>
</svg>
',
		'next_text' => '<svg width="34" height="8" viewBox="0 0 34 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.67 0.935547L32.79 7.06555H0" stroke="#333333" stroke-miterlimit="10"/>
</svg>
',
		'type' => 'array',
		'add_args' => $_GET, // ← すべてのクエリパラメータを引き継ぐ
	));

	if ($pagination) {
		echo '<nav class="pagination"><ul class="pagination_list">';
		foreach ($pagination as $page) echo '<li class="pagination_item">' . $page . '</li>';
		echo '</ul></nav>';
	}
}

// Bogoの言語スイッチャーの国旗を非表示
add_filter( 'bogo_use_flags','bogo_use_flags_false');
function bogo_use_flags_false(){
	return false;
}


/* 最新記事リスト */
// function getNewItems($atts) {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '', //表示する記事のカテゴリー指定
//         "days" => '', //何日以内の記事にadd_textをつけるか指定
//         "add_text" => '' //表示するテキスト
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat);
//     $retHtml='<ul class="news_list">';
//     foreach($myposts as $post) :
//     $cat = get_the_category();
//     $catname = $cat[0]->cat_name;
//     $catslug = $cat[0]->slug;
//     $category_id = get_cat_ID( $catname );
//     $category_link = get_category_link( $category_id );
//         setup_postdata($post);
//         $retHtml.='<li>';
//         $retHtml.='<span class="news_date">'.get_post_time( get_option( 'date_format' )).'</span>';
//         $retHtml.='<a href="'.$category_link.'" class="cat '.$catslug.'">'.$catname.'</a>';
//         $retHtml.='<a href="'.get_permalink().'" class="news_title">'.the_title("","",false).'</a>';
//     //指定日以内にadd_textをつける
//     $today = date_i18n('U');
//     $entry_day = get_the_time('U');
//     $past_days = date('U',($today - $entry_day)) / 86400;
//       if ( $days > $past_days ):
//         $retHtml.='<span class="add_New">'.$add_text.'</span>';
//       endif;
//         $retHtml.='</li>';
//     endforeach;
//     $retHtml.='</ul>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("newsNewcat", "getNewItems"); //getNewItemsは関数名、newsNewcatはショートコード名

//  add_filter('wpcf7_validate_text',  'wpcf7_validate_kana', 11, 2);  add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);   function wpcf7_validate_kana($result,$tag){    $tag = new WPCF7_Shortcode($tag);    $name = $tag->name;
//    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

//    if ( $name === "hurigana" ) {
//      if(!preg_match("/^[ァ-ヾ]+$/u", $value)) {
//        $result->invalidate($tag, "全角カタカナで入力してください。");
//      }
//    }
//    return $result;

//  }
// function get_New_Items($atts) {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     global $wpdb;
// 	$years = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM wp_postmeta WHERE meta_key LIKE "year"', OBJECT );
//     $oldpost = $post;
//     $myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat);
//     $retHtml='<ul class="news_list">';
//         foreach($myposts as $post) :
//             $cat = get_the_category();
//             $catname = $cat[0]->cat_name;
//             $catslug = $cat[0]->slug;
// 			$category_id = get_cat_ID( $catname );
// 			$category_link = get_category_link( $category_id );
//             setup_postdata($post);
//             $retHtml.='<li>';
// 				 $retHtml.='<div class="vc_row wpb_row vc_row-fluid">';
// 				 $retHtml.='<div class="nd_col">';
//             $retHtml.='<span class="news_date">'.get_post_time( get_option( 'date_format' )).'</span>';
// 				 $retHtml.='</div>';
// 				 $retHtml.='<div class="cat_col">';
//             $retHtml.='<a href="'.$category_link.'" class="cat '.$catslug.'">'.$catname.'</a>';
// 				 $retHtml.='</div>';
// 				 $retHtml.='<div class="titlecontent">';
//             $retHtml.='<a href="'.get_permalink().'" class="news_title">'.the_title("","",false).'</a>';
// 				 $retHtml.='</div>';
// 	$retHtml.='<div class="more-btn">';
//             $retHtml.='<a href="'.get_permalink().'" class="more-btn">';
// 	$retHtml.='<i class="fas fa-arrow-circle-right">';
// 	$retHtml.='</i>';
// 	$retHtml.='</a>';
// 				 $retHtml.='</div>';
// 				 $retHtml.='</div>';
//             $retHtml.='</li>';
//         endforeach;
//     $retHtml.='</ul>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("news", "get_New_Items");

// function rss_post_thumbnail($content) {
// global $post;
// if(has_post_thumbnail($post->ID)) {
// $content = get_the_post_thumbnail($post->ID) . $content;
// }
// return $content;
// }
// add_filter('the_excerpt_rss', 'rss_post_thumbnail');
// add_filter('the_content_feed', 'rss_post_thumbnail');

// function custom_attribute( $html ){
// $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
// return $html;
// }
// add_filter( 'post_thumbnail_html', 'custom_attribute' );


// function get_rss() {
//     $rss = simplexml_load_file('https://www.lanilanihawaii.com/feed');

//     $postsList = array();
//     $counter = 0;

//     foreach($rss->channel->item as $item) {
//         $postsList[] = array(
//             'title' => $item->title,
//             'thum' => $item->image->url
//         );
//         $counter++;

//         if($counter == 5) {
//             break;
//         }
//     }
// 	var_dump($postsList);
// }
// add_shortcode('get_rss', 'get_rss');

// function get_cat_posts() {
// 	$retval = '';
// 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// 	$args = array(
//         'category_name' => 'production, contents, media, apparel, consulting, ec, food, sdgs, company-information',
//         'parent' => '0',
// 		'post_type' => 'post',
// 		'paged' => $paged,
// 		'posts_per_page' => 30,
// 		'orderby' => 'date',
// 		'order' => 'DESC'
// 	);

//     $colorCat = [
//         '編集プロダクション事業',
//         'コンテンツ制作事業',
//         'メディア事業',
//         'アパレル事業',
//         'コンサルティング事業',
//         'EC事業',
//         '飲食事業',
//         'PR・イベント事業',
//         'SDGs推進事業',
//         '会社情報'
//     ];

//     $lableColor = [
//         '#2d2bab',
//         '#ac2cad',
//         '#E42691',
//         '#F71567',
//         '#F6DB15',
//         '#E45636',
//         '#FF8A00',
//         '#FABD27',
//         '#88C000',
//         '#02C176'
//     ];

// 	$the_query = new WP_Query( $args );
// 	if ( $the_query->have_posts() ) :
// 		$content = wp_strip_all_tags(mb_substr(get_the_content(), 0, 50, 'UTF-8'), true);

// 		$retval .= '<div class="elementor-element elementor-element-2635606 de_scroll_animation_no elementor-widget elementor-widget-shortcode" data-id="2635606" data-element_type="widget" data-widget_type="shortcode.default"><div class="elementor-widget-container"><div class="elementor-shortcode"><ul class="news_list">';
// 			while ( $the_query->have_posts() ) : $the_query->the_post();

//                 $catName = get_the_category()[0]->cat_name;

//                 if (array_search($catName, $colorCat) !== false) {
//                     $colorNum = array_search($catName, $colorCat);
//                     $colorCode = $lableColor[$colorNum];
//                 } else {
//                     $colorCode = '#FF2C9C';
//                 }

// 				$retval .= '<li>
//                                 <div class="vc_row wpb_row vc_row-fluid">
//                                     <div class="nd_col">
//                                         <span class="news_date">'.get_the_date().'</span>
//                                     </div>
//                                     <div class="cat_col">
//                                         <a style="background-color: '.$colorCode.';" href="'.get_category_link(get_the_category()[0]->term_id).'" class="cat domestic-guidebook">'.$catName.'</a>
//                                     </div>
//                                     <div class="titlecontent">
//                                         <a href="'.get_the_permalink().'" class="news_title">'.get_the_title().'</a>
//                                     </div>
//                                 </div>
//                             </li>';
// 			endwhile;
// 		$retval .= '</ul></div></div></div>';
// 	endif;

// 	$retval .= '<div class="pager_nav 1">';
//        global $wp_rewrite;
//        $paginate_base = get_pagenum_link(1);
//        if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
//            $paginate_format = '';
//            $paginate_base = add_query_arg('paged','%#%');
//        }else{
//            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
//            //user_trailingslashit('page?=%#%','paged');
//            user_trailingslashit('page/%#%','paged');
//            $paginate_base .= '%_%';
//        }
//        $retval .= paginate_links(array(
//            'base' => $paginate_base,
//           // 'base'         => esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ) ),
//            'format' => $paginate_format,
//            //'format' => '',
//            'total' => $the_query->max_num_pages,
//            'mid_size' => 1,
//            'current' => ($paged ? $paged : 1),
//            'prev_text' => '< 前へ',
//            'next_text' => '次へ >',
//        ));
// 	$retval .= '</div>';
// 	wp_reset_postdata();
// 	return $retval;
// }
// add_shortcode('get_cat_posts', 'get_cat_posts');

function cptui_register_my_cpts() {

	/**
	 * Post Type: ニュースリリース.
	 */

	$labels = [
		"name" => esc_html__( "ニュースリリース", "constrau" ),
		"singular_name" => esc_html__( "ニュースリリース", "constrau" ),
	];

	$args = [
		"label" => esc_html__( "ニュースリリース", "constrau" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "release", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "release", $args );

	/**
	 * Post Type: WEB制作FAQ.
	 */

	$labels = [
		"name" => esc_html__( "WEB制作FAQ", "constrau" ),
		"singular_name" => esc_html__( "WEB制作FAQ", "constrau" ),
	];

	$args = [
		"label" => esc_html__( "WEB制作FAQ", "constrau" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "web_faq", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "web_faq", $args );

	/**
	 * Post Type: 採用についてFAQ.
	 */

	$labels = [
		"name" => esc_html__( "採用についてFAQ", "constrau" ),
		"singular_name" => esc_html__( "採用についてFAQ", "constrau" ),
	];

	$args = [
		"label" => esc_html__( "採用についてFAQ", "constrau" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "recruit_faq", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "recruit_faq", $args );

	/**
	 * Post Type: 一般的なFAQ.
	 */

	$labels = [
		"name" => esc_html__( "一般的なFAQ", "constrau" ),
		"singular_name" => esc_html__( "一般的なFAQ", "constrau" ),
	];

	$args = [
		"label" => esc_html__( "一般的なFAQ", "constrau" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "faq_n", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq_n", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: リリースカテゴリ.
	 */

	$labels = [
		"name" => esc_html__( "リリースカテゴリ", "constrau" ),
		"singular_name" => esc_html__( "リリースカテゴリ", "constrau" ),
	];

	
	$args = [
		"label" => esc_html__( "リリースカテゴリ", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'news_cat', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "news_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "news_cat", [ "release" ], $args );

	/**
	 * Taxonomy: 質問カテゴリ.
	 */

	$labels = [
		"name" => esc_html__( "質問カテゴリ", "constrau" ),
		"singular_name" => esc_html__( "質問カテゴリ", "constrau" ),
	];

	
	$args = [
		"label" => esc_html__( "質問カテゴリ", "constrau" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'faq_cat', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "faq_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "faq_cat", [ "faq" ], $args );

	/**
	 * Taxonomy: 01大カテゴリ一覧.
	 */

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
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "l_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "l_cat", [ "post" ], $args );

	/**
	 * Taxonomy: 02国内・国外.
	 */

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
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "country",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "country", [ "post" ], $args );

	/**
	 * Taxonomy: 03詳細一覧.
	 */

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
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "detail",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "detail", [ "post" ], $args );

	/**
	 * Taxonomy: 04Lanilani.
	 */

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
		"show_in_rest" => false,
		"show_tagcloud" => true,
		"rest_base" => "lanilani_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "lanilani_cat", [ "post" ], $args );

	/**
	 * Taxonomy: 05これまでの実績.
	 */

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
		"show_in_rest" => false,
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