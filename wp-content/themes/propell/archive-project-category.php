<?php


get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
$current_home_url = pll_home_url();
?>

<?php
$departments = get_terms(array(
    'taxonomy' => 'department',
    'hide_empty' => false,
    'lang'       => $current_language,
));
?>

<main id="main" class="main">
    <div class="kv">
        <div class="container">
            <div class="breadcrumds">
                <ul>
                    <li><a href="<?php echo $current_home_url ?>">HOME</a></li>
                    <li>Projects</li>
                </ul>
            </div>
            <div class="kv__text">
                <div class="kv__ttl">
                    <h2>Projects</h2>
                </div>
                <?php if (!empty($departments) && !is_wp_error($departments)) : ?>
                    <ul class="kv__submenu">
                        <?php foreach ($departments as $department) { ?>
                            <li><a href="#<?php echo $department->slug ?>"><?php echo strtoupper($department->name) ?></a></li>
                        <?php } ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="kv__img">
            <img src="<?php echo $assets ?>/img/project/kv_img.jpg" alt="">
        </div>
    </div>
    <?php foreach ($departments as $department) { ?>
            <?php
                $args = array(
                    'post_type' => 'project-category',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'department',
                            'field'    => 'term_id',
                            'terms'    => $department->term_id,
                        ),
                    ),
                );
                $query = new WP_Query($args);
                $query = new WP_Query($args);
            ?>
        <div id="<?php echo $department->slug ?>" class="section project-slider">
            <div class="container">
                <h2 class="section__title c-title"><?php echo $department->name ?></h2>
                <?php if ($query->have_posts()) : ?>
                    <div class="row js-slider-progress">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php if (has_post_thumbnail( get_the_ID() ) ):
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                            ?>
                                <div class="item">
                                    <a href="<?php echo get_the_permalink() ?>"><div class="photo"><img class="img-fit" src="<?php echo $image[0] ?>" alt="Mixed Development, Commercial & Industrial"></div></a>
                                    <h3 class="c-title c-title--md"><?php the_title() ?></h3>
                                    <p class="txt"><?php the_content() ?></p>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="slick-progress">
                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="controls">
                        <button class="prev-btn slick-arrow slick-prev"></button>
                        <div class="slider-counter"></div>
                        <button class="next-btn slick-arrow slick-next"></button></div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>
<?php
get_sidebar();
get_footer();

