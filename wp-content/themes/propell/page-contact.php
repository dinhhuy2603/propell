<?php
get_header();
$fields = get_fields();
// echo '<pre>';
// var_dump($fields);
$block_left = $fields['block_left'] ?? [];
$block_right = $fields['block_right'] ?? [];
?>
<main id="main" class="main">
    <div class="kv">
      <div class="container">
        <div class="breadcrumds">
          <ul>
            <li><a href="/">HOME</a></li>
            <li>CONTACT US</li>
          </ul>
        </div>
        <div class="kv__text">
          <div class="kv__ttl">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
      <div class="kv__img">
        <picture>
          <source media="(max-width: 750px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/kv_img_sp.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/kv_img.jpg" alt="">
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
                <input name="name" type="text" class="input" placeholder="<?php echo $block_right['right_name_placeholder'] ?? ''; ?>">
              </div>
              <div class="form-group">
                <label class="label" for="email"><?php echo $block_right['right_email'] ?? ''; ?>(*)</label>
                <input name="email" type="text" class="input" placeholder="<?php echo $block_right['right_email_placeholder'] ?? ''; ?>">
              </div>
              <div class="form-group">
                <label class="label"><?php echo $block_right['right_subject'] ?? ''; ?>(*)</label>
                <div class="select-menu">
                  <div class="select-btn">
                    <span class="sBtn-text">Select Subject</span>
                    <span class="icon"></span>
                  </div>
                  <ul class="options">
                    <li class="option">
                      <span class="option-text">HR Career</span>
                    </li>
                    <li class="option">
                      <span class="option-text">FMD Quote</span>
                    </li>
                    <li class="option">
                      <span class="option-text">PMD Quote</span>
                    </li>
                    <li class="option">
                      <span class="option-text">Other</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <label class="label" for="message"><?php echo $block_right['right_message'] ?? ''; ?>(*)</label>
                <textarea name="message" placeholder="<?php echo $block_right['right_message_placeholder'] ?? ''; ?>"></textarea>
              </div>
              <div class="form-captcha">
                <div class="g-recaptcha" data-sitekey="6LcGH-YpAAAAAEn55zXx2AQ0RpAsH_yA_1xulcbX"></div>
              </div>
              <div class="form-btn">
                <button class="btn c-btn" type="submit"><span><?php echo $block_right['right_submit'] ?? ''; ?></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="c-modal is-active">
        <div class="c-modal__inner">
          <h2 class="c-modal__ttl">Success</h2>
          <p class="c-modal__txt">Your appointment successfully created. We will get back soon. Thank you.</p>
          <div class="c-modal__close"></div>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();
