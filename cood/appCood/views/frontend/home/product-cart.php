
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <?php echo form_open('product-update-cart'); ?>  
                <table class="table table-striped">

                <tr>
                  <th>QTY</th>
                  <th>Item Description</th>
                  <th style="text-align:right">Item Price</th>
                  <th style="text-align:right">Sub-Total</th>
                  <th></th>
                </tr>

                <?php $i = 1; ?>

                <?php foreach ($this->cart->contents() as $items): ?>

                  <?php echo form_hidden('cart['.$i.'][rowid]', $items['rowid']); ?>
                  <?php echo form_hidden('cart['.$i.'][id]', $items['id']); ?>
                  
                  <?php
                  echo form_hidden('cart['.$i.'][name]', $items['name']);
                  echo form_hidden('cart['.$i.'][price]', $items['price']);
                  echo form_hidden('cart['.$i.'][qty]', $items['qty']);
                  ?>

                  <tr>
                    <td><?php echo form_input(array('name' => 'cart['.$i.'][qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'form-control')); ?></td>
                    <td>
                    <?php echo $items['name']; ?>

                      <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                        <p>
                          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                          <?php endforeach; ?>
                        </p>

                      <?php endif; ?>

                    </td>
                    <td style="text-align:right">Rp<?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:right">Rp<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                    <td align="center">
                    
                    <?php
                    // cancle image.
                    $path = '<i class="fa fa-close"></i>';
                    echo anchor('product-delete-cart/' . $items['rowid'], $path); 
                    ?>
                    
                    </td>
                  </tr>

                <?php $i++; ?>

                <?php endforeach; ?>
                <?php if ($this->cart->total() != 0) : ?>
                <tr>
                  <td colspan="3"></td>
                  <td align="right"><strong>Total</strong></td>
                  <td align="right">Rp<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                </tr>
                <?php endif; ?>

                </table>  
                <?php if ($this->cart->total() != 0) : ?>
                  <input type="hidden" id="url" value="<?php echo base_url();?>">
                  <p><input type="button" class="btn btn-default" value="Bersihkan" id="clrCart">
                  <?php                 
                  $totals = $this->cart->format_number($this->cart->total());
                  if ( $totals != '') : ?>
                    <input type="submit" class="btn btn-default" value="Update">
                    <input type="button" class="btn btn-default" value="Pesan" id="productOrder">
                  <?php endif; ?>
                  </p>
                <?php endif; ?>
              </form>
          
        </div>
        <div class="col-md-4 contact-box-right">
          <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-list"></i> Limited Product</h3>
          </div>
          <div class="box-body pull-left">
            
          </div>
          <div class="box-body">
            
          </div>

        </div>
      </div>
    </div>
  </div>