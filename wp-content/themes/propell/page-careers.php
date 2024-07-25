<?php 
/*
Template Name: Page Careers
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
$template_id = get_the_ID();
$title = get_the_title();
$fields = get_fields();
$block_common = $fields['block_common'] ?? [];
$block_content = $fields['block_content'] ?? [];
$block_alert = $fields['block_alert'] ?? [];

$subject_values = [];
$subjects = $block_content['content_subject_values'] ?? '';
if($subjects != '') {
  $lines = explode("\n", $subjects);
  foreach ($lines as $line) {
      list($emails, $value) = explode(' => ', $line);
      $subject_values[$emails] = $value;
  }
}
?>
<main id="main" class="main">
    <div class="kv">
      <div class="container">
        <div class="breadcrumds">
          <ul>
            <li><a href="<?php echo pll_home_url() ?>">HOME</a></li>
            <li><?php echo $title; ?></li>
          </ul>
        </div>
        <div class="kv__text">
          <div class="kv__ttl">
            <h2><?php echo $title; ?></h2>
          </div>
        </div>
      </div>
      <div class="kv__img">
        <picture>
          <source media="(max-width: 750px)" srcset="<?php echo $assets; ?>/img/careers/kv_img_sp.jpg">
          <img src="<?php echo $assets; ?>/img/careers/kv_img.jpg" alt="">
        </picture>
      </div>
    </div>
    <div class="careers">
        <div class="careers__more">
                <div class="careers__more--main">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php if(!empty($fields['running_text'])) {?>
                <?php $items = explode("\n", $fields['running_text']);?>
                <div class="careers__more--top">
                    <div class="text-scroll">
                        <div class="swiper-text js-swiper">
                            <?php if($items) {?>
                                <?php foreach($items as $item) {?>
                                    <div class="item">
                                        <p class="text c-title"><?php echo $item; ?></p>
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</main>
<?php
get_footer();