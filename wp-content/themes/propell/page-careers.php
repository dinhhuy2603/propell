<?php 
/*
Template Name: Page Careers
*/

get_header();
$assets = get_path_assets();
?>
<main id="main" class="main">
    <div class="kv">
      <div class="container">
        <div class="breadcrumds">
          <ul>
            <li><a href="./">HOME</a></li>
            <li>CAREERS</li>
          </ul>
        </div>
        <div class="kv__text">
          <div class="kv__ttl">
            <h2>Careers</h2>
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
          <h2 class="c-ttl c-ttl__style">Our Contact</h2>
          <div class="c-txt">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.
            <br>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bibendum vitae dictumst sit vitae, mi imperdiet sit. Lectus eleifend aliquam nibh mauris, pretium. Lectus magnis lorem massa urna felis porta.</p>
          </div>
        </div>
      </div>
      <div class="careers__form">
        <div class="container">
          <h2 class="careers__form--ttl">FOR ALL ENQUIRES, FEEL FREE TO DROP US AN EMAIL AT:</h2>
          <form class="c-form careers-form" action="">
            <div class="form-group">
              <label class="label" for="name">YOUR NAME (*)</label>
              <input name="name" type="text" class="input" placeholder="Enter your name here...">
            </div>
            <div class="form-group">
              <label class="label" for="email">YOUR EMAIL (*)</label>
              <input name="email" type="text" class="input" placeholder="sample@gmail.com / sample@hotmail.com...">
            </div>
            <div class="form-group">
              <label class="label">SUBJECT (*)</label>
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
              <label class="label" for="message">MESSAGE (*)</label>
              <textarea name="message" placeholder="Enter your text here"></textarea>
            </div>
            <div class="form-btn">
              <button class="btn c-btn" type="submit"><span>SEND EMAIL</span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="careers__more">
        <div class="careers__more--top">
          <div class="text-scroll">
            <div class="swiper-text js-swiper">
              <div class="item">
                <p class="text c-title">Let's Work Together</p>
              </div>
              <div class="item">
                <p class="text c-title">Let's Work Together</p>
              </div>
              <div class="item">
                <p class="text c-title">Let's Work Together</p>
              </div>
            </div>
          </div>
        </div>
        <div class="careers__more--main">
          <div class="container">
            <h2 class="c-ttl">See More Jobs</h2>
            <div class="c-banner">
              <div class="c-banner__top">
                <div class="c-ttl02">
                  <a href="#">
                    <img src="<?php echo $assets; ?>/img/careers/careers_logo.png" alt="">
                  </a>
                </div>
                <div class="c-dots">
                  <img src="<?php echo $assets; ?>/img/careers/icon_dot.png" alt="">
                </div>
              </div>
              <div class="c-banner__mid">
                <div class="c-txt">For Propell Career opportunitites via MyCareersFuture portal, please click on the icon above</div>
                <div class="c-banner__btn">
                  <a href="#" class="btn c-btn"><span>VISIT US ON</span></a>
                </div>
              </div>
              <div class="c-banner__btm">
                <div class="c-logo">
                  <a href="#">
                    <img src="<?php echo $assets; ?>/img/careers/careers_logo02.png" alt="">
                  </a>
                </div>
                <div class="c-txt02">For Propell Career oppoytunitites via JobStreet portal, please click on the icon above</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<?php
get_footer();