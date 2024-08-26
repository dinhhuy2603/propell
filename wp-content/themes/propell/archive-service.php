<?php


get_header();
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
                <div class="news-list c-list">
                    <?php if ($service_query):
                        $counter = 1
                    ?>
                    <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                        <?php
                            $banner = get_post_meta(get_the_ID(), 'banner', true);
                            $information = get_post_meta(get_the_ID(), 'information', true);
                            $images = get_post_meta(get_the_ID(), 'images', true);
                            if ($images) {
                                $image_ids_array = explode(',', $images);
                            }
                        ?>
                            <div class="c-toggle">
                                <div class="c-toggle__head js-toggle__head">
                                    <h2 class="c-ttl"><span class="c-num">/0<?php echo $counter ?>/</span><b><?php the_title() ?></b></h2>
                                    <span class="c-ico"></span>
                                </div>
                                <div class="c-toggle__main">
                                    <a href="/project/" class="c-learn-more">VIEW OUR PROJECTS</a>
                                    <div class="m-scroll">
                                        <div class="m-scroll__inner">
                                            <?php
                                            for ($i = 1; $i <= 3; $i++) {
                                                echo '<div>'. the_title() .'&nbsp;'.'</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="infomation">
                                        <div class="col">
                                            <p class="infomation__icon"><img src="<?php echo $assets ?>/img/what-we-do/business_icon.png" alt=""></p>
                                            <h3 class="infomation__title"><<?php the_title() ?></h3>
                                            <ul class="infomation__list">
                                                <?php echo $information ?>
                                            </ul>
                                            <?php if (count($image_ids_array) > 0) : ?>
                                                <div class="photo01 only-pc"><img src="<?php echo wp_get_attachment_url($image_ids_array[0]) ?>" alt=""></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col">
                                            <div class="photo02">
                                                <picture>
                                                    <?php if (count($image_ids_array) > 1) : ?>
                                                        <source media="(max-width: 767px)" srcset="<?php echo wp_get_attachment_url($image_ids_array[1]) ?>">
                                                        <img src="<?php echo wp_get_attachment_url($image_ids_array[1]) ?>" alt="">
                                                    <?php endif; ?>
                                                </picture>
                                            </div>
                                            <div class="infomation__btn u-txt-center">
                                                <a href="<?php echo get_post_permalink();?>" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <?php if (count($image_ids_array) > 2) : ?>
                                                <div class="photo03 only-pc"><img src="<?php echo wp_get_attachment_url($image_ids_array[2]) ?>" alt=""></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $counter++; endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p><?php echo 'No matching articles were found.'; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="our-projects" class="section section-project">

        <?php
        $args = array(
            'post_type' => 'service',
            'posts_per_page' => -1, // Display all service posts
            'order' => 'ASC',
            'orderby' => 'title',
            'meta_query' => array(
                array(
                    'key' => 'featured_projects', // ACF relationship field name
                    'compare' => 'EXISTS',
                ),
                array(
                    'key' => 'featured_projects',
                    'value' => '',
                    'compare' => '!=',
                ),
            ),
        );

        // Execute the custom query for services
        $service_query = new WP_Query($args); ?>

        <?php if ($service_query->have_posts()) : ?>
            <?php $counter = 1 ?>
            <?php $counter2 = 1 ?>
            <div class="container">
                <h2 class="section__title c-title">Our Featured Projects</h2>
                <p class="section__description">Propell Integrated provides a unified facilities management (FM) solution through a wide range of services designed to help clients oversee their properties.</p>
            </div>
            <div class="c-tabs">
                <div class="c-tabs__head container js-tabs__head">
                    <ul>
                        <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                            <li class="item"><a href="#tabs-main0<?php echo $counter ?>"><?php echo the_title() ?></a></li>
                        <?php $counter++; endwhile;
                            wp_reset_postdata();
//                            else :
//                                get_template_part('template-parts/content', 'none');
//                            endif;
                        ?>
                    </ul>
                </div>
                <div class="c-tabs__main">
                    <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                        <div id="tabs-main0<?php echo $counter2 ?>" class="c-tabs__main--item">
                            <div class="c-slider-center">
                                <div class="js-slider-center">
                                    <?php
                                    $featured_projects = get_field('featured_projects');
                                    if ($featured_projects) :
                                        foreach ($featured_projects as $project) :
                                            setup_postdata($project); ?>
                                            <div class="item">
                                                <?php
                                                    $project_id = $project->ID;
                                                    $thumbnail = get_field('thumbnail', $project->ID);
                                                    $banner = get_field('banner', $project->ID);
                                                    $short_description = get_field('short_description', $project->ID);
                                                    $category = get_field('category', $project->ID);
                                                    $departments = wp_get_post_terms($category->ID, 'department');
                                                    $department = $departments[0];
                                                    $department_code = get_field('code', $department);
                                                    $related_services = get_field('related_services', $project->ID);
                                                    $service_titles = [];
                                                ?>
                                                <div class="item__img">
                                                    <picture>
                                                        <source media="(max-width: 750px)" srcset="<?php echo $banner ?>">
                                                        <img class="img-fit" src="<?php echo $banner ?>" alt="Marina Bay Sands Singapore">
                                                    </picture>
                                                </div>
                                                <div class="item__group">
                                                    <p class="fmd <?php echo ($department_code === 'PMD')  ? 'active' : ""; ?>"><?php echo $department_code ?></p>
                                                    <p class="logo"><img src="<?php echo $thumbnail ?>" alt="<?php echo get_the_title($project->ID) ?>"></p>
                                                    <dl>
                                                        <dt class="c-title c-title--md"><?php echo get_the_title($project->ID) ?></dt>
                                                        <?php
                                                        if ($related_services): ?>
                                                            <?php foreach ($related_services as $post):
                                                                $service_titles[] = get_the_title($post->ID);
                                                                ?>
                                                            <?php endforeach; ?>
                                                            <?php $unique_service_titles = array_unique($service_titles); ?>
                                                            <dd><?php echo implode(' / ', $unique_service_titles) ?></dd>
                                                        <?php endif; ?>
                                                    </dl>
                                                    <p class="text"><?php echo $short_description ?></p>
<!--                                                    <a href="--><?php //echo get_permalink($project->ID);?><!--" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        // Reset post data
                                        wp_reset_postdata();
                                    else :
                                        echo '<p>No featured projects found.</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter2++;
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php endif;?>
    </div>
</main>

<?php
get_sidebar();
get_footer();
