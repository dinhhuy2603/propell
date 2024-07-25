<?php
get_header();
$assets = get_path_assets();
$current_language = pll_current_language('slug');
?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main id="main" class="main">
            <?php
            $execute_time = get_field('execution_time');
            $scale = get_field('project_scale');
            $location = get_field('project_location');
            $short_description = get_field('short_description');
            $category = get_field('category');
            $categoryID = $category->ID ?? null;
            $departments = wp_get_post_terms($categoryID, 'department');
            $department = $departments[0] ?? null;
            $department_code = get_field('code', $department);
            $post_type_archive_link = get_post_type_archive_link('project-category');

            // If Polylang is active and the current language is not the default language, modify the archive link
            if ($current_language && $current_language !== pll_default_language()) {
                $post_type_archive_link = apply_filters('wpml_permalink', $post_type_archive_link, $current_language);
            }

            ?>
            <div class="kv">
                <div class="container">
                    <div class="breadcrumds">
                        <ul>
                            <li><a href="./">HOME</a></li>
<!--                            <li><a href="/project/">Project</a></li>-->
                            <?php if ($department_code) : ?>
                                <li><a href="<?php echo $post_type_archive_link ?>"><?php echo $department_code ?></a></li>
                            <?php endif; ?>
                            <?php if ($categoryID) : ?>
                                <li><a href="<?php echo get_permalink($categoryID) ?>"><?php echo get_the_title($categoryID) ?></a></li>
                            <?php endif; ?>
                            <li><?php the_title() ?></li>
                        </ul>
                    </div>
                    <div class="kv__text">
                        <div class="kv__ttl">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <p class="fmd <?php echo ($department_code === 'PMD')  ? 'active' : ""; ?>"><?php echo $department_code ?></p>
                    </div>
                </div>
                <div class="kv__img --half">
                    <img src="<?php echo $assets ?>/img/project/project_kv_detail.jpg" alt="">
                </div>
            </div>
            <div class="project-detail">
                <div class="container">
                    <div class="content__head">
                        <div class="content__head--title"><?php echo $short_description ?></div>
                        <div class="content__head--info">
                            <dl>
                                <dt>EXECUTION TIME</dt>
                                <dd><?php echo $execute_time ?></dd>
                            </dl>
                            <dl>
                                <dt>PROJECT SCALE</dt>
                                <dd><?php echo $scale ?></dd>
                            </dl>
                            <dl>
                                <dt>PROJECT IMPLEMENTATION LOCATION</dt>
                                <dd><?php echo $location ?></dd>
                            </dl>
                        </div>
                    </div>
                    <?php the_content() ?>
<!--                    <div class="btn u-txt-center">-->
<!--                        <a href="#" class="c-btn"><span>CONTACT US</span></a>-->
<!--                    </div>-->
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
                                    </dl>
                                    <p class="date only-sp"><?php echo date('d M') ?></p>
                                    <p class="txt"><?php echo $department->description; ?></p>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
<!--            <div id="also-care" class="l-you-may-also-care">-->
<!--                <div class="container">-->
<!--                    <p class="c-title-sub">YOU MAY ALSO CARE</p>-->
<!--                    <div class="row">-->
<!--                        <a class="item" href="#">-->
<!--                            <img class="img-fit" src="--><?php //echo $assets ?><!--/img/what-we-do/care_img02.jpg" alt="">-->
<!--                            <dl>-->
<!--                                <dt class="c-title c-title--md">Project Management Department (PMD)</dt>-->
<!--                            </dl>-->
<!--                            <p class="date only-sp">12 JUN</p>-->
<!--                            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                        </a>-->
<!--                        <a class="item __blank" href="#">-->
<!--                            <img class="img-fit" src="--><?php //echo $assets ?><!--/img/what-we-do/care_img01.jpg" alt="">-->
<!--                            <dl>-->
<!--                                <dt class="c-title c-title--md">Facilities Management Department (FMD)</dt>-->
<!--                            </dl>-->
<!--                            <p class="date only-sp">12 JUN</p>-->
<!--                            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                        </a>-->
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

