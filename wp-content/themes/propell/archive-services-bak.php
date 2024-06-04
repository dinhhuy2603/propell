<?php


get_header('service');
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
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
                    <li><a href="#our-business">OUR BUSINESS</a></li>
                    <li><a href="#our-projects">OUR PROJECTS</a></li>
                </ul>
            </div>
        </div>
        <div class="kv__img">
            <img src="<?php echo $assets ?>/img/what-we-do/kv_img.jpg" alt="">
        </div>
    </div>
    <div id="our-business" class="section section-business">
        <div class="container">
            <div class="group">
                <h2 class="section__title c-title">Our Business</h2>
                <p class="section__description">Our interior design services helped bring our clients’ visions to life by transforming their spaces. See how our experts transformed these interiors.</p>
            </div>
            <div class="section-business__content">
                <?php if ($service_query): ?>
                    <div class="news-list c-list">
                        <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                            <div class="c-toggle">
                                <div class="c-toggle__head js-toggle__head">
                                    <h2 class="c-ttl"><span class="c-num">/01/</span><b>Electrical Engineering</b></h2>
                                    <span class="c-ico"></span>
                                </div>
                                <div class="c-toggle__main">
                                    <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                                    <div class="m-scroll">
                                        <div class="m-scroll__inner">
                                            <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                            <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                            <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="infomation">
                                        <div class="col">
                                            <p class="infomation__icon"><img src="<?php echo $assets ?>/img/what-we-do/business_icon.png" alt=""></p>
                                            <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>
                                            <ul class="infomation__list">
                                                <li>Air-Conditioning System</li>
                                                <li>Mechanical Ventilation System</li>
                                                <li>ACMV Control & Building Management System</li>
                                                <li>Dehumidifier System</li>
                                            </ul>
                                            <div class="photo01 only-pc"><img src="<?php echo $assets ?>/img/what-we-do/business_img01.jpg" alt=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="photo02">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="<?php echo $assets ?>/img/what-we-do/business_img01_sp.png">
                                                    <img src="<?php echo $assets ?>/img/what-we-do/business_img02.jpg" alt="">
                                                </picture>
                                            </div>
                                            <div class="infomation__btn u-txt-center">
                                                <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="photo03 only-pc"><img src="<?php echo $assets ?>/img/what-we-do/business_img03.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p><?php echo 'No matching articles were found.'; ?></p>
                <?php endif; ?>
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/01/</span><b>Electrical Engineering</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/02/</span><b>Extra Low Voltage System</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                    <div class="c-toggle__main">-->
<!--                        <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>-->
<!--                        <div class="m-scroll">-->
<!--                            <div class="m-scroll__inner">-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="infomation">-->
<!--                            <div class="col">-->
<!--                                <p class="infomation__icon"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_icon.png" alt=""></p>-->
<!--                                <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>-->
<!--                                <ul class="infomation__list">-->
<!--                                    <li>Air-Conditioning System</li>-->
<!--                                    <li>Mechanical Ventilation System</li>-->
<!--                                    <li>ACMV Control & Building Management System</li>-->
<!--                                    <li>Dehumidifier System</li>-->
<!--                                </ul>-->
<!--                                <div class="photo01 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img01.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo02">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 767px)" srcset="--><?php //echo $assets ?><!--/img/what-we-do/business_img01_sp.png">-->
<!--                                        <img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img02.jpg" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                                <div class="infomation__btn u-txt-center">-->
<!--                                    <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo03 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img03.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head is-active">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/03/</span><b>Extra Low Voltage System</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                    <div class="c-toggle__main" style="display: block;">-->
<!--                        <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>-->
<!--                        <div class="m-scroll">-->
<!--                            <div class="m-scroll__inner">-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="infomation">-->
<!--                            <div class="col">-->
<!--                                <p class="infomation__icon"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_icon.png" alt=""></p>-->
<!--                                <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>-->
<!--                                <ul class="infomation__list">-->
<!--                                    <li>Air-Conditioning System</li>-->
<!--                                    <li>Mechanical Ventilation System</li>-->
<!--                                    <li>ACMV Control & Building Management System</li>-->
<!--                                    <li>Dehumidifier System</li>-->
<!--                                </ul>-->
<!--                                <div class="photo01 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img01.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo02">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 767px)" srcset="--><?php //echo $assets ?><!--/img/what-we-do/business_img01_sp.png">-->
<!--                                        <img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img02.jpg" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                                <div class="infomation__btn u-txt-center">-->
<!--                                    <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo03 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img03.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/04/</span><b>Fire Prevention & Protection System</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                    <div class="c-toggle__main">-->
<!--                        <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>-->
<!--                        <div class="m-scroll">-->
<!--                            <div class="m-scroll__inner">-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="infomation">-->
<!--                            <div class="col">-->
<!--                                <p class="infomation__icon"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_icon.png" alt=""></p>-->
<!--                                <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>-->
<!--                                <ul class="infomation__list">-->
<!--                                    <li>Air-Conditioning System</li>-->
<!--                                    <li>Mechanical Ventilation System</li>-->
<!--                                    <li>ACMV Control & Building Management System</li>-->
<!--                                    <li>Dehumidifier System</li>-->
<!--                                </ul>-->
<!--                                <div class="photo01 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img01.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo02">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 767px)" srcset="--><?php //echo $assets ?><!--/img/what-we-do/business_img01_sp.png">-->
<!--                                        <img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img02.jpg" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                                <div class="infomation__btn u-txt-center">-->
<!--                                    <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo03 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img03.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/05/</span><b>Energy Efficiency (Eco) System</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                    <div class="c-toggle__main">-->
<!--                        <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>-->
<!--                        <div class="m-scroll">-->
<!--                            <div class="m-scroll__inner">-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="infomation">-->
<!--                            <div class="col">-->
<!--                                <p class="infomation__icon"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_icon.png" alt=""></p>-->
<!--                                <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>-->
<!--                                <ul class="infomation__list">-->
<!--                                    <li>Air-Conditioning System</li>-->
<!--                                    <li>Mechanical Ventilation System</li>-->
<!--                                    <li>ACMV Control & Building Management System</li>-->
<!--                                    <li>Dehumidifier System</li>-->
<!--                                </ul>-->
<!--                                <div class="photo01 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img01.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo02">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 767px)" srcset="--><?php //echo $assets ?><!--/img/what-we-do/business_img01_sp.png">-->
<!--                                        <img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img02.jpg" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                                <div class="infomation__btn u-txt-center">-->
<!--                                    <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo03 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img03.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="c-toggle">-->
<!--                    <div class="c-toggle__head js-toggle__head">-->
<!--                        <h2 class="c-ttl"><span class="c-num">/06/</span><b>Integrated Facilities Management</b></h2>-->
<!--                        <span class="c-ico"></span>-->
<!--                    </div>-->
<!--                    <div class="c-toggle__main">-->
<!--                        <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>-->
<!--                        <div class="m-scroll">-->
<!--                            <div class="m-scroll__inner">-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                                <div>Air-conditioning & Mechanical Ventilation System &nbsp;</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="infomation">-->
<!--                            <div class="col">-->
<!--                                <p class="infomation__icon"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_icon.png" alt=""></p>-->
<!--                                <h3 class="infomation__title">Air-conditioning & Mechanical Ventilation System</h3>-->
<!--                                <ul class="infomation__list">-->
<!--                                    <li>Air-Conditioning System</li>-->
<!--                                    <li>Mechanical Ventilation System</li>-->
<!--                                    <li>ACMV Control & Building Management System</li>-->
<!--                                    <li>Dehumidifier System</li>-->
<!--                                </ul>-->
<!--                                <div class="photo01 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img01.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo02">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 767px)" srcset="--><?php //echo $assets ?><!--/img/what-we-do/business_img01_sp.png">-->
<!--                                        <img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img02.jpg" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                                <div class="infomation__btn u-txt-center">-->
<!--                                    <a href="service-details.html" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="photo03 only-pc"><img src="--><?php //echo $assets ?><!--/img/what-we-do/business_img03.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
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
                                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img01_sp.jpg">
                                        <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd">FMD</p>
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                                    <dl>
                                        <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                        <dd>Energy Efficiency (ECO) System</dd>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo02.png" alt="Jewel"></p>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo03.png" alt="Jewel"></p>
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
                <div id="tabs-main02" class="c-tabs__main--item">
                    <div class="c-slider-center">
                        <div class="js-slider-center">
                            <div class="item">
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img01_sp.jpg">
                                        <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd">FMD</p>
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                                    <dl>
                                        <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                        <dd>Energy Efficiency (ECO) System</dd>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo02.png" alt="Jewel"></p>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo03.png" alt="Jewel"></p>
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
                <div id="tabs-main03" class="c-tabs__main--item">
                    <div class="c-slider-center">
                        <div class="js-slider-center">
                            <div class="item">
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img01_sp.jpg">
                                        <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd">FMD</p>
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                                    <dl>
                                        <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                        <dd>Energy Efficiency (ECO) System</dd>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo02.png" alt="Jewel"></p>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo03.png" alt="Jewel"></p>
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
                <div id="tabs-main04" class="c-tabs__main--item">
                    <div class="c-slider-center">
                        <div class="js-slider-center">
                            <div class="item">
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/top/project_img01_sp.jpg">
                                        <img class="img-fit" src="<?php echo $assets ?>/img/top/project_img01.jpg" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd">FMD</p>
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo01.png" alt="Jewel"></p>
                                    <dl>
                                        <dt class="c-title c-title--md">Marina Bay Sands Singapore</dt>
                                        <dd>Energy Efficiency (ECO) System</dd>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo02.png" alt="Jewel"></p>
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
                                    <p class="logo"><img src="<?php echo $assets ?>/img/top/project_logo03.png" alt="Jewel"></p>
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
            </div>
        </div>
    </div>
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
<script src="<?php echo $assets ?>/js/what-we-do.js"></script>
</body>

</html>
