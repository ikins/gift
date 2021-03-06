<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Subscribe Edit
          <small>Edit Subscriber</small>
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
                <?php echo form_open('cood-admin/subscribe-edit-post'); ?>
                  <?php foreach($subscribe as $rows) : ?>
                  <input type="hidden" name="subscribe_id" value="<?php echo $rows->subscribe_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="text" name="subscribe_email" class="form-control" placeholder="Email" value="<?php echo $rows->subscribe_email; ?>">
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