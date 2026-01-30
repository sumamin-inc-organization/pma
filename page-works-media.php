<?php get_header(); ?>
<main id="achievement" class="page_main">
    <div class="achievement_inner">
        <section id="achievementTitle" class="first_section">
            <div class="works_page_title_wrap">
                <h2 class="works_page_title">WORKS</h2>
                <h1 class="works_page_title_main">
                    <span class="page_title_main">MEDIA</span>
                    <span class="page_title_sub">メディア事業実績</span>
                </h1>
            </div>
            <div class="works_description">
                <p>
                    ハワイを代表するツーリスト向けフリーマガジン＆WEBサイトを運営。<br>
                    数々のハワイガイドを手がけてきたP.M.A.トライアングルが、そのノウハウとネットワークを結集。<br>
                    これまでとは違った新しい視点でのメディア作りを目指し、ハワイのフリーマガジンの中で確固たる<br>
                    地位を築く媒体となっております。
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
            $media_cat = get_category_by_slug('media');
            
            // 現在のページ番号を取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            
            if ($works_cat && $media_cat) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 12, // 1ページあたり12件
                    'paged' => $paged, // ページ番号を指定
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
            <?php if (isset($the_query) && $the_query->max_num_pages > 1) : ?>
                <!-- ページネーション -->
                <div class="news_post_pagination">
                    <?php custom_pagination_with_search($the_query); ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>