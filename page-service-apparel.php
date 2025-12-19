<?php get_header(); ?>
<main id="service" class="page_main">
    <div class="service_inner page_inner">
        <section id="serive" class="first_section">
            <div class="page_title_wrap">
                <div class="page_title">
                    <h2 class="page_title_main">APPAREL</h2>
                    <p class="page_title_sub">アパレル事業</p>
                </div>
            </div>
            <div class="service_description">
                <p>ワイキキ・カラカウア通りに直営セレクトショップ 『Lilly＆Emma』を展開。</p>
            </div>
            <div class="lower_kv">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/kv-sp.webp" media="(max-width: 767px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/kv.webp" alt="コンテンツ制作事業">
                </picture>
            </div>
            <div class="service_content">
                <div class="service_inner">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/apparel1.webp" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/apparel2.webp" alt="">
                    </div>
                    <div>
                        <h3>オリジナルアイテムや<br>セレクトアイテムを販売</h3>
                        <p>
                            オシャレでエレガントな姉、リリーと、元気でキュートな妹、エマ。この「二人の姉妹のクローゼット」をコンセプトにしたセレクトショップをハワイ・ホノルルに展開しています。 同ブランドの「FEEL ALOHA」ロゴが入ったＴシャツは、SNSをきっかけに大ヒット。着ている姿を自撮りしてinstagramにアップするのがハワイでの流行となりました。<br><br>
                            そのほかにも、防水性・防汚性に優れた世界特許の特殊素材で作ったアイテムが話題を呼び、オリジナルのコラボグッズを数々の企業のノベルティとしてご活用いただいております。
                        </p>
                        <a class="service_btn" href="https://lilly-and-emma.com/" target="_blank">Lilly & Emma 公式サイト</a>

                    </div>
                </div>
                <div class="service_inner service_inner1">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/apparel3.webp" alt="">
                    </div>
                    <div>
                        <h3>世界初！<br>カスタマイズできる<br>特殊な多機能性素材</h3>
                        <p>
                            快適多機能性素材を活用したLilly & EmmaのSDGs推進プロジェクトです。抗菌やセルフクリーニングなどさまざまな機能を自由に組み合わせてアパレルやプロダクトに加工付与できる技術を活用。目的に合わせて機能をカスタマイズできる点が大きな特徴です。
                        </p>
                    </div>
                </div>
                <div class="service_inner service_inner2
                ">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-apparel/apparel4.webp" alt="">
                    </div>
                    <div>
                        <p>
                            ハワイの美しい自然や地球環境、関連企業およびスタッフ、労働環境などステークホルダーに対してサステナビリティな視点から配慮し、過剰な生産はいたしません。<br>
                            OEM展開やコラボレーションなども可能です。
                        </p>
                        <a class="service_btn" href="<?php echo esc_url(home_url('/apparel-lp/')); ?>">快適多機能性素材について</a>
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