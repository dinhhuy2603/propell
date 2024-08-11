<?php
get_header();
$assets = get_path_assets();
$current_language = pll_current_language('slug');
$page = get_query_var('paged') ? get_query_var('paged') : 1;

?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main id="main" class="main">
            <div class="kv">
                <div class="container">
                    <div class="breadcrumds">
                        <ul>
                            <li><a href="<?php echo home_url();?>">HOME</a></li>
                            <li><a href="<?php echo get_page_url('propellian');?>">PROPELLIAN</a></li>
                            <li><a href="<?php echo get_page_url('event');?>">EVENTS</a></li>
                            <li><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo strtoupper(get_the_title()) ;?></a></li>
                        </ul>
                    </div>
                    <div class="kv__text">
                        <div class="kv__ttl">
                            <h2><?php the_title() ?></h2>
                        </div>
                    </div>
                </div>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <?php if($featured_img_url != "" ) : ?>
                    <div class="kv__img --half">
                        <picture>
                            <source media="(max-width: 750px)" srcset="<?php echo $featured_img_url ?>">
                            <img src="<?php echo $featured_img_url?>" alt="">
                        </picture>
                    </div>
                <?php endif; ?>
            </div>
            <div class="event-detail-highlight">
                <div class="container">
                    <?php $content = get_the_content(); ?>
                    <p class="event-detail-highlight__txt"><?php echo wp_strip_all_tags($content) ?></p>
                    <?php
                        $images = get_post_meta(get_the_ID(), 'images', true);
                        $image_ids_array = $images ? explode(',', $images) : [];
                    ?>

                    <?php if (!empty($image_ids_array)) : ?>
                        <div class="event-detail-highlight__items">
                            <?php foreach ($image_ids_array as $image) : ?>
                            <div class="event-detail-highlight__item">
                                <div class="event-detail-highlight__item--photo">
                                    <img class="img-fit" src="<?php echo wp_get_attachment_url($image) ?>" alt="">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                $current_post_id = get_the_ID();
                $args = array(
                    'post_type'      => 'event',
                    'posts_per_page' => 3,
                    'paged' => $page,
                    'post__not_in'   => array($current_post_id),
                    'orderby'        => 'publish_date',
                    'order'          => 'DESC',
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'language',
                            'field'    => 'slug',
                            'terms'    => $current_language,
                        ),
                    ),
                );
                $newest_events = new WP_Query($args);
            ?>
            <div class="event-detail-other">
                <div class="container">
                    <h2 class="event-detail-other__ttl">Other Events</h2>
                    <div class="event-detail-other__items" id="other-event-list">
                        <?php if ($newest_events->have_posts()) : ?>
                            <?php while ($newest_events->have_posts()) : $newest_events->the_post(); ?>
                                <div class="event-detail-other__item">
                                    <div class="event-detail-other__item--photo">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full'); ?>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo get_the_permalink(get_the_ID())?>">
                                        <h3 class="event-detail-other__item--ttl"><?php echo the_title(); ?></h3>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>No other events found.</p>
                        <?php endif; ?>
                    </div>
                    <div class="event-detail-other__btn">
                        <a href="javascript:void(0)" data-event-id="<?php echo get_the_ID(); ?>" id="btn-load-more-other-event" class="btn c-btn"><span>VIEW MORE</span></a>
                    </div>
                </div>
            </div>
<!--            <div class="event-detail-other">-->
<!--                <div class="container">-->
<!--                    <h2 class="event-detail-other__ttl">Other Events</h2>-->
<!--                    <div class="event-detail-other__items">-->
<!--                        <div class="event-detail-other__item">-->
<!--                            <div class="event-detail-other__item--photo">-->
<!--                                <img src="--><?php //echo $assets ?><!--/img/propellian/csr_img04.jpg" alt="">-->
<!--                            </div>-->
<!--                            <h3 class="event-detail-other__item--ttl">GWL 2014 (Giving While Living 2014)</h3>-->
<!--                        </div>-->
<!--                        <div class="event-detail-other__item">-->
<!--                            <div class="event-detail-other__item--photo">-->
<!--                                <img src="--><?php //echo $assets ?><!--/img/propellian/csr_img08.jpg" alt="">-->
<!--                            </div>-->
<!--                            <h3 class="event-detail-other__item--ttl">2016 Prawining Session</h3>-->
<!--                        </div>-->
<!--                        <div class="event-detail-other__item">-->
<!--                            <div class="event-detail-other__item--photo">-->
<!--                                <img src="--><?php //echo $assets ?><!--/img/propellian/csr_img09.jpg" alt="">-->
<!--                            </div>-->
<!--                            <h3 class="event-detail-other__item--ttl">Air Rifle Range</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="event-detail-other__btn">-->
<!--                        <a href="" class="btn c-btn"><span>VIEW MORE</span></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </main>
    <?php endwhile; else : ?>
    <?php
        wp_redirect('/404');
        exit;
    ?>
<?php endif; ?>
<?php
get_sidebar();
get_footer();

