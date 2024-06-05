<?php
get_header();
?>
<main id="main" class="main">
    <div class="kv">
      <div class="container">
        <div class="breadcrumds">
          <ul>
            <li><a href="./">HOME</a></li>
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
          <source media="(max-width: 750px)" srcset="/assets/img/contact/kv_img_sp.jpg">
          <img src="/assets/img/contact/kv_img.jpg" alt="">
        </picture>
      </div>
    </div>
    <div class="contact">
      <div class="container">
        <div class="contact__content">
          <div class="contact__info">
            <h2 class="c-ttl">Our Contact</h2>
            <div class="c-address">
              <dl>
                <dt>PROPELL INTERGRATED PTE LTD</dt>
                <dd>15 Bukit Batok Street 22#06-00  - Propell BuildingSingapore 659586</dd>
              </dl>
              <dl>
                <dt>TEL</dt>
                <dd>(+65) 6282 2822</dd>
              </dl>
            </div>
            <div class="c-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7206665654408!2d103.74862797567911!3d1.344013761593104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10040455176e58f3%3A0x7187f2986f246256!2sPropell%20Integrated%20PTE%20LTD!5e0!3m2!1svi!2s!4v1716389261244!5m2!1svi!2s"></iframe>
            </div>
            <div class="c-info__btn">
              <a href="#" class="btn c-btn" target="_blank"><span>VIEW BIG MAP</span></a>
            </div>
          </div>
          <div class="contact__form">
            <h2 class="c-ttl c-ttl__style">Make An <br class="only-pc">Appointment</h2>
            <form class="c-form contact-form" action="">
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
              <div class="form-captcha">
                <div class="g-recaptcha" data-sitekey="6LcGH-YpAAAAAEn55zXx2AQ0RpAsH_yA_1xulcbX"></div>
              </div>
              <div class="form-btn">
                <button class="btn c-btn" type="submit"><span>SEND EMAIL</span></button>
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
