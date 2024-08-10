<?php
/*
Template Name: Page Event
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
$page = get_query_var('paged') ? get_query_var('paged') : 1;

?>
<?php if (have_posts()) : ?>
    <?php  while ( have_posts() ) : the_post() ?>
        <main id="main" class="main">
            <div class="kv">
                <div class="container">
                    <div class="breadcrumds">
                        <ul>
                            <li><a href="<?php echo home_url();?>">HOME</a></li>
                            <li><a href="<?php echo get_page_url('propellian');?>">PROPELLIAN</a></li>
                            <li><a href="">EVENTS</a></li>
                        </ul>
                    </div>
                    <div class="kv__text">
                        <div class="kv__ttl">
                            <h2><?php echo the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="kv__img --half">
                    <picture>
                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/propellian/events/kv_img_sp.jpg">
                        <img src="<?php echo $assets ?>/img/propellian/events/kv_img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="events-highlight">
                <div class="container">
                    <?php the_content(); ?>
                    <?php
                        $args = array(
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => 9,
                            'paged' => $page,
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
                    <?php if ($event_query->have_posts()) : ?>
                        <div class="events-highlight__items" id="event-list">
                            <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                                <?php
                                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                ?>
                                <div class="events-highlight__item">
                                    <div class="events-highlight__item--photo">
                                        <img src="<?php echo $thumbnail ?>" alt="">
                                    </div>
                                    <h3 class="events-highlight__item--ttl"><?php echo the_title(); ?></h3>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="events-highlight__btn">
                        <a href="javascript:void(0)" id="btn-load-more-event" class="btn c-btn"><span>View more</span></a>
                    </div>
                </div>
            </div>
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
