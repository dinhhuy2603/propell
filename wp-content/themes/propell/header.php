<?php
    $assets = get_path_assets();
    $current_home_url = pll_home_url();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo the_title() ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:sitename" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="" />
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" href="/icon.png">
    <link rel="icon" href="/icon.png">
</head>

<body class="<?php echo get_page_class(); ?>">

<header id="header" class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__logo"><a href="./"><img src="<?php echo $assets ?>/img/logo.png" alt="Logo"></a></div>
            <div class="header__right">
                <div class="language only-pc">
                    <div class="language__btn js-toggle"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English">English</div>
                    <ul class="language__list">
                        <li class="active"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English"><span>English</span></li>
                        <li><img src="<?php echo $assets ?>/img/icon-lang-jp.png" alt="Japanese"><span>Japanese</span></li>
                        <li><img src="<?php echo $assets ?>/img/icon-lang-vn.png" alt="Vietnamese"><span>Vietnamese</span></li>
                    </ul>
                </div>
                <div class="search js-search"><img src="<?php echo $assets ?>/img/icon-search-gray.png" alt="search"></div>
                <div class="hamburger js-hamburger">
                    <div class="hamburger__menu"><span class="only-pc">MENU</span><b></b></div>
                </div>
                <div class="menu-toggle">
                    <div class="hamburger__close js-hamburger--close"></div>
                    <div class="menu-toggle__wrap">
                        <div class="menu-toggle__logo">
                            <picture>
                                <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/logo-white.png">
                                <img src="<?php echo $assets ?>/img/logo-nav.png" alt="Menu">
                            </picture>
                        </div>
                        <ul class="menu-toggle__nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="<?php echo get_page_url('about') ?>">About us</a></li>
                            <li><a href="<?php echo esc_url($current_home_url.'services') ?>">What we do</a></li>
                            <li><a href="<?php echo esc_url($current_home_url.'categories') ?>">Project</a></li>
                            <li><a href="<?php echo get_page_url('propellian') ?>">Propellian</a></li>
                            <li><a href="<?php echo get_page_url('careers') ?>">Careers</a></li>
                            <li><a href="<?php echo get_page_url('contact') ?>">Contact us</a></li>
                        </ul>
                        <ul class="menu-toggle__social">
                            <li><a href="#" target="_blank">FACE BOOK</a></li>
                            <li><a href="#" target="_blank">YOUTUBE</a></li>
                            <li><a href="#" target="_blank">LINKEDIN</a></li>
                        </ul>
                        <div class="language only-sp">
                            <div class="language__btn js-toggle"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English">English</div>
                            <ul class="language__list">
                                <li class="active"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English"><span>English</span></li>
                                <li><img src="<?php echo $assets ?>/img/icon-lang-jp.png" alt="Japanese"><span>Japanese</span></li>
                                <li><img src="<?php echo $assets ?>/img/icon-lang-vn.png" alt="Vietnamese"><span>Vietnamese</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search-toggle">
                    <div class="search-toggle__logo">
                        <picture>
                            <img src="<?php echo $assets ?>/img/logo-nav.png" alt="PROPELL">
                        </picture>
                    </div>
                    <div class="hamburger__close js-search--close"></div>
                    <div class="search-toggle__wrap">
                        <div class="search-toggle__input">
                            <form id="live-search-form" action="" method="get">
                                <input type="text" id="live-search-input" name="search" class="c-title" placeholder="Search">
                            </form>
                        </div>
<!--                        <div class="search-toggle__menu">-->
<!--                            <ul>-->
<!--                                <li><a href="#">ABOUT US</a></li>-->
<!--                                <li><a href="#">OUR STATEMENTS</a></li>-->
<!--                                <li><a href="#">OUR REGISTRATIONS</a></li>-->
<!--                            </ul>-->
<!--                            <ul>-->
<!--                                <li><a href="#">OUR ACHIEVEMENTS</a></li>-->
<!--                                <li><a href="#">OUR GROUP STRUCTIONS</a></li>-->
<!--                                <li><a href="#">OUR BUSINESS</a></li>-->
<!--                                <li><a href="#">OUR PROJECTS</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="only-pc">-->
<!--                                <li><a href="#">OVERVIEW</a></li>-->
<!--                                <li><a href="#">OUR PROJECTS</a></li>-->
<!--                                <li><a href="#">OTHERS</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="search-toggle__article" id="live-search-results">
<!--                            <div class="item">-->
<!--                                <div class="photo"><img src="--><?php //echo $assets ?><!--/img/top/news_img01.jpg" alt="Electrical Engineering"></div>-->
<!--                                <div class="group">-->
<!--                                    <h3 class="c-title">Electrical Engineering</h3>-->
<!--                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <div class="photo"><img src="--><?php //echo $assets ?><!--/img/top/news_img02.jpg" alt="Extra Low Voltage "></div>-->
<!--                                <div class="group">-->
<!--                                    <h3 class="c-title">Extra Low Voltage</h3>-->
<!--                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>