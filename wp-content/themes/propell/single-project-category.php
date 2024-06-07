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
                        <li><a href="./">HOME</a></li>
                        <li><a href="/project/">Project</a></li>
                        <li><a href="/project/">FMD</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="kv__text">
                    <div class="kv__ttl">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <div class="kv__img">
                    <img src="<?php echo $featured_img_url ?>" alt="">
                </div>
            </div>

            <?php
            $departments = wp_get_post_terms(get_the_ID(), 'department');
            $department = $departments[0];
            $department_code = get_field('code', $department);
            $featured_projects = get_field('featured_projects', get_the_ID());
            ?>
        <div class="l-project-list">
            <?php if ($featured_projects) : ?>
                <div class="container">
                    <h2 class="section__title c-title">Featured Projects</h2>
                    <p class="section__description">Our interior design services helped bring our clients’ visions to life by transforming their spaces. See how our experts transformed these interiors.</p>
                </div>
                <div class="c-slider-center">
                    <div class="js-slider-center">
                        <?php foreach ($featured_projects as $project_id): ?>
                            <?php
                                $project = get_post($project_id);
                                setup_postdata($project);

                                $thumbnail = get_field('thumbnail', $project->ID);
                                $imagePC = get_field('image_pc', $project->ID);
                                $imageSP = get_field('image_sp', $project->ID);
                                $short_description = get_field('short_description', $project->ID);

                            ?>
                            <div class="item">
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $imageSP ?>">
                                        <img class="img-fit" src="<?php echo $imagePC ?>" alt="Marina Bay Residences">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd"><?php echo $department_code ?></p>
                                    <p class="logo"><img src="<?php echo $thumbnail ?>" alt="<?php echo get_the_title($project) ?>"></p>
                                    <dl>
                                        <dt class="c-title c-title--md"><?php echo get_the_title($project) ?></dt>
                                        <?php
                                        $related_services = get_field('related_services', $project->ID);
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
                                    <a href="<?php echo get_permalink($project); ?>" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => 6,
                    'paged' => $page,
                    'meta_query' => array(
                        array(
                            'key' => 'category',
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
                                <h3 class="c-title c-title--md"><?php echo the_title() ?></h3>
                                <p class="txt"><?php echo get_field('short_description'); ?></p>
                            </div>
                            <?php endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            <div class="btn">
                <a href="javascript:void(0)" data-category-id="<?php echo get_the_ID(); ?>" id="btn-load-more" class="c-btn c-btn--viewmore"><span>View more</span></a>
            </div>
        </div>
        <div class="l-you-may-also-care">
            <div class="container">
                <p class="c-title-sub">YOU MAY ALSO CARE</p>
                <div class="row">
                    <a class="item" href="#">
                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img02.jpg" alt="">
                        <dl>
                            <dt class="c-title c-title--md">Project Management Department (PMD)</dt>
                            <dd>Contract Department</dd>
                        </dl>
                        <p class="date only-sp">12 JUN</p>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                    <a class="item" href="#">
                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img01.jpg" alt="">
                        <dl>
                            <dt class="c-title c-title--md">Facilities Management Department (FMD)</dt>
                            <dd>Contract Department</dd>
                        </dl>
                        <p class="date only-sp">12 JUN</p>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </a>
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

