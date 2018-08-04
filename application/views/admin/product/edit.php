<div class="row">
    <div class="col-md-12">
      	<div class="box box-success">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Edit</h3>
				<?php if(isset($Product)):?>
					<a class="btn btn-default" target="_blank" href="<?=get_product_url($Product)?>">view</a>
				<?php endif; ?>
								
            </div>
			<?php echo form_open('admin/product/edit/'.$product['ProductId'],array("enctype"=>"multipart/form-data","id"=>"product_add")); ?>
			<div class="box-body">
			
			<div class="clearfix"></div>
			<div class="col-md-6 pull-right">
						<label for="ProductName" class="control-label">Featured Image</label>
						<div class="form-group">						
							<img src="<?=upload_url().$FeaturedImage->ImagePath?>" class="thumbnail img_100_100 pull-left"  />
							<input type="file" name="Featured" accept="image/*" id="Featured" />							
						</div>
					</div>
					
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="IsDirectAccess" class="control-label">Hidden from Site:</label>
						<div class="form-group">
							<input type="radio" name="IsDirectAccess" value="0" 
							<?php 							
																
									if($product['IsDirectAccess']==0)
									{
										echo "checked";
									}
								
							
							?> > No
							<input type="radio" name="IsDirectAccess" value="1" 
							<?php 
									if($product['IsDirectAccess']=="1")
									{
										echo "checked";
									}								
							?>
							 /> Yes
						</div>
						
						<label for="IsStockAvailable" class="control-label">Available in Stock:</label>
						<div class="form-group">
							<input type="radio" name="IsStockAvailable" value="0" 
							<?php 							
																
									if($product['IsStockAvailable']==0)
									{
										echo "checked";
									}
								
							
							?> > No
							<input type="radio" name="IsStockAvailable" value="1" 
							<?php 
									if($product['IsStockAvailable']=="1")
									{
										echo "checked";
									}								
							?>
							id="IsStockAvailable" /> Yes
						</div>
						
						<label for="IsDraft" class="control-label">Draft</label>
						<div class="form-group">
							<input type="radio" name="IsDraft" value="0" 
							<?php 							
																
									if($product['IsDraft']==0)
									{
										echo "checked";
									}
								
							
							?> > No
							<input type="radio" name="IsDraft" value="1" 
							<?php 
									if($product['IsDraft']=="1")
									{
										echo "checked";
									}								
							?>
							id="IsDraft" /> Yes
						</div>
						
						<label for="isnewthankpage" class="control-label">New Thankyou Page</label>
						<div class="form-group">
							<input type="radio" name="isnewthankpage" value="0" 
							<?php 							
																
									if($product['isnewthankpage']==0)
									{
										echo "checked";
									}
								
							
							?> /> No
							<input type="radio" name="isnewthankpage" value="1" 
							<?php 
									if($product['isnewthankpage']=="1")
									{
										echo "checked";
									}								
							?>
							 /> Yes
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="ProductName" class="control-label">ProductName</label>
						<div class="form-group">
							<input type="text" name="ProductName" data-rule-required value="<?php echo ($this->input->post('ProductName') ? $this->input->post('ProductName') : $product['ProductName']); ?>" class="form-control" id="ProductName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" data-rule-required data-rule-number value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $product['Price']); ?>" class="form-control" id="Price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SalePrice" class="control-label">SalePrice</label>
						<div class="form-group">
							<input type="text" name="SalePrice" data-rule-required data-rule-number value="<?php echo ($this->input->post('SalePrice') ? $this->input->post('SalePrice') : $product['SalePrice']); ?>" class="form-control" id="SalePrice" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SaleStartDate" class="control-label">SaleStartDate</label>
						<div class="form-group">
							<input type="text" name="SaleStartDate" data-rule-required value="<?php echo ($this->input->post('SaleStartDate') ? $this->input->post('SaleStartDate') : $product['SaleStartDate']); ?>" class="has-datepicker form-control" id="SaleStartDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SaleEndDate" class="control-label">SaleEndDate</label>
						<div class="form-group">
							<input type="text" name="SaleEndDate" data-rule-required value="<?php echo ($this->input->post('SaleEndDate') ? $this->input->post('SaleEndDate') : $product['SaleEndDate']); ?>" class="has-datepicker form-control" id="SaleEndDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ProductCatId" class="control-label">Product Category</label>
						<div class="form-group">
						
						<?=form_dropdown("ProductCatId",$ProductCategoryArray,$this->input->post('ProductCatId') ? $this->input->post('ProductCatId') : $product['ProductCatId'],array("class"=>"form-control","data-rule-required"=>"true"));?>													
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="productVariation" class="control-label">Product Variation</label>
						<div class="form-group">
							<textarea name="productVariation" class="form-control" style="height:250px" maxlength="500" id="productVariation" ><?php echo ($this->input->post('productVariation') ? $this->input->post('productVariation') : $product['productVariation']); ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="LongDescription" class="control-label">Long Description</label>
						<div class="form-group">
							<textarea name="LongDescription"  class="form-control" maxlength="5000" id="LongDescription"><?php echo ($this->input->post('LongDescription') ? $this->input->post('LongDescription') : $product['LongDescription']); ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
					<label for="ProductCatId" class="control-label">Product Images</label>
					<div class="clearfix"></div>
					<?php foreach($ProductImages as $img):?>
						<div class="galleryimage-edit pull-left" >
							<a href="javascript:;" id="<?=$img["ProductGalleryId"]?>" title="remove picture"><i class="fa fa-times"></i></a>
							<img src="<?=upload_url().$img["ImagePath"]?>" class="img_65_65" >
						</div>
					<?php endforeach;?>						
						<input type="hidden" name="galleryIdsToRemove" id="galleryIdsToRemove">
						<input type="file" name="ProductImages[]" accept="image/*" class="" id="ProductImages" multiple="multiple" />
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