<?php get_header(); ?>
<main id="company" class="page_main">
    <div class="company_inner page_inner">
        <section id="companyInfo" class="first_section">
            <div class="page_title_wrap">
                <div class="page_title">
                    <h1 class="page_title_main">COMPANY</h1>
                    <p class="page_title_sub">企業情報</p>
                </div>
            </div>
            <div class="language_switch_wrap">
                <?php
                    // 「-en」を取り除いた日本語ページのスラッグを生成
                    $current_slug = get_post_field( 'post_name', get_queried_object_id() );
                    $ja_slug = preg_replace('/-en$/', '', $current_slug);
                ?>
                <a href="<?php echo home_url( '/' . $ja_slug ); ?>" class="language_switch">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.558 2.75616C12.5539 2.75021 12.5474 2.74738 12.543 2.74169C11.8921 1.88925 11.0534 1.19841 10.092 0.722899C9.13065 0.247385 8.07258 7.61901e-06 7.00005 1.75991e-10C5.92752 -7.61865e-06 4.86944 0.247355 3.90808 0.722855C2.94671 1.19835 2.10797 1.88918 1.45707 2.74161C1.45269 2.74733 1.4461 2.75016 1.44196 2.75616C1.4391 2.76031 1.43894 2.76527 1.43624 2.76946C0.504853 3.9831 0 5.47017 0 7C0 8.52984 0.504853 10.0169 1.43624 11.2305C1.43894 11.2347 1.4391 11.2397 1.44196 11.2438C1.44607 11.2498 1.45264 11.2526 1.45699 11.2583C2.10812 12.1111 2.94723 12.8021 3.90903 13.2776C4.87083 13.7532 5.92938 14.0004 7.00231 14C8.07524 13.9996 9.13363 13.7517 10.0951 13.2756C11.0566 12.7994 11.8952 12.1078 12.5458 11.2546C12.5492 11.2501 12.5548 11.2485 12.558 11.2438C12.5609 11.2397 12.5611 11.2347 12.5638 11.2305C13.4951 10.0169 14 8.52983 14 7C14 5.47016 13.4951 3.98309 12.5638 2.76946C12.5611 2.76527 12.5609 2.76031 12.558 2.75616ZM12.0846 10.4106C11.6248 10.1407 11.1381 9.9197 10.6324 9.75112C10.8053 8.99133 10.9035 8.21642 10.9255 7.4375H13.1028C13.0296 8.5006 12.6785 9.52582 12.0846 10.4106ZM0.897165 7.4375H3.07455C3.09652 8.21642 3.19468 8.99133 3.36761 9.75112C2.86187 9.9197 2.37516 10.1407 1.91542 10.4106C1.32155 9.52582 0.970424 8.5006 0.897165 7.4375ZM1.91542 3.58941C2.37516 3.85928 2.86187 4.08031 3.36761 4.24888C3.19468 5.00868 3.09652 5.78358 3.07455 6.5625H0.897165C0.970424 5.49941 1.32155 4.47419 1.91542 3.58941ZM7.4375 4.79899C8.22673 4.77457 9.01152 4.67106 9.78009 4.49001C9.93591 5.17069 10.0266 5.86465 10.051 6.5625H7.4375V4.79899ZM7.4375 3.92438V0.948168C8.30594 1.20991 9.0691 2.22698 9.54527 3.64886C8.85328 3.80885 8.14736 3.90113 7.4375 3.92438ZM6.5625 0.948168V3.92438C5.85264 3.90113 5.14672 3.80887 4.45474 3.64888C4.9309 2.22699 5.69406 1.20991 6.5625 0.948168ZM6.5625 4.79899V6.5625H3.94899C3.97338 5.86465 4.06409 5.17069 4.21991 4.49001C4.98848 4.67106 5.77327 4.77457 6.5625 4.79899ZM3.94899 7.4375H6.5625V9.20102C5.77327 9.22543 4.98848 9.32895 4.21991 9.51C4.06409 8.82932 3.97338 8.13536 3.94899 7.4375ZM6.5625 10.0756V13.0518C5.69406 12.7901 4.9309 11.773 4.45474 10.3511C5.14672 10.1911 5.85264 10.0989 6.5625 10.0756ZM7.4375 13.0518V10.0756C8.14736 10.0989 8.85328 10.1911 9.54527 10.3511C9.0691 11.773 8.30594 12.7901 7.4375 13.0518ZM7.4375 9.201V7.4375H10.051C10.0266 8.13536 9.93591 8.82932 9.78009 9.51C9.01152 9.32895 8.22673 9.22542 7.4375 9.201ZM10.9255 6.5625C10.9035 5.78358 10.8053 5.00868 10.6324 4.24888C11.1381 4.08031 11.6248 3.85928 12.0846 3.58941C12.6785 4.47419 13.0296 5.49941 13.1028 6.5625H10.9255ZM11.5371 2.89991C11.1719 3.10471 10.7887 3.27557 10.3923 3.41036C10.1592 2.66647 9.80289 1.96699 9.33821 1.34107C10.1775 1.69148 10.9286 2.22391 11.5371 2.89991ZM4.6618 1.34107C4.19711 1.96699 3.84078 2.66647 3.60767 3.41036C3.21127 3.27557 2.82806 3.10471 2.46287 2.89991C3.07141 2.22391 3.82246 1.69149 4.6618 1.34107ZM2.46289 11.1001C2.82808 10.8953 3.21129 10.7244 3.60769 10.5897C3.8408 11.3335 4.19713 12.033 4.66182 12.6589C3.82248 12.3085 3.07143 11.7761 2.46289 11.1001ZM9.3382 12.6589C9.80288 12.033 10.1592 11.3335 10.3923 10.5897C10.7887 10.7244 11.1719 10.8953 11.5371 11.1001C10.9286 11.7761 10.1775 12.3085 9.3382 12.6589Z" fill="white"/>
                    </svg>
                    <span class="language_switch_text">Japanese</span>
                </a>
            </div>
            <div class="company_image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_main-watermark-sp.webp" media="(max-width: 767px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_main-watermark.webp" alt="会社概要">
                </picture>
            </div>
            <div class="deco__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/top-about_bg.png" alt="背景画像" id="js-rotate">
            </div>
        </section>
        <section id="aboutUs">
            <div class="column_2 aboutUs_inner">
                <div class="page_title_wrap">
                    <div class="page_title">
                        <h2 class="page_title_main">ABOUT <br class="pc-more">US</h2>
                    </div>
                </div>
                <div class="aboutUs_content">
                    <div class="aboutUs_content_inner">
                        <table class="aboutUs_table">
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>Company Name</span></td>
                                <td class="aboutUs_text">株式会社 ピー・エム・エー・トライアングル<br>English name: P.M.A. TRIANGLE, Inc.</td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>Head Office</span></td>
                                <td class="aboutUs_text">〒102-0074<br>Tokyo, Chiyoda-ku, Kudan-nishi 2-9-4 Kubotsu Twin Tower Building 2F</td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>Access</span></td>
                                <td class="aboutUs_text">8-minute walk from Ichigaya Station<br>7-minute walk from Kudan-shita Station<br>7-minute walk from Hanzomon Station</td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>Phone Number</span></td>
                                <td class="aboutUs_text"><a href="tel:03-5215-0323">03-5215-0323 (Representative)</a></td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>FAX Number</span></td>
                                <td class="aboutUs_text">03-5215-0324</td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>E-mail</span></td>
                                <td class="aboutUs_text"><a href="mailto:soumu@pma-t.co.jp">soumu@pma-t.co.jp</a></td>
                            </tr>
                            <tr class="aboutUs_item">
                                <td class="aboutUs_label"><span>Business Content</span></td>
                                <td class="aboutUs_text">Editorial Production Business<br>Media Business<br>Content Production Business<br>PR & Event Business<br>Consulting Business<br>Apparel Business<br>EC Business<br>SDGs Promotion Business<br>Food & Beverage Business</td>
                            </tr>
                        </table>
                        <div class="aboutUs_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.375604555746!2d139.7439063!3d35.692373599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c68ee8ffde3%3A0x2b68ebeda2f52b62!2z5qCq5byP5Lya56S-UC5NLkEu44OI44Op44Kk44Ki44Oz44Kw44Or!5e0!3m2!1sja!2sjp!4v1760525128148!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="history">
            <div class="column_2 history_inner">
                <div class="page_title_wrap">
                    <div class="page_title">
                        <h2 class="page_title_main">HISTORY</h2>
                    </div>
                </div>
                <div class="history_content">
                    <div class="history_content_inner">
                        <table class="history_table">
                            <tr class="history_item">
                                <td class="history_label"><span>March 1991</span></td>
                                <td class="history_text">Company founded (Arakawa-ku, Tokyo)</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>April 1992</span></td>
                                <td class="history_text">Business expansion and relocation to Shinjuku-ku, Shinbashi</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>July 1995</span></td>
                                <td class="history_text">Business expansion and relocation to Shinjuku-ku, Shinbashi</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>December 1999</span></td>
                                <td class="history_text">Business expansion and relocation to Chiyoda-ku, Kudan-nishi</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>February 2004</span></td>
                                <td class="history_text">Business expansion and relocation to Chiyoda-ku, Kudan-nishi 2-9-4</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>July 2009</span></td>
                                <td class="history_text">Pre-publication of the Hawaiian Breeze LaniLani magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>October 2009</span></td>
                                <td class="history_text">Publication of the Hawaiian Breeze LaniLani magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>February 2010</span></td>
                                <td class="history_text">Establishment of the Hawaii branch</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>December 2013</span></td>
                                <td class="history_text">220,000 copies of the Hawaiian Breeze LaniLani magazine sold</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>December 2017</span></td>
                                <td class="history_text">Opening of the apparel shop 'Lilly & Emma' in Hawaii</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>November 2018</span></td>
                                <td class="history_text">Publication of the Philippine Breeze LaniLani magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>December 2019</span></td>
                                <td class="history_text">Publication of the Hawaiian Breeze LaniLani Chinese edition magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>January 2020</span></td>
                                <td class="history_text">Publication of the Taiwan Breeze LaniLani magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>December 2020</span></td>
                                <td class="history_text">Opening of the vanilla ice cream shop 'Tokyo Vanilla Factory' in Asakusa</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>February 2021</span></td>
                                <td class="history_text">Opening of the vanilla ice cream shop 'Tokyo Vanilla Factory' in Shibuya Marui</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>February 2022</span></td>
                                <td class="history_text">Opening of the apparel shop 'Lilly & Emma' in Shibuya Marui</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>July 2022</span></td>
                                <td class="history_text">Publication of the Okinawan Breeze LaniLani magazine</td>
                            </tr>
                            <tr class="history_item">
                                <td class="history_label"><span>October 2024</span></td>
                                <td class="history_text">Publication of the Hokkaido×Hawaii LaniLani magazine</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="suppliers">
            <div class="column_2 suppliers_inner">
                <div class="page_title_wrap">
                    <div class="page_title">
                        <h2 class="page_title_main">SUPPLIERS</h2>
                    </div>
                </div>
                <div class="suppliers_content">
                    <div class="suppliers_content_inner">
                        <div class="suppliers_title">
                            <h3>Suppliers</h3>
                        </div>
                        <div class="suppliers_list_wrap">
                            <ul class="suppliers_list">
                                <li class="suppliers_item">
                                    <span>KADOKAWA CORPORATION</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>PIA CORPORATION</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>JTB Publishing,Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Seibido Publishing Co.,Ltd</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>TAKARAJIMASHA,Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>THE NIKKAN KOGYO SHIMBUN,LTD.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>KOTSU SHIMBUNSHA CO., LTD.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>KEIKYU AD ENTERPRISE Co.,Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>JCB Co., Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>ECC Co., Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Japan Airlines Co., Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>JAL BRAND COMMUNICATIONS CO., LTD.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Nippon Television Network Corporation</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Recruit Co., Ltd.</span>
                                </li>
                            </ul>
                            <ul class="suppliers_list">
                                <li class="suppliers_item">
                                    <span>LY Corporation</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>ZENRIN DataCom CO., LTD.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Hakuhodo Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>ADK Holdings Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>JR East Marketing & Communications,Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Tobu Top Tours Co., Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>The Hawaii State Tourism Office</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Hawaiian Airlines</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Scandinavia Tourist Board</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Vision Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Pro Labo Holdings Co., Ltd.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Good Luck Corporation, Inc.</span>
                                </li>
                                <li class="suppliers_item">
                                    <span>Others</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>