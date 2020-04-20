<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Services Edit
          <small>Edit Services & Featured</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>cood-admin"><i class="fa fa-dashboard"></i> Dashboard</li></a>
          <li><a href="<?php echo base_url(); ?>cood-admin/services">services</a></li>
          <li class="active">services Edit</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body">
                <?php echo form_open('cood-admin/services-edit-post'); ?>
                  <?php foreach($services as $rows) : ?>
                  <input type="hidden" name="services_id" value="<?php echo $rows->services_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nama">Nama</label>
                      <input type="text" name="services_nama" class="form-control" placeholder="Nama" value="<?php echo $rows->services_nama; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Icon">Font Icon</label>
                      <input type="text" name="services_font_icon" class="form-control" placeholder="Font Icon" value="<?php echo $rows->services_font_icon; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Keterangan">Keterangan</label>
                      <textarea name="services_ket" class="form-control" rows="3" placeholder="Keterangan"><?php echo $rows->services_ket; ?></textarea>
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