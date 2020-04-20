<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Setting
          <small>Setting Halaman Pada Website</small>
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
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="info">
                    <tbody>
                    <?php foreach ($setting as $rows) : ?>
                      <tr>
                        <td>Site Name</td>
                        <td><?php echo $rows->setting_site_name; ?></td>
                      </tr>
                      <tr>
                        <td>Logo</td>
                        <td><?php echo $rows->setting_logo; ?> 
                          <span class="pull-right">
                              
                              <?php $attributes = array('class' => 'form-horizontal'); ?>
                              <?php echo form_open('cood-admin/setting-edit-logo', $attributes); ?>
                                <input type="hidden" name="setting_id" value="<?php echo $rows->setting_id; ?>" class="form-control">
                                <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit Logo</button>
                              </form>

                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                            <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('cood-admin/setting-edit', $attributes); ?>
                              <input type="hidden" name="setting_id" value="<?php echo $rows->setting_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</button>
                            </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>