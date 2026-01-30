
<footer class="footer">
    <div>
        <div class="footer_content contact">
            <div class="contact__inner">
                <h2 class="contact__title fadeIn js-fadeIn">CONTACT</h2>
                <a href="<?php echo esc_url( get_permalink(get_page_by_path('contact'))) ?>" class="contact__more">
                    <p class="contact__more--text fadeIn js-fadeIn">CONTACT US</p>
                    <p class="contact__more--btn"></p>
                </a>
            </div>
            <div class="contact__imgBox">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/footer/img-footer.jpg" media="(min-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/img-footer_sp.jpg" alt="CONTACT US" class="contact__img">
                </picture>
            </div>
            <div class="contact__office--wrap">
                <div class="contact__office--imgBox">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/img-footer_logo.png" alt="株式会社P.M.A.トライアングル" class="contact__office--img">
                </div>
                <div class="contact__office--inner">
                    <p class="contact__office--name">株式会社P.M.A.トライアングル</p>
                    <p class="contact__office--info">〒102-0074<br class="sp"><span
                            class="pc">&emsp;</span>東京都千代田区九段南2-9-4<br class="sp"><span
                            class="pc">&emsp;</span>久保寺ツインタワービル2F<br><a
                            href="tel:03-5215-0323">電話番号：03-5215-0323 （代表）</a><br class="sp"><span
                            class="pc">&emsp;</span>FAX番号：03-5215-0324</p>
                </div>
            </div>
        </div>
        <div class="footer_content contents">
            <div class="contents__wrap">
                <h3 class="contents__title">CONTENTS</h3>
                <ul class="contents__inner">
                    <li class="contents__item">
                        <h4 class="contents__item--title is-icon">SERVICES</h4>
                        <div class="contents__itemBox js-accordion">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-editorial'))); ?>" class="contents__link">
                                <p class="contents__item--inside">編集プロダクション事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-media'))); ?>" class="contents__link">
                                <p class="contents__item--inside">メディア事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-contents'))); ?>" class="contents__link">
                                <p class="contents__item--inside">コンテンツ制作事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-event'))); ?>" class="contents__link">
                                <p class="contents__item--inside">PR・イベント事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-consulting'))); ?>" class="contents__link">
                                <p class="contents__item--inside">コンサルティング事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-apparel'))); ?>" class="contents__link">
                                <p class="contents__item--inside">アパレル事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-ec'))); ?>" class="contents__link">
                                <p class="contents__item--inside">EC事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-sdgs'))); ?>" class="contents__link">
                                <p class="contents__item--inside">SDGs事業</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-food'))); ?>" class="contents__link">
                                <p class="contents__item--inside">飲食事業</p>
                            </a>
                        </div>
                    </li>
                    <li class="contents__item">
                        <h4 class="contents__item--title is-icon">
                            WORKS
                        </h4>
                        <div class="contents__itemBox js-accordion">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-editorial'))); ?>" class="contents__link">
                                <p class="contents__item--inside">編集プロダクション事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-media'))); ?>" class="contents__link">
                                <p class="contents__item--inside">メディア事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-contents'))); ?>" class="contents__link">
                                <p class="contents__item--inside">コンテンツ制作事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-event'))); ?>" class="contents__link">
                                <p class="contents__item--inside">PR・イベント事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-consulting'))); ?>" class="contents__link">
                                <p class="contents__item--inside">コンサルティング事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-apparel'))); ?>" class="contents__link">
                                <p class="contents__item--inside">アパレル事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-ec'))); ?>" class="contents__link">
                                <p class="contents__item--inside">EC事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-sdgs'))); ?>" class="contents__link">
                                <p class="contents__item--inside">SDGs事業実績</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-food'))); ?>" class="contents__link">
                                <p class="contents__item--inside">飲食事業実績</p>
                            </a>
                        </div>
                    </li>
                    <li class="contents__item">
                        <h4 class="contents__item--title for-pc open">NEWS</h4>
                        <div class="contents__itemBox pc">
                            <a href="<?php echo esc_url( get_permalink(get_page_by_path('news'))) ?>" class="contents__link">
                                <p class="contents__item--inside">おしらせ</p>
                            </a>
                        </div>
                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('news'))) ?>" class="sp">
                            <h4 class="contents__item--title">NEWS</h4>
                        </a>
                        <h4 class="contents__item--title is-mt20 is-icon">COMPANY</h4>
                        <div class="contents__itemBox js-accordion">
                            <a href="<?php echo esc_url( get_permalink(get_page_by_path('company'))) ?>" class="contents__link">
                                <p class="contents__item--inside">企業情報</p>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('company/vision'))); ?>" class="contents__link">
                                <p class="contents__item--inside">ビジョン・理念</p>
                            </a>
                        </div>
                        <h4 class="contents__item--title is-mt20 is-icon">
                            RECRUIT
                        </h4>
                        <div class="contents__itemBox js-accordion">
                            <a href="<?php echo esc_url( get_permalink(get_page_by_path('recruit'))) ?>" class="contents__link">
                                <p class="contents__item--inside">採用情報</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#body" class="backTop__link">
                <p class="backTop__text">BACK TO TOP</p>
            </a>
        </div>
        <div class="footer_content footer__bottom">
            <div class="footer__bottom--wrap">
                <ul class="footer__other">
                    <li class="footer__other--item">
                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('contact'))) ?>">制作依頼･相談・問い合わせ</a>
                    </li>
                    <li class="footer__other--item">
                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('privacy-policy'))) ?>">プライバシーポリシー</a>
                    </li>
                    <li class="footer__other--item">
                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('company'))) ?>">企業情報</a>
                    </li>
                </ul>
                <p class="copyRight">Copyright &copy; PMA TRYANGLE ALL RIGHTS RESERVED</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>