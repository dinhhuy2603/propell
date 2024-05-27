<?php


get_header('service');
$assets = get_path_assets();

$current_year = get_the_date('Y');
$current_language = pll_current_language('slug');
?>

<?php if (have_posts()) : ?>
    <?php
    if (get_post_status() != 'publish') {
        wp_redirect('/404');
        exit;
    }
    ?>
    <main id="main" class="main">
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
                        <?php echo the_content() ?>
                        <?php echo get_field('information') ?>
                    </div>
                    <?php
                        $images = get_post_meta(get_the_ID(), 'images', true);
                        if ($images) {
                            $image_ids_array = explode(',', $images);
                        }
                    ?>
                    <?php if (count($image_ids_array) > 0) : ?>
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
                <h2 class="section__title c-title">Integrated Facilities Management</h2>
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
                                    $banner = get_field('banner', $project->ID);
                                    $short_description = get_field('short_description', $project->ID);
                                ?>
                                <div class="item__img">
                                    <picture>
                                        <source media="(max-width: 750px)" srcset="<?php echo $banner ?>">
                                        <img class="img-fit" src="<?php echo $banner ?>" alt="Marina Bay Sands Singapore">
                                    </picture>
                                </div>
                                <div class="item__group">
                                    <p class="fmd">FMD</p>
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
                                    <a href="#" class="btn c-btn"><span>VIEW DETAILS</span></a>
                                </div>
                            </div>
                        <?php endforeach;
                        // Reset post data
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
            <div class="others container">
                <div class="row">
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img01.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 1</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img02.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 2</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img03.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 3</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img04.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 4</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img05.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 5</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                    <div class="item">
                        <div class="photo"><img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/others_img06.jpg" alt="Project name"></div>
                        <h3 class="c-title c-title--md">Project name 6</h3>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
                    </div>
                </div>
                <div class="btn">
                    <a href="#" class="c-btn c-btn--viewmore"><span>View more</span></a>
                </div>
            </div>
        </div>
        <div id="also-care" class="l-you-may-also-care">
            <div class="container">
                <p class="c-title-sub">YOU MAY ALSO CARE</p>
                <div class="row">
                    <a class="item" href="#">
                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img01.jpg" alt="">
                        <dl>
                            <dt class="c-title c-title--md">Facilities Management Department (FMD)</dt>
                            <dd>Contract Department</dd>
                        </dl>
                        <p class="date only-sp">12 JUN</p>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </a>
                    <a class="item" href="#">
                        <img class="img-fit" src="<?php echo $assets ?>/img/what-we-do/care_img02.jpg" alt="">
                        <dl>
                            <dt class="c-title c-title--md">Project Management Department (PMD)</dt>
                            <dd>Contract Department</dd>
                        </dl>
                        <p class="date only-sp">12 JUN</p>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
<?php endif; ?>

<footer id="footer" class="footer mb-lg">
    <div class="container">
        <div class="footer__row01">
            <div class="logo"><img src="<?php echo $assets ?>/img/logo-nav.png" alt="Logo"></div>
            <div class="list">
                <ul>
                    <li>Electrical Engineering</li>
                    <li>Extra Low Voltage System</li>
                    <li>ACMV System</li>
                    <li>Fire Prevention & Protection System</li>
                    <li>ECO System</li>
                    <li>Integrated Facilities Management</li>
                </ul>
            </div>
            <div class="group">
                <h2 class="c-title">There's Nothing <br/>We Can't Achieve Together</h2>
                <div class="subcrice">
                    <input class="subcrice__input" type="text" name="mail" placeholder="Your email...">
                    <a href="#" class="subcrice__btn c-learn-more">LEARN MORE</a>
                </div>
                <ul class="partner only-pc">
                    <li><img src="<?php echo $assets ?>/img/footer-logo01.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo02.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo03.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo04.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo05.png" alt=""></li>
                    <li><img src="<?php echo $assets ?>/img/footer-logo06.png" alt=""></li>
                </ul>
                <div class="partner only-sp"><img src="<?php echo $assets ?>/img/footer-logo_sp.png" alt=""></div>
            </div>
        </div>
        <div class="footer__row02">
            <ul class="nav">
                <li><a href="/contact-us/">Contact Us</a></li>
                <li><a href="#">Propell Responsibilites</a></li>
                <li><a href="/careers/">Careers</a></li>
                <li><a href="/terms-of-use/">Terms of Use</a></li>
                <li><a href="/policy/">Personal Data Protection Policy</a></li>
            </ul>
            <ul class="social">
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-youtube.png" alt="youtube"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-facebook.png" alt="facebook"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo $assets ?>/img/icon-linkedin.png" alt="linkedin"></a></li>
            </ul>
            <p class="copyright">© 2023 Propell Integrated Pte Ltd .<br/>All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- libs -->
<script src="<?php echo $assets ?>/libs/modernizr.min.js"></script>
<script src="<?php echo $assets ?>/libs/jquery-3.6.0.js"></script>
<script src="<?php echo $assets ?>/libs/slick.min.js"></script>
<script src="<?php echo $assets ?>/js/common.js"></script>

<!-- top -->
<script src="<?php echo $assets ?>/js/what-we-do.js"></script>
</body>

</html>
