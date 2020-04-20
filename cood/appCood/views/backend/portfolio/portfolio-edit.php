<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          portfolio Edit
          <small>Edit Berita</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>cood-admin"><i class="fa fa-dashboard"></i> Dashboard</li></a>
          <li><a href="<?php echo base_url(); ?>cood-admin/portfolio">portfolio</a></li>
          <li class="active">portfolio Edit</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body">
                <?php echo form_open_multipart('cood-admin/portfolio-edit-post'); ?>
                  <?php foreach($portfolio as $rows) : ?>
                  <input type="hidden" name="portfolio_id" value="<?php echo $rows->portfolio_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nama">Nama</label>
                      <input type="text" name="portfolio_nama" class="form-control" placeholder="Nama" value="<?php echo $rows->portfolio_nama; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Keterangan">Keterangan</label>
                      <textarea name="portfolio_ket" class="form-control" rows="3" placeholder="Keterangan"><?php echo $rows->portfolio_ket; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="file">File Gambar</label>
                      <input type="hidden" name="portfolio_img_old" value="<?php echo $rows->portfolio_img; ?>">
                      <input type="file" name="portfolio_img" id="portfolio_img">
                    </div>
                  </div>
                  <?php endforeach; ?>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>