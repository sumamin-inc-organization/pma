<?php get_header(); ?>
<main id="service" class="page_main">
    <section class="first_section">
        <div class="page_title_wrap">
            <div class="page_title">
                <h1 class="page_title_main">SERVICES</h1>
                <p class="page_title_sub">事業紹介</p>
            </div>
        </div>
        <div class="service_description">
            <p>国内・海外の情報誌やムック、企業PR誌、WEB媒体など、年間100冊以上を制作する編集プロダクション事業を主軸に、<br class="pc">
            自社媒体の発行やメディア事業、コンテンツや商品の開発、PR・イベント支援など幅広い事業を展開しています。</p>
        </div>
        <div class="service_list">
            <ul class="service_list_inner">
                <li class="service_list_item list1">
                    <a href="<?php echo home_url('/service-editorial/'); ?>" class>
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">EDITORIAL</span><span class="service_list_item_title_ja">編集プロダクション事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list2">
                    <a href="<?php echo home_url('/service-media/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">MEDIA</span><span class="service_list_item_title_ja">メディア事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list3">
                    <a href="<?php echo home_url('/service-contents/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">CONTENT</span><span class="service_list_item_title_ja">コンテンツ制作事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list4">
                    <a href="<?php echo home_url('/service-event/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">EVENT</span><span class="service_list_item_title_ja">PR・イベント事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list5">
                    <a href="<?php echo home_url('/service-consulting/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">CONSULTING</span><span class="service_list_item_title_ja">コンサルティング事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list6">
                    <a href="<?php echo home_url('/service-apparel/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">APPAREL</span><span class="service_list_item_title_ja">アパレル事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list7">
                    <a href="<?php echo home_url('/service-ec/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">EC</span><span class="service_list_item_title_ja">EC事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list8">
                    <a href="<?php echo home_url('/service-sdgs/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en">SDGs</span><span class="service_list_item_title_ja">SDGs推進事業</span></h3>
                    </a>
                </li>
                <li class="service_list_item list9">
                    <a href="<?php echo home_url('/service-food/'); ?>">
                        <h3 class="service_list_item_title"><span class="service_list_item_title_en service_list_item_title_en--small">FOOD&BEVERAGE</span><span class="service_list_item_title_ja">飲食事業</span></h3>
                    </a>
                </li>
            </ul>
        </div>
        <div class="deco__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
        </div>
    </section>
    <section id="works">
        <div class="works_inner">
            <div class="page_title_wrap">
                <div class="page_title">
                    <h2 class="page_title_main">WORKS</h2>
                </div>
                <div class="pc">
                    <ul class="view__more">
                        <a href="<?php echo home_url('/works/'); ?>">
                            <li class="view__more--btn">
                                <p class="view__more--text">VIEW ALL</p>
                            </li>
                        </a>
                        <a href="<?php echo home_url('/works/'); ?>">
                            <li class="slideBtn__right"></li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="works_posts swiper worksSwiper">
            <?php
            // カテゴリースラッグ「rss」以外の投稿を最新8件取得
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8,
                'category__not_in' => array(),
            );

            // 「rss」スラッグのカテゴリIDを取得
            $rss_cat = get_category_by_slug('rss');
            if ( $rss_cat ) {
                $args['category__not_in'] = array( $rss_cat->term_id );
            }

            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) : ?>
                <ul class="works_posts_list swiper-wrapper">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li class="works_post_item swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="works_post_thumb">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="works_post_content">
                                    <span class="works_post_date"><?php echo get_the_date('y.m.d'); ?></span>
                                    <h3 class="works_post_title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>投稿がありません。</p>
            <?php endif; ?>
            </div>
            <div class="sp">
                <ul class="view__more">
                    <a href="<?php echo home_url('/works/'); ?>">
                        <li class="view__more--btn">
                            <p class="view__more--text">VIEW ALL</p>
                        </li>
                    </a>
                    <a href="<?php echo home_url('/works/'); ?>">
                        <li class="slideBtn__right"></li>
                    </a>
                </ul>
            </div>
        </div>
    </section>

    <section class="hawaiiInfo">
        <div class="hawaiiInfo_inner">
            <div class="sec__top">
                <div class="sec__titleBox">
                    <h2 class="sec__title fadeIn js-fadeIn"><span
                            class="hawaii__title--logo">HAWAII</span><br>
                        INFORMATION</h2>
                    <div class="sec__title--border"><span class="js-border"></span></div>
                </div>
                <div class="for-pc">
                    <ul class="slideBtn">
                        <li class="slideBtn__left swiper-button-prev"></li>
                        <li class="slideBtn__right swiper-button-next"></li>
                    </ul>
                </div>
            </div>
            <div class="sec__post">
            <?php
                echo do_shortcode('[feedzy-rss feeds=https://www.lanilanihawaii.com/feed max="6" offset="0" feed_title="yes" refresh="1_hours" lazy="no" disable_default_style="yes" classname="swiper" dryrun="yes" target="_blank" meta="date" summary="no" size="400" http="https"]');
            ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>