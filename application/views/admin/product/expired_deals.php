<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Expired Product</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/product/index'); ?>" class="btn btn-success btn-sm">All Products</a> 
					<a href="<?php echo site_url('admin/product/reschedule'); ?>" class="btn btn-info btn-sm">Reschedule Products</a> 
                </div>
            </div>
			<?php $sr=1;?>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>					
						<th>Sr #</th>
						<th>Product Name</th>
						<th>Featured Image</th>
						<th>Price</th>
						<th>Sale Price</th>
						<th>Sale Start</th>
						<th>Sale End</th>
						<th>Product Category</th>
						<th>Created Date</th>
						<th>Actions</th>
                    </tr>
					
                    <?php foreach($products as $p){ ?>
                    <tr 
					<?php
						if($p["IsStockAvailable"]=="0")
						{
							echo "style='background:#fed3d7'";
						}
					?>
					>
						<td><?php echo $sr ?></td>
						<td><a href="<?=site_url("Product")?>/preview/<?=$p["ProductId"]?>" target="_blank" title="View Product"><?php echo $p['ProductName']; ?></a></td>
						<td><img src="<?php echo upload_url().get_thumbnail($p['Featured']); ?>" class="img_65_65 thumbnail"></td>
						<td><?php echo $p['Price']; ?></td>
						<td><?php echo $p['SalePrice']; ?></td>
						<td><?php echo $p['SaleStartDate']; ?></td>
						<td><?php echo $p['SaleEndDate']; ?></td>
						<td><?php echo $p['ProductCatName']; ?></td>
						<td><?php echo $p['CreatedDate']; ?></td>
						<td>
                            
                        </td>
                    </tr>
					
                    <?php $sr++; } ?>
                </table>                
            </div>
        </div>
    </div>
</div>
