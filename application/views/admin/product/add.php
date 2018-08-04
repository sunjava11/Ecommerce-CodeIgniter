<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Add</h3>
				
				
				
            </div>
			
			<?php echo validation_errors(); ?>
			
            <?php echo form_open('admin/product/add',array("enctype"=>"multipart/form-data","id"=>"product_add")); ?>
          	<div class="box-body">
          		<div class="row clearfix">
				<div class="col-md-6">
					<label for="IsDirectAccess" class="control-label">Hidden from Site</label>
						<div class="form-group">
							<input type="radio" name="IsDirectAccess" value="0" 
							checked
							 > No
							<input type="radio" name="IsDirectAccess" value="1" 
							
							 /> Yes
						</div>
				</div>
				<div class="col-md-6">
					<label for="IsDraft" class="control-label">Draft</label>
						<div class="form-group">
							<input type="radio" name="IsDraft" value="0" 
							checked
							 > No
							<input type="radio" name="IsDraft" value="1" 
							
							id="IsDraft" /> Yes
						</div>
				</div>
				<div class="col-md-6">
					<label for="isnewthankpage" class="control-label">New Thankyou Page</label>
						<div class="form-group">
							<input type="radio" name="isnewthankpage" value="0" 
							
							 /> No
							<input type="radio" name="isnewthankpage" value="1" 
							checked
							 /> Yes
						</div>
				</div>
					<div class="col-md-6">
						<label for="ProductName" class="control-label">Product Name</label>
						<div class="form-group">
							<input type="text" name="ProductName" data-rule-required="true" value="<?php echo $this->input->post('ProductName'); ?>" class="form-control" id="ProductName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" data-rule-required="true" data-rule-number="true" value="<?php echo $this->input->post('Price'); ?>" class="form-control" id="Price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SalePrice" class="control-label">Sale Price</label>
						<div class="form-group">
							<input type="text" name="SalePrice" data-rule-required="true" data-rule-number="true" value="<?php echo $this->input->post('SalePrice'); ?>" class="form-control" id="SalePrice" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SaleStartDate" class="control-label">Sale Start Date</label>
						<div class="form-group">
							<input type="text" name="SaleStartDate" data-rule-required="true"  value="<?php echo $this->input->post('SaleStartDate'); ?>" class="has-datepicker form-control" id="SaleStartDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SaleEndDate" class="control-label">Sale End Date</label>
						<div class="form-group">
							<input type="text" name="SaleEndDate" data-rule-required="true"  value="<?php echo $this->input->post('SaleEndDate'); ?>" class="has-datepicker form-control" id="SaleEndDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ProductCatId" class="control-label">Product Cat</label>
						<div class="form-group">
							<?=form_dropdown("ProductCatId",$ProductCategoryArray,$this->input->post('ProductCatId'),array("class"=>"form-control","data-rule-required"=>"true"));?>													
						</div>
					</div>
					<div class="col-md-6">
						<label for="productVariation" class="control-label">Product Variation</label>
						<div class="form-group">
							<textarea name="productVariation" class="form-control" style="height:250px" maxlength="500" id="productVariation" ></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="LongDescription" class="control-label">Long Description</label>
						<div class="form-group">
							<textarea name="LongDescription" class="form-control" style="height:250px" maxlength="5000" id="LongDescription" ></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Featured" class="control-label">Featured Image</label>
						<div class="form-group">
							<input type="file" name="Featured" class="form-control with-preview" accept="image/*" data-rule-required="true"  id="Featured" />
						</div>
					</div>
					<div class="col-md-6">
					</div>
					<div class="col-md-6">
						<label for="ProductImages" class="control-label">Product Images</label>
						<div class="form-group">
							<input type="file" name="ProductImages[]" accept="image/*" data-rule-required="true" class="form-control" id="ProductImages" multiple="multiple" />
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