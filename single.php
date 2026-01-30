<?php get_header(); ?>
<main id="achievement" class="page_main">
    <section class="">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- タイトル -->
        <h1 class="single-post__title"><?php the_title(); ?></h1>
        
        <!-- アイキャッチ画像 -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="single-post__thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>
        
        <!-- カテゴリとタクソノミー -->
        <div class="single-post__meta">
            <?php
            // 通常のカテゴリを取得
            $categories = get_the_category();
            if ($categories) {
                foreach ($categories as $category) {
                    echo '<span class="single-post__category">';
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                    echo '</span>';
                }
            }
            
            // 01大カテゴリ一覧 (l_cat)
            $l_cats = get_the_terms(get_the_ID(), 'l_cat');
            if ($l_cats && !is_wp_error($l_cats)) {
                foreach ($l_cats as $term) {
                    echo '<span class="single-post__taxonomy">';
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
                    echo '</span>';
                }
            }
            
            // 02国内・国外 (country)
            $countries = get_the_terms(get_the_ID(), 'country');
            if ($countries && !is_wp_error($countries)) {
                foreach ($countries as $term) {
                    echo '<span class="single-post__taxonomy">';
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
                    echo '</span>';
                }
            }
            
            // 03詳細一覧 (detail)
            $details = get_the_terms(get_the_ID(), 'detail');
            if ($details && !is_wp_error($details)) {
                foreach ($details as $term) {
                    echo '<span class="single-post__taxonomy">';
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
                    echo '</span>';
                }
            }
            
            // 04Lanilani (lanilani_cat)
            $lanilani_cats = get_the_terms(get_the_ID(), 'lanilani_cat');
            if ($lanilani_cats && !is_wp_error($lanilani_cats)) {
                foreach ($lanilani_cats as $term) {
                    echo '<span class="single-post__taxonomy">';
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
                    echo '</span>';
                }
            }
            
            // 05これまでの実績 (history)
            $histories = get_the_terms(get_the_ID(), 'history');
            if ($histories && !is_wp_error($histories)) {
                foreach ($histories as $term) {
                    echo '<span class="single-post__taxonomy">';
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
                    echo '</span>';
                }
            }
            ?>
        </div>
        
        <!-- 本文 -->
        <div class="single-post__content">
            <?php the_content(); ?>
        </div>
        
        <!-- 編集プロダクション事業・メディア事業の場合のカスタムフィールドテーブル -->
        <?php
        // カテゴリが「編集プロダクション事業」または「メディア事業」かチェック
        $is_editorial = false;
        if ($categories) {
            foreach ($categories as $category) {
                if ($category->name === '編集プロダクション事業' || $category->name === 'メディア事業') {
                    $is_editorial = true;
                    break;
                }
            }
        }
        
        if ($is_editorial) {
            $plate = get_post_meta(get_the_ID(), 'plate', true);
            $publish = get_post_meta(get_the_ID(), 'publish', true);
            $price = get_post_meta(get_the_ID(), 'price', true);
            $release = get_post_meta(get_the_ID(), 'release', true);
            
            // いずれかのフィールドに値がある場合のみテーブルを表示
            if ($plate || $publish || $price || $release) {
                ?>
                <div class="single-post__custom-fields">
                    <table class="custom-fields-table">
                        <tr>
                            <th>名称</th>
                            <td><?php the_title(); ?></td>
                        </tr>
                        <?php if ($plate) : ?>
                            <tr>
                                <th>版型</th>
                                <td><?php echo esc_html($plate); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($publish) : ?>
                            <tr>
                                <th>発行</th>
                                <td><?php echo esc_html($publish); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($price) : ?>
                            <tr>
                                <th>定価</th>
                                <td><?php echo esc_html($price); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($release) : ?>
                            <tr>
                                <th>発売日</th>
                                <td><?php echo esc_html($release); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
                <?php
            }
        }
        ?>
        <?php endwhile; endif; ?>
    </section>
</main>
<?php get_footer(); ?>