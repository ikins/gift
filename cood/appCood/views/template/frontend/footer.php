      <footer class="page-foot text-left bg-gray">
      <section class="footer-content">
        <div class="container">
          <div class="row flow-offset-3">
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <div class="rd-navbar-brand">
                <a href="index.html" class="brand-name">
                  <img src="<?php echo base_url("assets/"); ?>images/logo-2.png" alt="">
                </a>
              </div>
              <p>We believe in Simple, Creative &amp; Flexible</p>
              <address class="address">
                <dl>
                  <dt>Headquarters:</dt>
                  <dd>Jl. Mars Tengah No. 1, Blok V, Masrgahayu Raya Bandung-40296, Jawa Barat - Indonesia</dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                  <dt>Phone</dt>
                  <dd>
                    <a href="callto:#" class="text-primary">(+62) 7501048</a>
                  </dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                  <dt>Email</dt>
                  <dd>
                    <a href="mailto:#" class="text-primary">info@sintragiat.co.id</a>
                  </dd>
                </dl>
              </address>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <h6 class="text-ubold">Who we are</h6>
              <ul class="list-marked well6 text-left">
                <li>
                  <a href="#">About us</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Portfolio</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
                <li>
                  <a href="#">Make an Appointment</a>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
              <h6 class="text-ubold">Update Info</h6>
              <p class="text-gray">Enter your email address to receive all updates on new arrivals, special offers and other information.</p>
              <!-- RD Mailform-->
              <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left subscribe">
                <div class="form-group">
                  <label for="email-sub" class="form-label"></label>
                  <input id="email-sub" type="email" name="email" data-constraints="@Required @Email" placeholder="Enter e-mail" class="form-control">
                </div>
                <button class="btn btn-sushi btn-sm">subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <p class="pull-sm-left">©
            <span id="copyright-year"></span> All Rights Reserved
            <a href="terms-of-service.html">Terms of Use and Privacy Policy</a>
          </p>
          <ul class="list-inline pull-sm-right">
            <li>
              <a href="#" class="fa-facebook"></a>
            </li>
            <li>
              <a href="#" class="fa-twitter"></a>
            </li>
            <li>
              <a href="#" class="fa-pinterest-p"></a>
            </li>
            <li>
              <a href="#" class="fa-vimeo"></a>
            </li>
            <li>
              <a href="#" class="fa-google"></a>
            </li>
            <li>
              <a href="#" class="fa-rss"></a>
            </li>
          </ul>
        </div>
      </section>
      <!-- Rd Mailform result field-->
      <div class="rd-mailform-validate"></div>
    </footer>
    <!-- {%FOOTER_LINK}-->
  </div>
  <!-- Global Mailform Output-->
  <div id="form-output-global" class="snackbars"></div>
  <!-- PhotoSwipe Gallery-->
  <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
          <button title="Share" class="pswp__button pswp__button--share"></button>
          <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
          <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
        <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__cent"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Java script-->
  <script src="<?php echo base_url("assets/"); ?>js/core.min.js"></script>
  <script src="<?php echo base_url("assets/"); ?>js/script.js"></script>

  
</body>
</html>