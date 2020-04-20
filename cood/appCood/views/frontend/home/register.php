<div class="content-wrapper">
    <div class="container">
                <div class="row padding-30">
                  <div class="col-md-12">
                      <div class="content-box text-center">
                        <p>Silahkan lengkapi form berikut :</p>
                      </div>

                      <div class="box-header with-border"></div>
                      <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
                      <?php echo form_open('daftar-post'); ?>
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" name="password" class="form-control" id="subjek" placeholder="Password">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="email">Ulangi Password</label>
                                <input type="password" name="retype_password" class="form-control" id="subjek" placeholder="Ulangi Password">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">No. Handphone</label>
                                <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Handphone">
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