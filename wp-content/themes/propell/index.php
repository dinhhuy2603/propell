<?php
/*
Template Name: Custom Index Page
*/

get_header();
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
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
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $content_top = get_field('content_top');
            if ($content_top) {
                echo remove_br_tags($content_top);
            }
            ?>

        <?php endwhile; ?>
        <?php
        $args = array(
            'post_type' => 'timeline',
            'post_status' => 'publish',
            'showposts' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'language',
                    'field'    => 'slug',
                    'terms'    => $current_language,
                ),
            ),
        );
        $timeline_query = new WP_Query($args);
        ?>

        <div class="section-our-journey">
            <div class="container">
                <h2 class="c-title">Our Journey So Far</h2>
                <div class="timeline js-slider-journey">
                    <?php if ($timeline_query->have_posts()) : ?>
                        <?php while ($timeline_query->have_posts()) : $timeline_query->the_post(); ?>
                            <?php
                            $year = get_post_meta(get_the_ID(), 'year', true);

                            $title = get_post_meta(get_the_ID(), 'title', true);
                            $content = get_post_meta(get_the_ID(), 'content', true);
                            $avatar = get_post_meta(get_the_ID(), 'avatar', true);
                            ?>

                            <div class="timeline__item">
                                <p class="timeline__item--year"><?php echo get_the_title( get_the_ID() ); ?></p>
                                <div class="timeline__item--group">
                                    <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
                                        <?php
                                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        ?>
                                        <p class="image"><img src="<?php echo $thumbnail; ?> ?>" class="img-fit" alt="<?php echo $title ?>"></p>
                                    <?php endif; ?>
                                    <?php html_entity_decode(the_content()); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

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
        <div class="section-what-we-do">
            <div class="container">
                <p class="c-title-sub">What We Do?</p>
                <div class="row">
                    <div class="col-left only-pc"><img src="<?php echo $assets ?>/img/top/third_img.jpg" alt=""></div>
                    <div class="col-right">
                        <?php if ($service_query->have_posts()) :
                            $counter = 1
                            ?>
                            <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                            <?php
                                $banner = get_post_meta(get_the_ID(), 'banner', true);
                                $content = get_the_content();

                            ?>
                            <a href="<?php echo esc_url(get_permalink(get_the_ID())) ?>" class="item">
                                <p class="item__number">/0<?php echo $counter ?>/</p>
                                <div class="item__group">
                                    <dl>
                                        <dt><?php the_title() ?></dt>
                                        <dd><?php echo custom_shorten_content($content, 30) ?></dd>
                                    </dl>
                                </div>
                            </a>
                            <?php $counter++; endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $args = array(
                'post_type' => 'project',
                'post_status' => 'publish',
                'showposts' => 6,
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
            $project_query = new WP_Query($args);
        ?>
        <div class="section-project">
            <div class="container">
                <p class="c-title-sub">OUR PROJECTS</p>
                <a href="https://www1.bca.gov.sg/bca-directory/company/Details/199903182D" target="_blank" class="c-learn-more">SEE OUR ENTIRE PORTFOLIO</a>
            </div>
            <div class="section-project__slider">
                <div class="js-slider-center">
                    <?php if ($project_query->have_posts()) : ?>
                        <?php while ($project_query->have_posts()) : $project_query->the_post();
                            $thumbnail = get_field( 'thumbnail', );
                            $imagePC = get_field('image_pc');
                            $imageSP = get_field('image_sp');
                            $short_description = get_field('short_description');
                            $category = get_field('category', get_the_ID());
                            $departments = wp_get_post_terms($category->ID, 'department');
                            $department = $departments[0];
                            $department_code = get_field('code', $department);
                            $url = get_permalink(get_the_ID());
                        ?>
                        <div class="item">
                            <div class="item__img">
                                <picture>
                                    <source media="(max-width: 750px)" srcset="<?php echo $imageSP ?>">
                                    <img class="img-fit" src="<?php echo $imagePC ?>" alt="Jewel Changi Airport">
                                </picture>
                            </div>
                            <div class="item__group">
                                <p class="fmd <?php echo ($department_code === 'PMD')  ? 'active' : ""; ?>"><?php echo $department_code ?></p>
                                <p class="logo"><img src="<?php echo $thumbnail ?>" alt="Jewel"></p>
                                <dl>
                                    <dt class="c-title c-title--md"><?php echo the_title() ?></dt>
                                    <?php
                                    $related_services = get_field('related_services');
                                    if ($related_services): ?>
                                        <?php foreach ($related_services as $post): // Loop through related projects
                                            $service_titles[] = get_the_title($post->ID);
                                            ?>
                                        <?php endforeach; ?>
                                        <?php $unique_service_titles = array_unique($service_titles); ?>
                                        <dd><?php echo implode(' / ', $unique_service_titles) ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <p class="text"><?php echo $short_description ?></p>
                                <a href="<?php echo esc_url($url); ?>" class="btn c-btn"><span>VIEW DETAILS</span></a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $content_bottom = get_field('content_bottom');
                        if ($content_bottom) {
                            echo $content_bottom;
                        }
                        ?>
                    <?php endwhile; ?>
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
