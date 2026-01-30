<?php get_header(); ?>
<!-- main start -->
<main class="main" data-speed-y="-3">
    <!-- kv start -->
    <div class="kv">
        <video class="kv__movie" autoplay playsinline loop preload="auto" width="100%" height="100%" muted>
            <source class="videoSource" src="<?php echo get_template_directory_uri(); ?>/assets/video/movie.mp4" type="video/mp4">
        </video>
    
        <h1 class="kv__title">P.M.A.<br class="sp">Tryangle,inc</h1>
        <p class="kv__scroll">SCROLL</p>
        <span class="kv__scrollbar--white"></span>
        <span class="kv__scrollbar--black"></span>
    </div>
    <!-- kv end -->
    <!-- about start -->
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <h2 class="about__title fadeIn js-fadeIn" data-trigger="top 60%">ABOUT</h2>
                <div class="about__text--wrap">
                    <p class="about__text">
                        観光や情報を軸としたさまざまなメディアやコンテンツで、ウェルビーイングな社会を創造する一員に。<br>
                        当社では雑誌、書籍、WEBサイト、CM動画の制作など、多彩なプラットフォームにおけるコンテンツづくりを行っています。
                        <br class="pc">
                        有名観光ガイドブックや政府観光局、自治体パンフレット等、長きにわたり実績とノウハウを積み上げてきた紙媒体では、国内・海外を問わず多くのディスティネーションの魅力を発信。
                        <br>
                        <br>
                        ハワイや沖縄を中心とした自社媒体の「LaniLani」シリーズをはじめ、PR・イベントや、アパレル、SDGs推進、飲食など多彩な事業と、メディアミックスを行いながら、独自のコンテンツをお届けしています。
                    </p>
                </div>
                <div class="about__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- works start -->
    <section class="works">
        <div class="container">
            <div class="sec__top">
                <div class="sec__titleBox">
                    <h2 class="sec__title fadeIn js-fadeIn">WORKS</h2>
                    <div class="sec__title--border"><span class="js-border"></span></div>
                </div>
                <ul class="slideBtn">
                    <li class="slideBtn__left swiper-button-prev"></li>
                    <li class="slideBtn__right swiper-button-next"></li>
                </ul>
            </div>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,//表示させたい投稿の数
                    'category_name' => 'works',
            );
            $query = new WP_Query($args);
            ?>
            <div class="sec__post">
                <div class="sec__post--box swiper secSwiper">
                    <ul class="sec__post--wrap swiper-wrapper">
                    <?php									
                    if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    // タイトルを取得
                    $title = get_the_title();
                    $content_excerpt = wp_trim_words( get_the_content(), 150, '…' );
                    // アイキャッチ画像を取得
                    if (has_post_thumbnail()) {
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $thumbnail_url = 'アイキャッチ画像が設定されていません';
                    }
                        // 投稿のURLを取得
                    $post_url = get_permalink();
                    ?>
                        <li class="sec__post--item swiper-slide">
                            <a href="<?php echo esc_url($post_url); ?>" class="is-hover">
                                <div class="sec__post--imgBox">
                                    <?php if ($thumbnail_url !== 'アイキャッチ画像が設定されていません') : ?>
                                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" class="sec__post--img works__post--img">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/thumbnail.jpg" alt="No Image" class="sec__post--img works__post--img">
                                    <?php endif; ?>
                                    </div>
                                    <p class="sec__post--text"><?php echo esc_html($title); ?></p>
                                    <div class="sec__post--sentence">
                                    <?php echo wp_kses_post($content_excerpt); ?>
                                </div>
                            </a>
                        </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>投稿が見つかりませんでした。</p>';
                    endif;
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- works end -->
    <!-- services start -->
    <section class="services">
        <div class="container">
            <div class="sec__titleBox">
                <h2 class="sec__title fadeIn js-fadeIn">SERVICES</h2>
                <div class="sec__title--border"><span class="js-border"></span></div>
            </div>
            <div class="servicesNav__inner">
                <ul class="servicesNavList">
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-media'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services1.jpg" alt="自社メディア事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">MEDIA</h3>
                                <p class="servicesNavList--ja">自社メディア事業</p>
                            </div>
                        </a>
                    </li>
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-editorial'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services2.jpg" alt="編集プロダクション事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">EDITORIAL</h3>
                                <p class="servicesNavList--ja">編集プロダクション事業</p>
                            </div>
                        </a>
                    </li>
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-contents'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services3.jpg" alt="コンテンツ制作事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">CONTENT</h3>
                                <p class="servicesNavList--ja">コンテンツ制作事業</p>
                            </div>
                        </a>
                    </li>
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-apparel'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services4.jpg" alt="アパレル事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">APPAREL</h3>
                                <p class="servicesNavList--ja">アパレル事業</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="servicesNavList">
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-event'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services5.jpg" alt="PR・イベント事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">EVENT</h3>
                                <p class="servicesNavList--ja">PR・イベント事業</p>
                            </div>
                        </a>
                    </li>
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-food'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services6.jpg" alt="飲食事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">FOOD<span class="is-small35">&</span>BEVERAGE</h3>
                                <p class="servicesNavList--ja">飲食事業</p>
                            </div>
                        </a>
                    </li>
                    <li class="servicesNavList--item">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-sdgs'))); ?>">
                            <div class="servicesNavList__imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services/img-services7.jpg" alt="SDGs推進事業" class="servicesNavList__img">
                                <h3 class="servicesNavList--title">SDGs</h3>
                                <p class="servicesNavList--ja">SDGs推進事業</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- services end -->
    <!-- ec start -->
    <section class="ec">
        <div class="container">
            <div class="sec__titleBox">
                <h2 class="sec__title fadeIn js-fadeIn">EC</h2>
                <div class="sec__title--border"><span class="js-border"></span></div>
            </div>
            <div class="ecNav__inner">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path('premium-arcade'))); ?>">
                    <div class="ecNav__imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ec/img-ec_top.jpg" alt="PREMIUMARCADE" class="ecNav__img">
                    </div>
                    <div class="ecNav__sec--wrap">
                        <h3 class="ecNav__sec--title">PREMIUMARCADE</h3>
                        <p class="ecNav__sec--text">プレミアムライフを満喫できるアイテムや情報をお届け</p>
                    </div>
                </a>
                <ul class="ecNav__contents--wrap">
                    <li class="ecNav__contents--item">
                        <a href="https://lanilanimarket.com/" target="_blank" rel="noopener noreferrer">
                            <div class="ecNav__contents--imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ec/img-ec_content1.jpg" alt="LaniLani market" class="ecNav__contents--img ecNav__img">
                            </div>
                            <div class="ecNav__sec--wrap">
                                <h4 class="ecNav__contents--title">LaniLani market</h4>
                                <p class="ecNav__contents--text">エディター厳選のハワイアイテムセレクトショップ</p>
                            </div>
                        </a>
                    </li>
                    <li class="ecNav__contents--item">
                        <a href="https://lilly-and-emma.com/" target="_blank" rel="noopener noreferrer">
                            <div class="ecNav__contents--imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ec/img-ec_content2.jpg" alt="Lilly & Emma" class="ecNav__contents--img ecNav__img">
                            </div>
                            <div class="ecNav__sec--wrap">
                                <h4 class="ecNav__contents--title">Lilly & Emma</h4>
                                <p class="ecNav__contents--text">ハワイ生まれの姉妹によるリゾート･アイランド･ファッション</p>
                            </div>
                        </a>
                    </li>
                    <li class="ecNav__contents--item">
                        <a href="https://www.tokyovanilla-factory.com/" target="_blank" rel="noopener noreferrer">
                            <div class="ecNav__contents--imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ec/img-ec_content3.jpg" alt="Tokyo vanilla factory" class="ecNav__contents--img ecNav__img">
                            </div>
                            <div class="ecNav__sec--wrap">
                                <h4 class="ecNav__contents--title">Tokyo vanilla factory</h4>
                                <p class="ecNav__contents--text">日本初のバニラスイーツ専門</p>
                            </div>
                        </a>
                    </li>
                    <li class="ecNav__contents--item">
                        <a href="https://pensiero.stores.jp/" target="_blank" rel="noopener noreferrer">
                            <div class="ecNav__contents--imgBox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ec/img-ec_content4.jpg" alt="Pensiero" class="ecNav__contents--img ecNav__img">
                            </div>
                            <div class="ecNav__sec--wrap">
                                <h4 class="ecNav__contents--title">Pensiero</h4>
                                <p class="ecNav__contents--text">「食」にこだわる、お取り寄せ＆ギフトサイト</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ec end -->
    <!-- hawaiiInfo start -->
    <section class="hawaiiInfo">
        <div class="container">
            <div class="sec__top">
                <div class="sec__titleBox">
                    <h2 class="sec__title fadeIn js-fadeIn">
                        <span class="hawaii__title--logo">HAWAII</span><br>INFORMATION
                    </h2>
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
                <?php echo do_shortcode('[feedzy-rss feeds=https://www.lanilanihawaii.com/feed max="6" offset="0" feed_title="yes" refresh="1_hours" lazy="no" disable_default_style="yes" classname="swiper" dryrun="yes" target="_blank" rel="noopener noreferrer" meta="date" summary="no" size="400" http="https"]'); ?>
            </div>
        </div>
    </section>
    <!-- hawaiiInfo end -->
    <!-- news start -->
    <?php
    $args = array(
        'post_type'        => 'post',
        'posts_per_page'   => 5,
        'category__not_in' => array( get_cat_ID('RSSフィード_LaniLani') ),
    );
    $the_query = new WP_Query( $args );
    ?>  
    <section class="news">
        <div class="container">
            <div class="news__wrap">
                <div class="sec__titleBox">
                    <h2 class="sec__title fadeIn js-fadeIn">NEWS</h2>
                    <div class="sec__title--border"><span class="js-border"></span></div>
                </div>
                <div class="newsList__inner">
                    <ul class="newsList">
                    <?php if($the_query->have_posts()):
                        while($the_query->have_posts()):
                        $the_query->the_post();     
                        $category = get_the_category(); 
                    ?>
                        <li class="newsList__item">
                            <div class="newsList__item--column">
                                <p class="newsList__item--date"><?php the_time('Y.m.d');?></p>
                                <p class="newsList__item--label">
                                <?php   if ( ! empty($category) ) {
                                    echo '<a href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '">'
                                        . esc_html( $category[0]->cat_name )
                                        . '</a>';
                                } ?>
                                </p>
                            </div>
                            <p class="newsList__item--text"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></p>
                        </li>

                        <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                    </ul>
                </div>
            </div>
            <a href="<?php echo esc_url( get_permalink(get_page_by_path('news'))) ?>" class="newsList__more">
                <div class="newsList__more--btn">
                    <p class="newsList__more--text">VIEW ALL</p>
                </div>
                <div class="slideBtn__right"></div>
            </a>
        </div>
    </section>
    <!-- news end -->
</main>
<!-- main end -->
<?php get_footer(); ?>