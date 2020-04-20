<!--Section Login-->
    <section class="section-md text-center text-sm-left">
      <div class="container">
        <h2>Sign In</h2>
        <hr>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-lg-5">
            <div class="tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#tab1">Login</a>
                </li>
              </ul>
              <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
              <?php if (isset($error)){ ?>
                <p class="login-box-msg text-red"><?php echo $error; ?></p>
              <?php } ?>
              <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo base_url(); ?>valid-login-admin" class="rd-mailform text-left">
                    <div class="form-group">
                      <label for="email" class="form-label">E-mail</label>
                      <input id="email" type="email" name="email" data-constraints="@Required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="password-1" class="form-label">Password</label>
                      <input id="password-1" type="password" name="password" data-constraints="@Required" class="form-control">
                    </div>
                    <div class="form-group-btn">
                      <button type="submit" class="btn btn-sushi btn-sm btn-min-width-xs">Enter</button>
                      <div class="icon-group">
                        <a href="<?php echo base_url(); ?>" class="icon icon-xs icon-primary fa-home"></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
