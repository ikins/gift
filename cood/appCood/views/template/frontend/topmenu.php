<!-- Page Header-->
<header class="page-head rd-navbar-wrap header_corporate">
      <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
        data-lg-device-layout="rd-navbar-fullwidth" data-stick-up-offset="100px">
        <!--RD Navbar Panel-->
        <div class="rd-navbar-top-panel">
          <div class="rd-navbar-top-panel-wrap">
            <div class="top-panel-inner">
              <dl class="dl-horizontal-mod-1">
                <dt>
                  <span class="material-icons-local_phone icon-xxs-mod-2"></span>
                </dt>
                <dd>
                  <a href="callto:#">(+62) 7501048</a>
                </dd>
              </dl>
              <dl class="dl-horizontal-mod-1">
                <dt>
                  <span class="material-icons-drafts icon-xxs-mod-2"></span>
                </dt>
                <dd>
                  <a href="mailto:#">info@sintragiat.co.id</a>
                </dd>
              </dl>
              <address>
                <dl class="dl-horizontal-mod-1">
                  <dt>
                    <span class="mdi mdi-map-marker-radius icon-xxs-mod-2"></span>
                  </dt>
                  <dd>
                    <a href="#" class="inset-11">Jl. Mars Tengah No. 1 Masrgahayu Raya Kota Bandung</a>
                  </dd>
                </dl>
              </address>
            </div>
            <ul class="list-inline">
              <li>
                <a href="#" class="fa-facebook"></a>
              </li>
              <li>
                <a href="#" class="fa-twitter"></a>
              </li>
              <li>
                <a href="#" class="fa-rss"></a>
              </li>
            </ul>
            <div class="btn-group">
              <a href="<?php echo base_url(); ?>make-an-appointment" class="btn btn-sm btn-primary">Make an Appointment</a>
            </div>
          </div>
        </div>
        <div class="rd-navbar-inner inner-wrap">
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle">
              <span></span>
            </button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
              <a href="index.html" class="brand-name">
                <img src="<?php echo base_url("assets/"); ?>images/logo-1.png" alt="">
              </a>
            </div>
          </div>
          <div class="btn-group">
            <a href="<?php echo base_url(); ?>make-an-appointment" class="btn btn-sm btn-primary">Make an Appointment</a>
          </div>
          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>">Home</a>
                </li>
              <?php foreach ($pages as $rows) : ?>
                <!-- dynamic pages -->
                <li class="<?php if($this->uri->segment(1)=="<?php echo $rows->pages_slug; ?>"){echo "active";}?>">
                  <a href="<?php echo base_url(); ?><?php echo $rows->pages_slug; ?>"><?php echo $rows->pages_judul; ?></a>
                </li>
              <?php endforeach; ?>
              <?php if($this->session->userdata('is_admin_logged_in')) : ?>
              <li>
                <a href="<?php echo base_url(); ?>cood-admin">Admin Page</a>
              </li>
              <?php endif; ?>
              <li class="link-group">
                <a href="<?php echo base_url(); ?>make-an-appointment" class="btn btn-sm btn-primary">Make an Appointment</a>
              </li>
              <li class="rd-navbar-bottom-panel">
                <div class="rd-navbar-bottom-panel-wrap">
                  <dl class="dl-horizontal-mod-1 login">
                    <dt>
                      <span class="mdi mdi-login icon-xxs-mod-2"></span>
                    </dt>
                    <dd>
                      <a href="login.html" class="text-sushi">Login/Registration</a>
                    </dd>
                  </dl>
                  <div class="top-panel-inner">
                    <dl class="dl-horizontal-mod-1">
                      <dt>
                        <span class="icon-xxs-mod-2 material-icons-local_phone"></span>
                      </dt>
                      <dd>
                        <a href="callto:#">1-800-1234-567</a>
                      </dd>
                    </dl>
                    <dl class="dl-horizontal-mod-1">
                      <dt>
                        <span class="material-icons-drafts icon-xxs-mod-2"></span>
                      </dt>
                      <dd>
                        <a href="mailto:#">info@demolink.org</a>
                      </dd>
                    </dl>
                    <address>
                      <dl class="dl-horizontal-mod-1">
                        <dt>
                          <span class="icon-xxs-mod-2 mdi mdi-map-marker-radius"></span>
                        </dt>
                        <dd>
                          <a href="#" class="inset-11">795 Folsom Ave, Suite 600 San Francisco, CA 94107</a>
                        </dd>
                      </dl>
                    </address>
                  </div>
                  <ul class="list-inline">
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
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>