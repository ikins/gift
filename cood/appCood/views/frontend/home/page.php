    <!--Section Post-->
    <section class="section-md text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-post">
              <?php foreach ($pages_detail as $rows) : ?>
              <h2><?php echo $rows->pages_judul; ?></h2>
              <hr>
              <div class="caption-meta"></div>
              <p>
                <?php echo $rows->pages_isi; ?>
              </p>
              <div class="blog-post-footer">
                <h4 class="border-bottom">Share</h4>
                <div class="icon-group">
                  <a href="#" class="icon icon-sm icon-social fa-facebook"></a>
                  <a href="#" class="icon icon-sm icon-social fa-twitter"></a>
                  <a href="#" class="icon icon-sm icon-social fa-google-plus"></a>
                  <a href="#" class="icon icon-sm icon-social fa-linkedin"></a>
                  <a href="#" class="icon icon-sm icon-social fa-instagram"></a>
                </div>
              </div>
              <?php endforeach; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
          <!-- Sidebar-->
          <div class="sidebar sidebar-mod-2">
            <div class="sidebar-module">
              <h4>About Us</h4>
              <p>We deal with different kinds of properties. No matter what you need, a house, an apartment or garage - you'll find a good option on our site. Thousands of offers and the best prices are guaranteed. Start browsing now!</p>
              <a href="#" class="btn btn-xs btn-primary">learn more</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>