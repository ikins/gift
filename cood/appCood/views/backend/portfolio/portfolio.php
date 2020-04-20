<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Portfolio
          <small>Hasil Karya</small>
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
              <div class="box-header">
                <div class="row">
                  <div class="col-md-2">
                      <a href="<?php echo base_url(); ?>cood-admin/portfolio-add" class="btn btn-app">
                        <i class="fa fa-plus"></i> Add
                      </a>
                  </div>
                </div>
              
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="info">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Image</th>
                        <th>#</th>
                        <th>#</th>
                      </tr>
                    </thead> 
                    <tbody>
                    <?php $i=0; foreach ($portfolio as $rows) : $i++; ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rows->portfolio_nama; ?></td>
                        <td><?php echo $rows->portfolio_img; ?></td>
                        <td>
                            <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('cood-admin/portfolio-edit', $attributes); ?>
                              <input type="hidden" name="portfolio_id" value="<?php echo $rows->portfolio_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</button>
                            </form>
                        </td>
                        <td>
                            <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('cood-admin/portfolio-delete', $attributes); ?>
                              <input type="hidden" name="portfolio_id" value="<?php echo $rows->portfolio_id; ?>" class="form-control">
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