<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Order Add</h3>
            </div>
            <?php echo form_open('admin/order/add',array("id"=>"adminOrderAddFormId")); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-12">
					<div class="form-group col-md-6">
						<label for="ProductId" class="">Product</label>						
							<select name="ProductId" class="form-control chosen-select">
								<option value="">select product</option>
								<?php 
								foreach($all_product as $product)
								{
									$selected = ($product['ProductId'] == $this->input->post('ProductId')) ? ' selected="selected"' : "";

									echo '<option value="'.$product['ProductId'].'" '.$selected.'>'.$product['ProductName'].' (Sale Price:'.$product["SalePrice"].' )</option>';
								} 
								?>
							</select>
						</div>
					
					
					
						<div class="form-group col-md-6">
							<label>First Name *</label>
							<input type="text" name="FirstName" data-rule-required="true" class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							
							<input type="hidden" value=" " name="LastName" >
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Email</label>
							<input type="text" name="Email"  class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							<label>Phone 1 *</label>
							<input type="number" name="Cell1" data-rule-required="true" data-rule-number="true" class="form-control" data-rule-minlength="11" data-rule-maxlength="11">
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Phone 2</label>
							<input type="number" name="Cell2" data-rule-number="true" class="form-control" data-rule-minlength="11" data-rule-maxlength="11">
						</div>
						
						<div class="form-group col-md-6">
							<label>Complete Address *</label>
							<input type="text" name="ShippingAddress" data-rule-required="true" class="form-control">
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Near Most Famous Place</label>
							<input type="text" name="NearMostFamousPlace" class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							<label>City *</label>
							<select class="form-control chosen-select" name="City" data-rule-required="true">
								        <?=get_city_dropdown()?>        
							</select>
						</div>
						</div>

					
					<div class="col-md-6">
						<label for="OrderStatus" class="control-label">OrderStatus</label>
						<div class="form-group">
							<select name="OrderStatusId" class="form-control" data-rule-required="true">
								<option value="">select</option>
								<?php 
								
								foreach($all_orderstatus as $value)
								{
									$selected = ($value->OrderStatusId == $order['OrderStatusId']) ? ' selected="selected"' : "";

									echo '<option value="'.$value->OrderStatusId.'" '.$selected.'>'.$value->OrderStatus.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="CODAmount" class="control-label">CODAmount</label>
						<div class="form-group">
							<input type="text" name="CODAmount" value="<?php echo $this->input->post('CODAmount'); ?>" class="form-control" id="CODAmount" />
							<span class="text-danger"><?php echo form_error('CODAmount');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ShippingCost" class="control-label">ShippingCost</label>
						<div class="form-group">
							<input type="text" name="ShippingCost" value="200" class="form-control" id="ShippingCost" />
							<span class="text-danger"><?php echo form_error('ShippingCost');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>