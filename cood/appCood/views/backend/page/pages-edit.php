<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pages Edit
          <small>Edit Halaman</small>
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
                <?php echo form_open('cood-admin/pages-edit-post'); ?>
                  <?php foreach($pages as $rows) : ?>
                  <input type="hidden" name="pages_id" value="<?php echo $rows->pages_id; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="judulhalaman">Judul</label>
                      <input type="text" name="pages_judul" class="form-control" placeholder="Judul" value="<?php echo $rows->pages_judul; ?>">
                    </div>
                    <div class="form-group">
                      <label for="isihalaman">Isi</label>
                      <textarea name="pages_isi" class="form-control summernote" rows="3" placeholder="Isi Halaman"><?php echo $rows->pages_judul; ?></textarea>
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