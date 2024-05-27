<?php
/*
Template Name: Custom Index Page
*/

get_header();
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:sitename" content="" />
    <meta property="og:title" content="">
    <meta property="og:description" content="" />
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="apple-touch-icon" href="/icon.png">
    <link rel="icon" href="/icon.png">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $assets ?>/css/common/common.css">
    <link rel="stylesheet" href="<?php echo $assets ?>/libs/slick.min.css">
    <link rel="stylesheet" href="<?php echo $assets ?>/css/top.css">
</head>

<body class="page page-top">

<header id="header" class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="header__logo"><a href="./"><img src="<?php echo $assets ?>/img/logo-white.png" alt="Logo"></a></div>
            <div class="header__right">
                <div class="language only-pc">
                    <div class="language__btn js-toggle"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English">English</div>
                    <ul class="language__list">
                        <li class="active"><img src="<?php echo $assets ?>/img/icon-lang-en.png" alt="English"><span>English</span></li>
                        <li><img src="<?php echo $assets ?>/img/icon-lang-jp.png" alt="Japanese"><span>Japanese</span></li>
                        <li><img src="<?php echo $assets ?>/img/icon-lang-vn.png" alt="Vietnamese"><span>Vietnamese</span></li>
                    </ul>
                </div>
                <div class="search js-search"><img src="<?php echo $assets ?>/img/icon-search.png" alt="search"></div>
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
                            <li><a href="/about-us/">About us</a></li>
                            <li><a href="/what-we-do/">What we do</a></li>
                            <li><a href="/project/">Project</a></li>
                            <li><a href="/propellian/">Propellian</a></li>
                            <li><a href="/careers/">Careers</a></li>
                            <li><a href="/contact-us/">Contact us</a></li>
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
                    <div class="hamburger__close js-search--close"></div>
                    <div class="search-toggle__wrap">
                        <div class="search-toggle__input">
                            <input type="text" name="search" class="c-title" placeholder="Search">
                        </div>
                        <div class="search-toggle__menu">
                            <ul>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="#">OUR STATEMENTS</a></li>
                                <li><a href="#">OUR REGISTRATIONS</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">OUR ACHIEVEMENTS</a></li>
                                <li><a href="#">OUR GROUP STRUCTIONS</a></li>
                                <li><a href="#">OUR BUSINESS</a></li>
                                <li><a href="#">OUR PROJECTS</a></li>
                            </ul>
                            <ul class="only-pc">
                                <li><a href="#">OVERVIEW</a></li>
                                <li><a href="#">OUR PROJECTS</a></li>
                                <li><a href="#">OTHERS</a></li>
                            </ul>
                        </div>
                        <div class="search-toggle__article">
                            <div class="item">
                                <div class="photo"><img src="<?php echo $assets ?>/img/top/news_img01.jpg" alt="Electrical Engineering"></div>
                                <div class="group">
                                    <h3 class="c-title">Electrical Engineering</h3>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="photo"><img src="<?php echo $assets ?>/img/top/news_img02.jpg" alt="Extra Low Voltage "></div>
                                <div class="group">
                                    <h3 class="c-title">Extra Low Voltage</h3>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="main" class="main">
    <div class="keyvisual">
        <div class="keyvisual-slider js-keyvisual">
            <div class="keyvisual-slider__item"><img src="<?php echo $assets ?>/img/top/key01.jpg" class="img-fit" alt=""></div>
            <div class="keyvisual-slider__item">
                <picture>
                    <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/key02_sp.jpg">
                    <img src="<?php echo $assets ?>/img/top/key02.jpg" class="img-fit" alt="">
                </picture>
            </div>
            <div class="keyvisual-slider__item"><img src="<?php echo $assets ?>/img/top/key03.jpg" class="img-fit" alt=""></div>
        </div>
        <div class="progressBarContainer">
            <div>
                <span data-slick-index="0" class="progressBar"></span>
            </div>
            <div>
                <span data-slick-index="1" class="progressBar"></span>
            </div>
            <div>
                <span data-slick-index="2" class="progressBar"></span>
            </div>
        </div>
        <div class="keyvisual-content">
            <div class="container">
                <h1 class="keyvisual-title c-title"><span>There’s Nothing<br/>We Can’t Achieve Together</span></h1>
                <a href="#about" class="scroll">SCROLL</a>
                <ul class="only-pc">
                    <li><a href="#">PROJECT</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CAREERS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="about" class="section-about">
        <div class="container">
            <p class="c-title-sub">ABOUT US</p>
            <h2 class="c-title only-pc">
                <span><b class="big">P</b>romote / <b>R</b>emain / <b>O</b>perate</span>
                <span><b>P</b>rovide / <b>E</b>stablished / <b>L</b>ead / <b>L</b>isten</span>
            </h2>
            <h2 class="c-title only-sp">
                <span><b class="big">P</b>romote / <b>R</b>emain / </span>
                <span><b>O</b>perate</span>
                <span><b>P</b>rovide / <b>E</b>stablished / </span>
                <span><b>L</b>ead / <b>L</b>isten</span>
            </h2>
            <p class="sub-title">Investing in People & Technologies that Transform the World</p>
            <div class="row">
                <p class="text">Propell Integrated Pte Ltd was incorporated in Singapore back in 1999 with the company spearheaded by our Managing Director and founder, Mr Leng Yew Meng. Since the inception of the Company, we have strengthened our corporate management and widen the business activities. In the course of handling the projects and term contracts, our team has earned valuable experiences and exposure. </p>
                <a href="/about-us/" class="c-learn-more">LEARN MORE</a>
            </div>
        </div>
    </div>
    <div class="section-our-journey">
        <div class="container">
            <h2 class="c-title">Our Journey So Far</h2>
            <div class="timeline only-pc">
                <div class="timeline__item">
                    <p class="timeline__item--year">1999</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img01.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Propell Integrated Pte is founded by Mr Leng Yew Meng</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2008</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img02.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Secured first campus university SMU M&E contract</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2015</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img03.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Launch of Propell’s new building</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2016</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img04.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Nihon Housing Co Ltd acquired Propell Integrated Pte Ltd on Dec 2016</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2022</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img06.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Mr Terence Ho appointed as new CEO of Propell Integrated Pte Ltd</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2023</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img05.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Partnership between Pan Service Vietnam and Propell Integrated Pte Ltd</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2023</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img07.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Completion of Hyundai Motor Group Innovation Centre Singapore (HMGICS)</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">2024</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img08.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>Propell's 25th Anniversary</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>
                        </dl>
                    </div>
                </div>
                <!-- <a href="/about-us/" class="c-learn-more only-sp">MORE ABOUT US</a> -->
            </div>
            <div class="timeline only-sp">
                <div class="timeline__item">
                    <p class="timeline__item--year">1999</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img01.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>The Propellian’s Aspiration</dt>
                            <dd>" Success is not a destination. Aswe are propelling towards ourmission and complete old goals,we shall continually make newones to keep us on our journey.The future belongs to those whobelieve in the beauty of theirdream and aspiration."</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">1999</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img01.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>The Propellian’s Value</dt>
                            <dd>"As effective Propellian weinvent our own abilities andself-awareness with high mindedcharacter to put the interest ofour company above our own.The real leader in Propell are allordinary people withextraordinary determination andthe different between ordinaryand extraordinaryis that little extra"</dd>
                        </dl>
                    </div>
                </div>
                <div class="timeline__item">
                    <p class="timeline__item--year">1999</p>
                    <div class="timeline__item--group">
                        <p class="image"><img src="<?php echo $assets ?>/img/top/second_img01.png" class="img-fit" alt=""></p>
                        <dl>
                            <dt>The Propellian’s Cohension</dt>
                            <dd>"The journey of a thousand milesbegin with a single step. Comingtogether is the beginning of ourprogress. Cohesion, hard workand perseverance would be thepassport to our success."</dd>
                        </dl>
                    </div>
                </div>
                <a href="/about-us/" class="c-learn-more only-sp">MORE ABOUT US</a>
            </div>
        </div>
        <div class="photo u-mt-sm only-sp"><img src="<?php echo $assets ?>/img/top/about_img_sp.jpg" alt=""></div>
    </div>
    <div class="section-what-we-do">
        <div class="container">
            <p class="c-title-sub">What We Do?</p>
            <div class="row">
                <div class="col-left only-pc"><img src="<?php echo $assets ?>/img/top/third_img.jpg" alt=""></div>
                <div class="col-right">
                    <a href="#" class="item">
                        <p class="item__number">/01/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Electrical Engineering</dt>
                                <dd>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                            </dl>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <p class="item__number">/02/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Extra Low Voltage</dt>
                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
                            </dl>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <p class="item__number">/03/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Air-conditioning & <br/>Mechanical Ventilation System</dt>
                                <dd>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</dd>
                            </dl>
                            <div class="photo u-mt-xs only-sp"><img src="<?php echo $assets ?>/img/top/third_img_sp.jpg" alt=""></div>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <p class="item__number">/04/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Fire Prevention & <br/>Protection System</dt>
                                <dd>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</dd>
                            </dl>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <p class="item__number">/05/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Energy Efficiency (ECO) System</dt>
                                <dd>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</dd>
                            </dl>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <p class="item__number">/06/</p>
                        <div class="item__group">
                            <dl>
                                <dt>Integrated Facilities Management</dt>
                                <dd>The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book</dd>
                            </dl>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-project">
        <div class="container">
            <p class="c-title-sub">OUR PROJECTS</p>
            <a href="/project/" class="c-learn-more">SEE OUR ENTIRE PORTFOLIO</a>
        </div>
        <div class="section-project__slider">
            <div class="js-slider-center">
                <div class="item">
                    <div class="item__img">
                        <picture>
                            <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img01_sp.jpg">
                            <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img01.jpg" alt="Jewel Changi Airport">
                        </picture>
                    </div>
                    <div class="item__group">
                        <p class="fmd">FMD</p>
                        <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                        <dl>
                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                        </dl>
                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                        <a href="#" class="btn c-btn"><span>VIEW DETAILS</span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item__img">
                        <picture>
                            <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img02_sp.jpg">
                            <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img02.jpg" alt="Jewel Changi Airport">
                        </picture>
                    </div>
                    <div class="item__group">
                        <p class="fmd">FMD</p>
                        <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                        <dl>
                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                        </dl>
                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                        <a href="#" class="btn c-btn"><span>VIEW DETAILS</span></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item__img">
                        <picture>
                            <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img03_sp.jpg">
                            <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img03.jpg" alt="Jewel Changi Airport">
                        </picture>
                    </div>
                    <div class="item__group">
                        <p class="fmd">FMD</p>
                        <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                        <dl>
                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                        </dl>
                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                        <a href="#" class="btn c-btn"><span>VIEW DETAILS</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-scroll">
        <div class="swiper-text js-swiper">
            <div class="item">
                <p class="text c-title">Unlocking divotential Through Partnership</p>
            </div>
            <div class="item">
                <p class="text c-title">Unlocking divotential Through Partnership</p>
            </div>
        </div>
    </div>
    <div class="section-partner">
        <div class="container">
            <ul class="partner__list">
                <li><img src="<?php echo $assets ?>/img/top/partner_img01.png" alt=""></li>
                <li><img src="<?php echo $assets ?>/img/top/partner_img02.png" alt=""></li>
                <li><img src="<?php echo $assets ?>/img/top/partner_img03.png" alt=""></li>
                <li><img src="<?php echo $assets ?>/img/top/partner_img04.png" alt=""></li>
                <li><img src="<?php echo $assets ?>/img/top/partner_img05.png" alt=""></li>
                <li><img src="<?php echo $assets ?>/img/top/partner_img06.png" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="section-propell">
        <div class="container">
            <div class="row">
                <div class="col-left">
                    <p class="c-title-sub">PROPELL IN NUMBER</p>
                    <div class="group">
                        <div class="group__item">
                            <img src="<?php echo $assets ?>/img/top/fifth_icon01.png" alt="Employees">
                            <dl>
                                <dt>200+</dt>
                                <dd>Employees</dd>
                            </dl>
                        </div>
                        <div class="group__item">
                            <img src="<?php echo $assets ?>/img/top/fifth_icon02.png" alt="Projects Secured">
                            <dl>
                                <dt>110+</dt>
                                <dd>Projects Secured</dd>
                            </dl>
                        </div>
                        <div class="group__item">
                            <img src="<?php echo $assets ?>/img/top/fifth_icon03.png" alt="Building Managed">
                            <dl>
                                <dt>500+</dt>
                                <dd>Building Managed</dd>
                            </dl>
                        </div>
                        <div class="group__item">
                            <img src="<?php echo $assets ?>/img/top/fifth_icon04.png" alt="Contract Value">
                            <dl>
                                <dt>157+</dt>
                                <dd>Contract Value</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo $assets ?>/img/top/fifth_img_sp.png">
                        <img src="<?php echo $assets ?>/img/top/fifth_img.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div id="btn-fixed" class="btn-fixed"><a href="/contact-us/"><img src="<?php echo $assets ?>/img/btn-fixed.png" alt="Contact Us"></a></div>
</main>
<footer id="footer" class="footer mb-lg">
    <div class="container">
        <div class="footer__row01">
            <div class="logo"><img src="<?php echo $assets ?>/img/logo-nav.png" alt="Logo"></div>
            <div class="list">
                <ul>
                    <li>Electrical Engineering</li>
                    <li>Extra Low Voltage System</li>
                    <li>ACMV System</li>
                    <li>Fire Prevention & Protection System</li>
                    <li>ECO System</li>
                    <li>Integrated Facilities Management</li>
                </ul>
            </div>
            <div class="group">
                <h2 class="c-title">There's Nothing <br/>We Can't Achieve Together</h2>
                <div class="subcrice">
                    <input class="subcrice__input" type="text" name="mail" placeholder="Your email...">
                    <a href="#" class="subcrice__btn c-learn-more">LEARN MORE</a>
                </div>
                <ul class="partner only-pc">
                    <li><img src="<?php echo $assets ?>/img/footer-logo01.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo02.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo03.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo04.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo05.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo06.png" alt=""></li>
                </ul>
                <div class="partner only-sp"><img src="<?php echo $assets ?>/img/footer-logo_sp.png" alt=""></div>
            </div>
        </div>
        <div class="footer__row02">
            <ul class="nav">
                <li><a href="/contact-us/">Contact Us</a></li>
                <li><a href="#">Propell Responsibilites</a></li>
                <li><a href="/careers/">Careers</a></li>
                <li><a href="/terms-of-use/">Terms of Use</a></li>
                <li><a href="/policy/">Personal Data Protection Policy</a></li>
            </ul>
            <ul class="social">
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-youtube.png" alt="youtube"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-facebook.png" alt="facebook"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-linkedin.png" alt="linkedin"></a></li>
            </ul>
            <p class="copyright">© 2023 Propell Integrated Pte Ltd .<br/>All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- libs -->
<script src="<?php echo $assets ?>/libs/modernizr.min.js"></script>
<script src="<?php echo $assets ?>/libs/jquery-3.6.0.js"></script>
<script src="<?php echo $assets ?>/libs/slick.min.js"></script>
<script src="<?php echo $assets ?>/js/common.js"></script>

<!-- top -->
<script src="<?php echo $assets ?>/js/top.js"></script>
</body>

</html>
