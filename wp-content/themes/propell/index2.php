<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package propell
 */

get_header();
$assets = get_path_assets();

$current_year = get_the_date('Y');


?>

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
        <?php
        $args = array(
            'post_type' => 'time-line',
            'post_status' => 'publish',
            'showposts' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $timeline_query = new WP_Query($args);
        ?>
        <div class="section-our-journey">
            <div class="container">
                <h2 class="c-title">Our Journey So Far</h2>
                <div class="timeline only-pc">
                    <?php if ($timeline_query->have_posts()) : ?>
                        <?php while ($timeline_query->have_posts()) : $timeline_query->the_post(); ?>
                            <?php
                            $year = get_post_meta(get_the_ID(), 'year', true);

                            $title = get_post_meta(get_the_ID(), 'title', true);
                            $content = get_post_meta(get_the_ID(), 'content', true);
                            $avatar = get_post_meta(get_the_ID(), 'avatar', true);
                            ?>

                            <div class="timeline__item">
                                <p class="timeline__item--year"><?php echo $year ?></p>
                                <div class="timeline__item--group">
                                    <p class="image"><img src="<?php echo wp_get_attachment_url($avatar) ?>" class="img-fit" alt=""></p>
                                    <dl>
                                        <dt><?php echo $title ?></dt>
                                        <dd><?php echo $content ?></dd>
                                    </dl>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">1999</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img01.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Propell Integrated Pte is founded by Mr Leng Yew Meng</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2008</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img02.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Secured first campus university SMU M&E contract</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2015</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img03.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Launch of Propell’s new building</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2016</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img04.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Nihon Housing Co Ltd acquired Propell Integrated Pte Ltd on Dec 2016</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2022</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img05.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Partnership between Pan Service Vietnam and Propell Integrated Pte Ltd</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2022</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img06.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Mr Terence Ho appointed as new CEO of Propell Integrated Pte Ltd</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2023</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img07.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Completion of Hyundai Motor Group Innovation Centre Singapore (HMGICS)</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="timeline__item">-->
<!--                        <p class="timeline__item--year">2024</p>-->
<!--                        <div class="timeline__item--group">-->
<!--                            <p class="image"><img src="--><?php //echo $assets ?><!--/img/top/second_img08.png" class="img-fit" alt=""></p>-->
<!--                            <dl>-->
<!--                                <dt>Propell's 25th Anniversary</dt>-->
<!--                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</dd>-->
<!--                            </dl>-->
<!--                        </div>-->
<!--                    </div>-->
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
                <div class="slider-counter"></div>
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
                            <dl>
                                <dt>19</dt>
                                <dd>sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                            </dl>
                            <dl>
                                <dt>68</dt>
                                <dd>Lorem ipsum is placeholder text commonly used in the graphic</dd>
                            </dl>
                        </div>
                        <dl>
                            <dt>99+</dt>
                            <dd>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                        </dl>
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

<?php
get_sidebar();
get_footer();
