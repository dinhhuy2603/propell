<?php


get_header();
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
$page = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<?php if (have_posts()) : ?>
    <?php
    if (get_post_status() != 'publish') {
        wp_redirect('/404');
        exit;
    }
    ?>
    <main id="main" class="main" xmlns="http://www.w3.org/1999/html">
        <div class="kv">
            <div class="container">
                <div class="breadcrumds">
                    <ul>
                        <li><a href="./">HOME</a></li>
                        <li><a href="/what-we-do/">WHAT WE DO</a></li>
                        <li><?php echo the_title() ?></li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2><?php echo the_title() ?></h2>
                    </div>
                    <ul class="kv__submenu">
                        <li><a href="#overview">OVERVIEW</a></li>
                        <li><a href="#ous-projects">OUR PROJECTS</a></li>
                        <li><a href="#others">OTHERS</a></li>
                    </ul>
                </div>
                <?php $banner = get_field('banner')?>
                <div class="kv__img">
                    <img src="<?php echo $banner ?>" alt="">
                </div>
            </div>
        </div>
        <div id="overview" class="section section-overview">
            <div class="container">
                <div class="section-overview__row">
                    <div class="info">
                        <?php $content = get_the_content() ?>
                        <h2 class="c-title">Overview</h2>
                        <p class="txt"><?php echo $content ?></p>
                        <?php echo get_field('information') ?>
                    </div>

                    <?php
                        $images = get_post_meta(get_the_ID(), 'images', true);
                        $image_ids_array = $images ? explode(',', $images) : [];
                    ?>

                    <?php if (!empty($image_ids_array)) : ?>
                        <div class="photo">
                            <div class="js-slider-fade">
                                <?php foreach ($image_ids_array as $image) : ?>
                                    <div class="item"><img class="img-fit" src="<?php echo wp_get_attachment_url($image) ?>" alt=""></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="progressBarContainer">
                                <?php foreach ($image_ids_array as $index => $image) : ?>
                                    <div>
                                        <span data-slick-index="<?php echo $index ?>" class="progressBar"></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div id="ous-projects" class="l-project-list">
            <div class="container">
                <h2 class="section__title c-title">Featured Projects</h2>
                <p class="section__description">Our interior design services helped bring our clients’ visions to life by transforming their spaces. See how our experts transformed these interiors.</p>
            </div>
            <div class="c-slider-center">
                <div class="js-slider-center">
                    <?php
                    $featured_projects = get_field('featured_projects');
                    if ($featured_projects) :
                        foreach ($featured_projects as $project) :
                            setup_postdata($project); ?>
                            <div class="item">
                                <?php
                                    $thumbnail = get_field('thumbnail', $project->ID);
                                    $imagePC = get_field('image_pc', $project->ID);
                                    $imageSP = get_field('image_sp', $project->ID);
                                    $short_description = get_field('short_description', $project->ID);
                                    $category = get_field('category', $project->ID);
                                    $departments = wp_get_post_terms($category->ID, 'department');
                                    $department = $departments[0];
                                    $department_code = get_field('code', $department);
                                ?>
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $imageSP ?>">
                                        <img class="img-fit" src="<?php echo $imagePC ?>" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd <?php echo ($department_code === 'PMD')  ? 'active' : ""; ?>"><?php echo $department_code ?></p>
                                    <p class="logo"><img src="<?php echo $thumbnail ?>" alt="Jewel"></p>
                                    <dl>
                                        <dt class="c-title c-title--md"><?php echo get_the_title($project->ID) ?></dt>
                                        <?php
                                            $related_services = get_field('related_services', $project->ID);
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
<!--                                    <a href="--><?php //echo get_permalink($project); ?><!--" class="btn c-btn"><span>VIEW DETAILS</span></a>-->
                                </div>
                            </div>
                        <?php endforeach;
                        // Reset post data
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
            <?php
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => 6,
                    'paged' => $page,
                    'meta_query' => array(
                        array(
                            'key' => 'related_services',
                            'value' => get_the_ID(),
                            'compare' => 'LIKE'
                        )
                    )
                );
                $projects_query = new WP_Query($args);
            ?>

            <?php if ($projects_query->have_posts()): ?>
                <div class="others container">
                    <div class="row" id="project-list">
                        <?php while ($projects_query->have_posts()): $projects_query->the_post(); ?>
                            <div class="item">
                                <?php
                                    $imagePC = get_field('image_pc');
                                ?>
                                <div class="photo"><img class="img-fit" src="<?php echo $imagePC ?>" alt="<?php echo the_title() ?>"></div>
<!--                                <a href="--><?php //echo get_the_permalink(get_the_ID()) ?><!--">-->
                                    <h3 class="c-title c-title--md"><?php echo the_title() ?></h3>
<!--                                </a>-->
                                <p class="txt"><?php echo get_field('short_description'); ?></p>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="btn">
                <a href="javascript:void(0)" data-service-id="<?php echo get_the_ID(); ?>" id="btn-load-more" class="c-btn c-btn--viewmore"><span>View more</span></a>
            </div>
        </div>
        <?php
            $departments = get_terms(array(
                'taxonomy' => 'department',
                'hide_empty' => false,
                'orderby' => 'name',
                'order' => 'ASC'
            ));
        ?>
        <?php if (!empty($departments) && !is_wp_error($departments)) : ?>
            <div id="also-care" class="l-you-may-also-care">
                <div class="container">
                    <p class="c-title-sub">YOU MAY ALSO CARE</p>
                    <div class="row">
                        <?php foreach ($departments as $department) :?>
                            <a class="item" href="#">
                                <?php $department_code = get_field('code', $department); ?>
                                    <?php if ($department_code == "FMD") : ?>
                                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img01.jpg" alt="">
                                    <?php else : ?>
                                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img02.jpg" alt="">
                                    <?php endif; ?>
                                <dl>
                                    <dt class="c-title c-title--md"><?php echo $department->name ?></dt>
<!--                                    <dd>Contract Department</dd>-->
                                </dl>
                                <p class="date only-sp"><?php echo date('d M') ?></p>
                                <p class="txt"><?php echo $department->description; ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
<?php endif; ?>
<?php
get_sidebar();
get_footer();