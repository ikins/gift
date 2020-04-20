<!--Section Contact Us-->
    <section class="section-md bg-dark text-center text-md-left">
      <div class="container">
        <h2>Contact Us</h2>
        <hr>
        <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
        <div class="row offset-8">
          <div class="col-xs-12 col-md-8">
            <!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="<?php echo base_url(); ?>contact-us-post" class="rd-mailform text-left">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="contact_nama" data-constraints="@Required" class="form-control" id="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="col-sm-6 input-mod-1">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="contact_email" data-constraints="@Required" class="form-control" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="nama">No. Handphone</label>
                     <input type="text" name="contact_hp" data-constraints="@Required" class="form-control" id="nohp" placeholder="Handphone">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="contact-message" class="form-label">Message</label>
                    <textarea id="contact-message" name="contact_ket" data-constraints="@Required" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-sushi btn-sm">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </section>