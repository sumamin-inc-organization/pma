<?php get_header(); ?>
<main id="service-event" class="page_main">
    <section class="first_section">
        <div class="page_title_wrap">
            <div class="page_title">
                <h2 class="page_title_main">EVENT</h2>
                <p class="page_title_sub">PR･イベント事業</p>
            </div>
        </div>
        <div class="service_description">
            <p>独自のリソースとネットワークを活用したプロモーション、イベントプロデュースをお手伝いいたします。​</p>
        </div>
        <div class="lower_kv">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service-event/kv-sp.webp" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-event/kv.webp" alt="PR･イベント事業">
            </picture>
        </div>
        <div class="service_content">
            <div class="service_inner service_inner1">
                <div class="service_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-event/event1.webp" alt="PR企画・イベント提案">
                </div>
                <div class="service_text">
                    <h3>PR企画・イベント提案</h3>
                    <p>
                        自社発行メディア『LaniLani』はもちろん、同ウェブサイトやSNS、当社が参画・協力しているイベント、テレビ局や大手提携サイトなどとの独自ネットワークなど、さまざまなリソースを使ったプロモーションやイベントを提案させていただきます。
                    </p>
                </div>
            </div>
            <div class="service_inner service_inner2">
                <div class="service_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-event/event2.webp" alt="オリジナルアイテム開発">
                </div>
                <div class="service_text">
                    <h3>オリジナルアイテム開発</h3>
                    <p>
                        集客の足掛かりとして、またイベントを盛り上げるアイテムとして、ハワイ発人気ブランド「Lilly & Emma」を活用したオリジナル商品やノベルティ、また撥水性・防汚性に優れた革新的なファブリック素材を活用した商品など、オリジナリティの高い商品開発の企画提案が可能です。
                    </p>
                    <div class="service_link">
                        <a class="service_btn" href="<?php echo esc_url(home_url('/apparel-lp/')); ?>">ハワイブランド「Lilly & Emma」</a>
                        <a class="service_btn" href="">機能性ファブリックについて</a>
                    </div>
                </div>
            </div>
            <div class="service_inner service_inner3">
                <div class="service_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-event/event3.webp" alt="交通広告">
                </div>
                <div class="service_text">
                    <h3>交通広告</h3>
                    <p>
                        車両、駅、大型ビジョンなど多彩な場所での広告展開が可能です。ポスター、デジタルサイネージ、ステッカーなど、ターゲットに合わせて最適なプランを提案いたします。駅利用者を意識した広告戦略から、ストリートの大型ビジョンや車両まるごと貸し切り広告まで、幅広いニーズに対応しています。
                    </p>
                </div>
            </div>
        </div>
        <div class="deco__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
        </div>
    </section>
</main>
<?php get_footer(); ?>