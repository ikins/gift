<div class="content-wrapper">
    <div class="container">
                <div class="row padding-30">
                  <div class="col-md-12">
                      <div class="content-box text-center">
                        <p>Silahkan lengkapi form berikut :</p>
                        <br>
                        <h4 class="text-red">Kami akan segera menghubungi Anda secepatnya</h4>
                      </div>

                      <div class="box-header with-border"></div>
                      <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
                      <?php echo form_open('contact-us-post'); ?>
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="contact_nama" class="form-control" id="nama" placeholder="Nama">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="contact_email" class="form-control" id="email" placeholder="Email">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">No. Handphone</label>
                                <input type="text" name="contact_hp" class="form-control" id="nohp" placeholder="Handphone">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Pesan</label>
                                <textarea class="form-control" name="contact_ket"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>

                  </div>
                </div>
    </div>
  </div>