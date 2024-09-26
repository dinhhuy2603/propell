<?php


get_header();
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
$current_home_url = pll_home_url();
?>

<?php
    $args = array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'showposts' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query'      => array(
            array(
                'taxonomy' => 'language',
                'field'    => 'slug',
                'terms'    => $current_language,
            ),
        ),
    );
    $service_query = new WP_Query($args);
?>

    <main id="main" class="main">
        <div class="kv">
            <div class="container">
                <div class="breadcrumds">
                    <ul>
                        <li><a href="./">HOME</a></li>
                        <li>WHAT WE DO</li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2>What We Do?</h2>
                    </div>
                    <ul class="kv__submenu">
                        <li><a href="#our-business" class="js-anchor-detail">OUR BUSINESS</a></li>
                        <li><a href="#our-projects" class="js-anchor-detail">OUR FEATURED PROJECTS</a></li>
                    </ul>
                </div>
            </div>
            <div class="kv__img">
                <picture>
                    <source media="(max-width: 750px)" srcset="../assets/img/what-we-do/kv_img_sp.jpg">
                    <img src="../assets/img/what-we-do/kv_img.jpg" alt="">
                </picture>
            </div>
        </div>
        <div id="our-business" class="section section-business">
            <div class="container">
                <div class="group">
                    <h2 class="section__title c-title">Our Business</h2>
                    <p class="section__description">Our interior design services helped bring our clients’ visions to life by transforming their spaces. See how our experts transformed these interiors.</p>
                </div>
            </div>
            <div class="section-business__content">
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num">/01/</span><b>Electrical Engineering</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num">/02/</span><b>Extra Low Voltage System</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head is-active">
                        <h2 class="c-ttl"><span class="c-num">/03/</span><b>Air-conditioning & Mechanical Ventilation System</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main" style="display: block;">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num">/04/</span><b>Fire Prevention & Protection System</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num">/05/</span><b>Energy Efficiency (Eco) System</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-toggle">
                    <div class="c-toggle__head js-toggle__head">
                        <h2 class="c-ttl"><span class="c-num">/06/</span><b>Integrated Facilities Management</b></h2>
                        <span class="c-ico"></span>
                    </div>
                    <div class="c-toggle__main">
                        <div class="m-scroll">
                            <div class="m-scroll__inner">
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                            <div class="infomation">
                                <div class="col">
                                    <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                    <ul class="infomation__list">
                                        <li>Air-Conditioning System</li>
                                        <li>Mechanical Ventilation System</li>
                                        <li>ACMV Control & Building Management System</li>
                                        <li>Dehumidifier System</li>
                                    </ul>
                                    <div class="photo01"><img src="../assets/img/what-we-do/business_img01.jpg" alt=""></div>
                                </div>
                                <div class="col">
                                    <div class="photo02"><img src="../assets/img/what-we-do/business_img02.jpg" alt=""></div>
                                    <div class="infomation__btn u-txt-center">
                                        <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="photo03"><img src="../assets/img/what-we-do/business_img03.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="our-projects" class="section section-project">
            <div class="container">
                <h2 class="section__title c-title">Our Featured Projects</h2>
                <p class="section__description">Our interior design services helped bring our clients’ visions to life by transforming their spaces. See how our experts transformed these interiors.</p>
            </div>
            <div class="c-tabs">
                <div class="c-tabs__head container js-tabs__head">
                    <ul>
                        <li class="item"><a href="#tabs-main01">ELECTRICAL ENGINEERING</a></li>
                        <li class="item"><a href="#tabs-main02">EXTRA LOW VOLTAGE SYSTEM</a></li>
                        <li class="item"><a href="#tabs-main03">FIRE PREVENTION & PROTECTION SYSTEM</a></li>
                        <li class="item"><a href="#tabs-main04">AIR-CONDITIONING AND MECHANICAL VENTILATION SYSTEM</a></li>
                    </ul>
                </div>
                <div class="c-tabs__main">
                    <div id="tabs-main01" class="c-tabs__main--item">
                        <div class="c-slider-center">
                            <div class="js-slider-center">
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img01_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo01.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                            <dd>Energy Efficiency (ECO) System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img02_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img02.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo02.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img03_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img03.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo03.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-main02" class="c-tabs__main--item">
                        <div class="c-slider-center">
                            <div class="js-slider-center">
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img01_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo01.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                            <dd>Energy Efficiency (ECO) System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img02_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img02.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo02.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img03_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img03.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo03.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-main03" class="c-tabs__main--item">
                        <div class="c-slider-center">
                            <div class="js-slider-center">
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img01_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo01.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                            <dd>Energy Efficiency (ECO) System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img02_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img02.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo02.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img03_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img03.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo03.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-main04" class="c-tabs__main--item">
                        <div class="c-slider-center">
                            <div class="js-slider-center">
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img01_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo01.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                            <dd>Energy Efficiency (ECO) System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img02_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img02.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo02.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <picture>
                                            <source media="(max-width: 750px)" srcset="../assets/img/top/project_img03_sp.jpg">
                                            <img class="img-fit" src="../assets/img/top/project_img03.jpg" alt="Jewel Changi Airport">
                                        </picture>
                                    </div>
                                    <div class="item__group">
                                        <p class="fmd">FMD</p>
                                        <p class="logo"><img src="../assets/img/top/project_logo03.png" alt="Jewel"></p>
                                        <dl>
                                            <dt class="c-title c-title--md">Jewel Changi Airport</dt>
                                            <dd>Energy Efficiency (ECO) System / Fire Prevention & Protection System</dd>
                                        </dl>
                                        <p class="text">The ONLY mall in Singapore serving up to 3.5 % rebate - HIGHEST cashback reward at Jewel Changi Airport!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
get_sidebar();
get_footer();
