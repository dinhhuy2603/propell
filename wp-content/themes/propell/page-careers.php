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
            <li><a href="./">HOME</a></li>
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
      <div class="careers__top">
        <div class="container">
          <h2 class="c-ttl c-ttl__style"><?php echo $block_common['common_title'] ?? ''; ?></h2>
          <?php if(!empty($block_common['common_description'])){ ?>
            <div class="c-txt">
              <?php echo $block_common['common_description']; ?>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="careers__form">
        <div class="container">
          <?php if(!empty($block_content['content_title'])) {?>
          <h2 class="careers__form--ttl"><?php echo $block_content['content_title']; ?></h2>
          <?php }?>
          <form class="c-form careers-form" action="">
            <div class="form-group">
              <label class="label" for="name"><?php echo $block_content['content_name'] ?? ''; ?>(*)</label>
              <input name="name" id="input_name" type="text" class="input" placeholder="<?php echo $block_content['content_name_placeholder'] ?? ''; ?>" />
              <input type="hidden" id="name_required" value="<?php echo $block_content['content_name_required'] ?? ''; ?>" />
              <input type="hidden" id="name_minlength" value="<?php echo $block_content['content_name_minlength'] ?? ''; ?>" />
            </div>
            <div class="form-group">
              <label class="label" for="email"><?php echo $block_content['content_email'] ?? ''; ?>(*)</label>
              <input name="email" id="input_email" type="text" class="input" placeholder="<?php echo $block_content['content_email_placeholder'] ?? ''; ?>" />
              <input type="hidden" id="email_required" value="<?php echo $block_content['content_email_required'] ?? ''; ?>" />
              <input type="hidden" id="email_format" value="<?php echo $block_content['content_email_format'] ?? ''; ?>" />
            </div>
            <div class="form-group">
              <label class="label"><?php echo $block_content['content_subject'] ?? ''; ?>(*)</label>
              <?php if(!empty($subject_values)) {?>
                <div class="select-menu">
                  <div class="select-btn">
                    <span class="sBtn-text">Select Subject</span>
                    <span class="icon"></span>
                  </div>
                  <ul class="options">
                    <?php foreach($subject_values as $sub => $val){?>
                      <li class="option" data-val="<?php echo $sub; ?>">
                        <span class="option-text"><?php echo $val;?></span>
                      </li>
                    <?php }?>
                  </ul>
                </div>
              <?php }?>
            </div>
            <div class="form-group">
              <label class="label" for="message"><?php echo $block_content['content_message'] ?? ''; ?>(*)</label>
              <textarea name="message" id="input_message" placeholder="<?php echo $block_content['content_message_placeholder'] ?? ''; ?>"></textarea>
              <input type="hidden" id="message_required" value="<?php echo $block_content['content_message_required'] ?? ''; ?>" />
              <input type="hidden" id="message_minlength" value="<?php echo $block_content['content_message_minlength'] ?? ''; ?>" />
            </div>
            <div class="form-btn" id="btn-submit" data-id="<?php echo $template_id; ?>">
              <button class="btn c-btn" type="submit"><span><?php echo $block_content['content_submit'] ?? ''; ?></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="c-modal">
        <div class="c-modal__inner">
          <h2 class="c-modal__ttl"><?php echo $block_alert['alert_title'] ?? '';?></h2>
          <p class="c-modal__txt"><?php echo $block_alert['alert_message'] ?? '';?></p>
          <div class="c-modal__close"></div>
        </div>
      </div>
      <div class="careers__more">
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
        <?php if(!empty($fields['see_more_jobs'])){ ?>
        <div class="careers__more--main">
          <div class="container">
            <?php echo $fields['see_more_jobs']; ?>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
</main>
<?php
get_footer();