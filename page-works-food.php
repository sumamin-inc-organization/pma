<?php get_header(); ?>
<main id="achievement" class="page_main">
    <div class="achievement_inner">
        <section id="achievementTitle" class="first_section">
            <div class="works_page_title_wrap">
                <h2 class="works_page_title">WORKS</h2>
                <div class="works_page_title_main">
                    <h1 class="page_title_main">FOOD<span>&</span><br>BEVERAGE</h1>
                    <p class="page_title_sub">飲食事業実績</p>
                </div>
            </div>
            <div class="works_description">
                <p>
                浅草本店・渋谷マルイ店、都内２店舗で展開する日本初のバニラスイーツ専門店「東京バニラファクトリー」。<br>
                弊社で最も新しい事業として力を入れており、日本テレビ『ヒルナンデス！』『ゼロイチ』と、人気番組でも紹介されるなど<br class="pc">
                話題となっております。
                </p>
            </div>
            <div class="deco__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
            </div>
        </section>
        <section class="archive_list">
            <div class="archive_list_notice">
            クリックで詳細が確認できます。
            </div>
            <?php
            // カテゴリー「works」と「media」の両方を持つ投稿を取得
            $works_cat = get_category_by_slug('works');
            $media_cat = get_category_by_slug('food');
            
            if ($works_cat && $media_cat) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, // すべての投稿を取得
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $works_cat->term_id,
                        ),
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $media_cat->term_id,
                        ),
                    ),
                );
                
                $the_query = new WP_Query($args);
            }
            ?>
            <div class="achievement_list">
                <?php if (isset($the_query) && $the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="achievement_item">
                            <?php
                            // 投稿のURLを取得
                            $post_url = get_permalink();
                            // タイトルを取得
                            $title = get_the_title();
                            // アイキャッチ画像を取得
                            if (has_post_thumbnail()) {
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            } else {
                                $thumbnail_url = '';
                            }
                            ?>
                            <?php if ($thumbnail_url) : ?>
                                <div class="achievement_item_image">
                                    <a href="<?php echo esc_url($post_url); ?>">
                                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="achievement_item_text">
                                <a href="<?php echo esc_url($post_url); ?>">
                                    <h3 class="achievement_item_title"><?php echo esc_html($title); ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <div class="achievement_item">該当する投稿がありませんでした。</div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>