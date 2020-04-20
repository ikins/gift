<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Setting Edit
          <small>Edit Setting Halaman</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>/cood-admin"><i class="fa fa-dashboard"></i> Dashboard</li></a>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body">
                <?php echo form_open('cood-admin/setting-edit-post'); ?>
                  <?php foreach($setting as $rows) : ?>
                  <input type="hidden" name="setting_id" value="<?php echo $rows->setting_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="site">Site Name</label>
                      <input type="text" name="setting_site_name" class="form-control" placeholder="Site Name" value="<?php echo $rows->setting_site_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="logo">Logo</label>
                      
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