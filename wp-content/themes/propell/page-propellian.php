<?php
/*
Template Name: Page Propellian
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
$block_csr = get_field('block_csr'); ?>
?>
<?php  while ( have_posts() ) : the_post() ?>
    <main id="main" class="main">
        <div class="kv">
            <div class="container">
                <div class="breadcrumds">
                    <ul>
                        <li><a href="./">HOME</a></li>
                        <li>PROPELLIAN</li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2>Propellian</h2>
                    </div>
                    <ul class="kv__submenu --02">
                        <li><a href="#philosophy" class="js-anchor-detail">OUR PHILOSOPHY</a></li>
                        <li><a href="#people" class="js-anchor-detail">OUR PEOPLE</a></li>
                        <li><a href="#events" class="js-anchor-detail">OUR EVENTS</a></li>
                        <li><a href="#csr" class="js-anchor-detail">OUR CSR</a></li>
                    </ul>
                </div>
            </div>
            <div class="kv__img">
                <picture>
                    <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/propellian/kv_img_sp.jpg">
                    <img src="<?php echo $assets ?>/img/propellian/kv_img.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="propellian">
            <div class="container">
                <?php $block_philosophy = get_field('block_philosophy'); ?>
                <?php if($block_philosophy) : ?>
                    <div class="c-toggle" id="philosophy">
                        <div class="c-toggle__head js-toggle__head">
                            <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_philosophy['position'].'/' ?></span><?php echo $block_philosophy['title'] ?></h2>
                            <span class="c-ico"></span>
                        </div>
                        <div class="c-toggle__main">
                            <?php echo $block_philosophy['content'] ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $block_people = get_field('block_people'); ?>
                <?php if($block_people) : ?>
                    <div class="c-toggle" id="people">
                        <div class="c-toggle__head js-toggle__head">
                            <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_people['position'].'/' ?></span><?php echo $block_people['title'] ?></h2>
                            <span class="c-ico"></span>
                        </div>
                        <div class="c-toggle__main">
                            <?php echo $block_people['content'] ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $block_event = get_field('block_event'); ?>
                <?php if($block_event) : ?>
                    <div class="c-toggle" id="events">
                        <div class="c-toggle__head js-toggle__head">
                            <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_event['position'].'/' ?></span><?php echo $block_event['title'] ?></h2>
                            <span class="c-ico"></span>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'event',
                                'post_status' => 'publish',
                                'showposts' => 6,
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'language',
                                        'field'    => 'slug',
                                        'terms'    => $current_language,
                                    ),
                                ),
                            );
                            $event_query = new WP_Query($args);
                        ?>
                        <div class="c-toggle__main">
                            <div class="event">
                                <?php if ($event_query->have_posts()) : ?>
                                    <div class="event__items js-event-slider">
                                        <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                                            <div class="event__item">
                                                <?php
                                                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                <div class="event__item--photo">
                                                    <img src="<?php echo $thumbnail ?>" alt="">
                                                </div>
                                                <div class="event__item--content">
                                                    <h3 class="c-ttl"><?php echo the_title()?></h3>
                                                    <div class="c-text">
                                                        <div class="c-txt"><?php echo the_content(); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <div class="event__btm">
                                        <div class="slick-control-wrap">
                                            <button class="prev-btn slick-arrow slick-prev"></button>
                                            <div class="slider-counter"></div>
                                            <button class="next-btn slick-arrow slick-next"></button>
                                        </div>
                                        <div class="c-text__more">
                                            <a href="" class="btn c-btn"><span>ALL EVENTS</span></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($block_csr) : ?>
                    <div class="c-toggle" id="csr">
                        <div class="c-toggle__head js-toggle__head">
                            <h2 class="c-ttl"><span class="c-num"><?php echo '/0'.$block_csr['position'].'/' ?></span><?php echo $block_csr['title'] ?></h2>
                            <span class="c-ico"></span>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'csr',
                                'post_status' => 'publish',
                                'showposts' => -1,
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'language',
                                        'field'    => 'slug',
                                        'terms'    => $current_language,
                                    ),
                                ),
                            );
                            $event_query = new WP_Query($args);
                        ?>
                        <div class="c-toggle__main">
                            <div class="csr">
                                <div class="csr__txt">
                                    <?php echo $block_csr['content'] ?>
                                </div>
                                <?php if ($event_query->have_posts()) : ?>

                                    <div class="csr__items">
                                        <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                                            <div class="csr__item">
                                                <?php
                                                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                <div class="csr__item--photo">
                                                    <img src="<?php echo $thumbnail ?>" alt="">
                                                </div>
                                                <h3 class="csr__item--ttl"><?php echo the_title() ?></h3>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php endwhile ; ?>
<?php
get_sidebar();
get_footer();
