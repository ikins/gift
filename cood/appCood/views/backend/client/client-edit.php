<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          client Edit
          <small>Edit Client</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>cood-admin"><i class="fa fa-dashboard"></i> Dashboard</li></a>
          <li><a href="<?php echo base_url(); ?>cood-admin/client">client</a></li>
          <li class="active">client Edit</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body">
                <?php echo form_open_multipart('cood-admin/client-edit-post'); ?>
                  <?php foreach($client as $rows) : ?>
                  <input type="hidden" name="client_id" value="<?php echo $rows->client_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nama">Nama</label>
                      <input type="text" name="client_nama" class="form-control" placeholder="Nama" value="<?php echo $rows->client_nama; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Keterangan">Keterangan</label>
                      <textarea name="client_ket" class="form-control" rows="3" placeholder="Keterangan"><?php echo $rows->client_ket; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="file">File Gambar</label>
                      <input type="hidden" name="client_img_old" value="<?php echo $rows->client_img; ?>">
                      <input type="file" name="client_img" id="client_img">
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