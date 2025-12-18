<?php
// 表示したいカテゴリーのスラッグを、希望の順番で配列に記載
$target_slugs = array('production', 'media', 'contents', 'pr', 'consulting', 'apparel', 'ec', 'sdgs', 'food');

// カテゴリー情報を取得
$categories = get_categories(array(
    'slug' => $target_slugs,
    'hide_empty' => false, // 投稿がないカテゴリも表示する場合は true→false に
));

// スラッグ順に並び替え（get_categoriesの返却順は保証されないため）
$sorted_categories = array();
foreach ($target_slugs as $slug) {
    foreach ($categories as $cat) {
        if ($cat->slug === $slug) {
            $sorted_categories[] = $cat;
        }
    }
}

//　キーワード検索で表示を絞り込み
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$search_query = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged,
);

// 検索ワードがあれば、クエリに追加
if (!empty($search_query)) {
    $args['s'] = $search_query;
}

// 「rss」カテゴリーを除外するためのIDを取得
$rss_category = get_category_by_slug('rss');
$exclude_category_id = $rss_category ? $rss_category->term_id : null;

// 「rss」カテゴリーが存在する場合、そのカテゴリーの投稿を除外
if ($exclude_category_id) {
    $args['category__not_in'] = array($exclude_category_id);
}

$query = new WP_Query($args);
?>
<?php get_header(); ?>
<main id="news" class="page_main">
    <div class="news_inner page_inner">
        <section id="newsMain" class="first_section">
            <div class="page_title_wrap">
                <div class="page_title">
                    <h1 class="page_title_main">NEWS</h1>
                    <p class="page_title_sub">お知らせ</p>
                </div>
            </div>
            <div class="news_description">
                <div class="news_description_inner">
                    <p class="news_description_text">最新の業務実績や催事情報など会社からの新着情報です。</p>
                </div>
            </div>
            <div class="news_content">
                <div class="news_content_inner">
                    <div class="news_aside">
                        <div class="news_aside_inner">
                            <div class="news_aside_search">
                                <form method="get" action="<?php echo esc_url(get_permalink()); ?>" class="search-form">
                                    <input type="text" name="search" value="<?php echo esc_attr($search_query); ?>" placeholder="検索" />
                                    <button class="news_aside_search_btn" type="submit">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.07129 0.500488C13.8048 0.500619 17.6426 4.3382 17.6426 9.07178C17.6424 13.8052 13.8048 17.6429 9.07129 17.6431C4.33771 17.6431 0.50013 13.8053 0.5 9.07178C0.5 4.33812 4.33763 0.500488 9.07129 0.500488Z" stroke="#333333"/>
                                            <path d="M15.5752 15.575L19.9997 19.9994" stroke="#333333" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="news_aside_list_title">
                                <h3 class="news_aside_list_title_text">CATEGORY</h3>
                            </div>
                            <ul class="news_aside_list">
                                <?php foreach ($sorted_categories as $category) : ?>
                                <li class="news_aside_item">
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                        <p class="news_aside_item_title"><?php echo esc_html($category->name); ?><span class="news_aside_item_count">(<?php echo $category->count; ?>)</span></p>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="#333333"/>
                                            <path d="M10.668 8L13.116 10.452H0" stroke="white" stroke-miterlimit="10"/>
                                        </svg>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="news_main">
                        <div class="news_main_inner">
                            <?php if ( $query->have_posts() ) : ?>
                            <ul class="news_post_list">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <li class="news_post_item">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="news_post_info">
                                            <span class="news_post_date"><?php the_time('Y.m.d'); ?></span>
                                            <?php
                                                $categories = get_the_category();
                                                if ( ! empty( $categories ) ) {
                                                    echo '<span class="news_post_category">' . esc_html( $categories[0]->name ) . '</span>';
                                                }
                                            ?>
                                        </div>
                                        <p class="news_post_title"><?php the_title(); ?></p>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <!-- ページネーション -->
                            <div class="news_post_pagination">
                            <?php custom_pagination_with_search($query); ?>
                            </div>
                            <?php else : ?>
                            <p>該当する投稿がありませんでした。</p>
                            <?php endif; ?>

                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>