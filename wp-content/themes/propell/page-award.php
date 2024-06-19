<?php
/*
Template Name: Page Award
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
?>
<?php  while ( have_posts() ) : the_post() ?>
    <main id="main" class="main">
        <div class="kv">
            <div class="container">
                <div class="breadcrumds">
                    <ul>
                        <li><a href="<?php echo pll_home_url();?>">HOME</a></li>
                        <li><a href="<?php echo get_page_url('about');?>">ABOUT US</a></li>
                        <li><a href="">OUR AWARDS</a></li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="kv__img">
                <picture>
                    <img src="<?php echo $assets ?>/img/about/awards/kv_img.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="awards-detail">
            <div class="container">
                <?php the_content(); ?>
                <?php
                    $args = array(
                        'post_type' => 'award',
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
                    $award_query = new WP_Query($args);
                ?>
                <?php if ($award_query->have_posts()) : ?>
                    <div class="awards-detail__items">
                        <?php while ($award_query->have_posts()) : $award_query->the_post(); ?>
                            <?php
                                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <a class="awards-detail__item thumbnail" href="<?php echo $thumbnail ?>" title="<?php echo the_title() ?>">
                                <div class="c-photo"><img src="<?php echo $thumbnail ?>" alt=""></div>
                                <h3 class="c-name"><?php echo the_title() ?></h3>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php endwhile ; ?>
<?php
get_sidebar();
get_footer();
