<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P.M.A.Tryangle,inc</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=EB+Garamond&family=Inter:wght@100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
    <!-- adobe font -->
    <link rel="stylesheet" href="https://use.typekit.net/lvk8vax.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body id="body">
    <?php wp_body_open(); ?>
    <!-- loading -->
    <?php if ( is_front_page() ) : ?>
    <div id="loading">
        <div class="loading__inner">
            <span></span>
            <span></span>
            <span></span>
            <p>LOADING</p>
        </div>
    </div>
    <?php endif; ?>

    <div class="body_inner">

        <header>
            <div class="header__outer">
                <div class="header__inner">
                    <div class="header__logo">
                        <?php if ( is_front_page() ) : ?>
                            <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo_img01">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="株式会社P.M.A.Tryangle" class="header__logoImg">
                            </a>
                        <?php else : ?>
                            <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo_img01">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-black.svg" alt="株式会社P.M.A.Tryangle" class="header__logoImg">
                            </a>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>"  class="logo_img02" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_navy.svg" alt="株式会社P.M.A.Tryangle" class="header__logoImg"></a>
                    </div>
                    <nav class="header__container">
                        <ul class="headerList">
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a>
                            </li>
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( get_permalink(get_page_by_path('company'))) ?>">COMPANY</a>
                                <span class="toggle-icon"></span>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="dropdown-menu__item"><a title="ビジョン・理念" href="<?php echo esc_url( get_permalink( get_page_by_path('company/vision'))); ?>">ビジョン・理念</a></li>
                                </ul>
                            </li>
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( get_permalink(get_page_by_path('works'))) ?>">WORKS</a>
                                <span class="toggle-icon"></span>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="dropdown-menu__item"><a title="編集プロダクション事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-editorial'))); ?>">編集プロダクション事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="メディア事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-media'))); ?>">メディア事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="コンテンツ制作事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-contents'))); ?>">コンテンツ制作事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="PR・イベント事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-event'))); ?>">PR・イベント事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="コンサルティング事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-consulting'))); ?>">コンサルティング事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="アパレル事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-apparel'))); ?>">アパレル事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="EC事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-ec'))); ?>">EC事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="SDGs推進事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-sdgs'))); ?>">SDGs推進事業実績</a></li>
                                    <li class="dropdown-menu__item"><a title="飲食事業実績" href="<?php echo esc_url( get_permalink( get_page_by_path('works/works-food'))); ?>">飲食事業実績</a></li>
                                </ul>
                            </li>
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( get_permalink(get_page_by_path('service'))) ?>">SERVICES</a>
                                <span class="toggle-icon"></span>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="dropdown-menu__item"><a title="編集プロダクション事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-editorial'))); ?>">編集プロダクション事業</a></li>
                                    <li class="dropdown-menu__item"><a title="メディア事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-media'))); ?>">メディア事業</a></li>
                                    <li class="dropdown-menu__item"><a title="コンテンツ制作事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-contents'))); ?>">コンテンツ制作事業</a></li>
                                    <li class="dropdown-menu__item"><a title="PR･イベント事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-event'))); ?>">PR･イベント事業</a></li>
                                    <li class="dropdown-menu__item"><a title="コンサルティング事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-consulting'))); ?>">コンサルティング事業</a></li>
                                    <li class="dropdown-menu__item"><a title="アパレル事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-apparel'))); ?>">アパレル事業</a></li>
                                    <li class="dropdown-menu__item"><a title="EC事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-ec'))); ?>">EC事業</a></li>
                                    <li class="dropdown-menu__item"><a title="SDGs推進事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-sdgs'))); ?>">SDGs推進事業</a></li>
                                    <li class="dropdown-menu__item"><a title="飲食事業" href="<?php echo esc_url( get_permalink( get_page_by_path('service/service-food'))); ?>">飲食事業</a></li>
                                </ul>
                            </li>
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( get_permalink(get_page_by_path('recruit'))) ?>">RECRUIT</a>
                            </li>
                            <li class="headerList__item">
                                <a href="<?php echo esc_url( get_permalink(get_page_by_path('contact'))) ?>">CONTACT</a>
                            </li>
                        </ul>
                        <div class="headerMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </nav>
                </div>
            </div>
            <nav class="header__menu">
                <div class="menu__overlay">
                    <div class="menu__container">
                        <div class="menu__wrap">
                            <div class="close__btn"><span class="dli-close"></span></div>
                            <div class="menu__inner">
                                <ul class="contents__inner">
                                    <li class="contents__item">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <p class="contents__item--title">
                                                HOME
                                            </p>
                                        </a>
                                    </li>
                                    <li class="contents__item">
                                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('company'))) ?>">
                                            <p class="contents__item--title">
                                                COMPANY
                                            </p>
                                        </a>
                                        <div class="toggle-icon__wrap absolute-elem"><span class="toggle-icon black"></span></div>
                                        <div class="contents__itemBox js-accordion" style="display: none;">
                                            <a href="<?php echo esc_url( get_permalink( get_page_by_path('company/vision'))); ?>" class="contents__link">
                                                <p class="contents__item--inside">ビジョン・理念</p>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="contents__item">
                                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('works'))) ?>">
                                            <p class="contents__item--title">
                                                WORKS
                                            </p>
                                        </a>
                                        <div class="toggle-icon__wrap absolute-elem"><span class="toggle-icon black"></span></div>
                                        <div class="contents__itemBox js-accordion" style="display: none;">
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
                                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('service'))) ?>">
                                            <p class="contents__item--title">SERVICES</p>
                                        </a>
                                        <div class="toggle-icon__wrap absolute-elem"><span class="toggle-icon black"></span></div>
                                        <div class="contents__itemBox js-accordion" style="display: none;">
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
                                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('recruit'))) ?>">
                                            <p class="contents__item--title">
                                                RECRUIT
                                            </p>
                                        </a>
                                    </li>
                                    <li class="contents__item">
                                        <a href="<?php echo esc_url( get_permalink(get_page_by_path('news'))) ?>">
                                            <p class="contents__item--title open">
                                                NEWS
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </nav>
        </header>
        <div class="mainContent">