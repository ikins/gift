<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contact Us
          <small>List Contact Us</small>
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
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tanggal Publish</th>
                        <th>#</th>
                      </tr>
                    </thead> 
                    <tbody>
                    <?php $i=0; foreach ($contact as $rows) : $i++; ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rows->contact_nama; ?></td>
                        <td><?php echo $rows->contact_date; ?></td>
                        <td>
                            <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('cood-admin/contact-us-delete', $attributes); ?>
                              <input type="hidden" name="contact_id" value="<?php echo $rows->contact_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-trash"></i> Hapus</button>
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