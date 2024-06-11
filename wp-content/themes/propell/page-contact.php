<?php
/*
Template Name: Page Contact
*/

get_header();
$assets = get_path_assets();

$current_language = pll_current_language('slug');
$template_id = get_the_ID();
$title = get_the_title();
$fields = get_fields();
$block_left = $fields['block_left'] ?? [];
$block_right = $fields['block_right'] ?? [];
$block_alert = $fields['block_alert'] ?? [];

$subject_values = [];
$subjects = $block_right['right_subject_values'] ?? '';
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
            <li><a href="/">HOME</a></li>
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
          <source media="(max-width: 750px)" srcset="<?php echo $assets; ?>/img/contact/kv_img_sp.jpg">
          <img src="<?php echo $assets; ?>/img/contact/kv_img.jpg" alt="">
        </picture>
      </div>
    </div>
    <div class="contact">
      <div class="container">
        <div class="contact__content">
          <div class="contact__info">
            <h2 class="c-ttl"><?php echo $block_left['left_title'] ?? ''; ?></h2>
            <div class="c-address">
              <dl>
                <dt><?php echo $block_left['left_address_name'] ?? ''; ?></dt>
                <dd><?php echo $block_left['left_address_detail'] ?? ''; ?></dd>
              </dl>
              <dl>
                <dt><?php echo $block_left['left_tel_label'] ?? ''; ?></dt>
                <dd><?php echo $block_left['left_tel'] ?? ''; ?></dd>
              </dl>
            </div>
            <?php if(!empty($block_left['left_iframe_map'])) {?>
            <div class="c-map">
              <?php echo $block_left['left_iframe_map']; ?>
            </div>
            <?php }?>
            <div class="c-info__btn">
              <a href="#" class="btn c-btn" target="_blank"><span><?php echo $block_left['left_label_button'] ?? ''; ?></span></a>
            </div>
          </div>
          <div class="contact__form">
            <h2 class="c-ttl c-ttl__style"><?php echo $block_right['right_title'] ?? ''; ?></h2>
            <form class="c-form contact-form" action="">
              <div class="form-group">
                <label class="label" for="name"><?php echo $block_right['right_name'] ?? ''; ?>(*)</label>
                <input name="name" id="input_name" type="text" class="input" placeholder="<?php echo $block_right['right_name_placeholder'] ?? ''; ?>">
                <input type="hidden" id="name_required" value="<?php echo $block_right['right_name_required'] ?? ''; ?>" />
                <input type="hidden" id="name_minlength" value="<?php echo $block_right['right_name_minlength'] ?? ''; ?>" />
              </div>
              <div class="form-group">
                <label class="label" for="email"><?php echo $block_right['right_email'] ?? ''; ?>(*)</label>
                <input name="email" id="input_email" type="text" class="input" placeholder="<?php echo $block_right['right_email_placeholder'] ?? ''; ?>">
                <input type="hidden" id="email_required" value="<?php echo $block_right['right_email_required'] ?? ''; ?>" />
                <input type="hidden" id="email_format" value="<?php echo $block_right['right_email_format'] ?? ''; ?>" />
              </div>
              <div class="form-group">
                <label class="label"><?php echo $block_right['right_subject'] ?? ''; ?>(*)</label>
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
                <label class="label" for="message"><?php echo $block_right['right_message'] ?? ''; ?>(*)</label>
                <textarea name="message" id="input_message" placeholder="<?php echo $block_right['right_message_placeholder'] ?? ''; ?>"></textarea>
                <input type="hidden" id="message_required" value="<?php echo $block_right['right_message_required'] ?? ''; ?>" />
                <input type="hidden" id="message_minlength" value="<?php echo $block_right['right_message_minlength'] ?? ''; ?>" />
              </div>
              <div class="form-captcha">
                <div class="g-recaptcha" data-sitekey="6LcGH-YpAAAAAEn55zXx2AQ0RpAsH_yA_1xulcbX"></div>
              </div>
              <div class="form-btn" id="btn-submit" data-id="<?php echo $template_id; ?>">
                <button class="btn c-btn" type="submit"><span><?php echo $block_right['right_submit'] ?? ''; ?></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="c-modal">
        <div class="c-modal__inner">
          <h2 class="c-modal__ttl"><?php echo $block_alert['alert_title'] ?? '';?></h2>
          <p class="c-modal__txt"><?php echo $block_alert['alert_message'] ?? '';?></p>
          <div class="c-modal__close"></div>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();
