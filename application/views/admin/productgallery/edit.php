<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Productgallery Edit</h3>
            </div>
			<?php echo form_open('productgallery/edit/'.$productgallery['ProductGalleryId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="IsFeatured" value="1" <?php echo ($productgallery['IsFeatured']==1 ? 'checked="checked"' : ''); ?> id='IsFeatured' />
							<label for="IsFeatured" class="control-label">IsFeatured</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ProductId" class="control-label">Product</label>
						<div class="form-group">
							<select name="ProductId" class="form-control">
								<option value="">select product</option>
								<?php 
								foreach($all_product as $product)
								{
									$selected = ($product['ProductId'] == $productgallery['ProductId']) ? ' selected="selected"' : "";

									echo '<option value="'.$product['ProductId'].'" '.$selected.'>'.$product['ProductId'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ImagePath" class="control-label">ImagePath</label>
						<div class="form-group">
							<input type="text" name="ImagePath" value="<?php echo ($this->input->post('ImagePath') ? $this->input->post('ImagePath') : $productgallery['ImagePath']); ?>" class="form-control" id="ImagePath" />
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