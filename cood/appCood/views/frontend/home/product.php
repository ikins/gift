
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="row">
            <div class="col-md-3">
              Product A

              <?php $attributes = array('class' => 'form-horizontal'); ?>
                <?php echo form_open('product-order', $attributes); ?>
                <input type="hidden" name="product_id" value="1" class="form-control">
                <button type="submit" class="btn btn-xs btn-default"><i class="fa fa-shopping-cart"></i> Order</button>
              </form>

            </div>
            <div class="col-md-3">
              Product B

              <?php $attributes = array('class' => 'form-horizontal'); ?>
                <?php echo form_open('product-order', $attributes); ?>
                <input type="hidden" name="product_id" value="2" class="form-control">
                <button type="submit" class="btn btn-xs btn-default"><i class="fa fa-shopping-cart"></i> Order</button>
              </form>

            </div>
            <div class="col-md-3">
              Product C
            </div>
            <div class="col-md-3">
              Product D
            </div>
          </div>
          
        </div>
        <div class="col-md-4 contact-box-right">
          <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-list"></i> Limited Product </h3>
          </div>
          <div class="box-body pull-left">
            
          </div>
          <div class="box-body">
            
          </div>

        </div>
      </div>
    </div>
  </div>