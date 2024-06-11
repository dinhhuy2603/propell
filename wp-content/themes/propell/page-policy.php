<?php
/*
Template Name: Page Policy
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');

?>
<?php if (have_posts()) : ?>
    <?php  while ( have_posts() ) : the_post() ?>
        <main id="main" class="main">
            <div class="kv">
                <div class="container">
                    <div class="breadcrumds">
                        <ul>
                            <li><a href="<?php echo home_url();?>">HOME</a></li>
                            <li><a href="">PERSONAL DATA PROTECTION POLICY</a></li>
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
                        <source media="(max-width: 750px)" srcset="<?php echo $assets ?>/img/policy/kv_img_sp.jpg">
                        <img src="<?php echo $assets ?>/img/policy/kv_img.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="policy">
                <div class="container">
                   <?php echo the_content(); ?>
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
