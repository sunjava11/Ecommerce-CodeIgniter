<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="<?=site_url('admin/product/index')?>"> All Products</a> 
				</h3>
				<div class="small">
				
				<?php
				 if(isset($_GET["filter"]))
				 {
					echo "(";
					echo $_GET["filter"];
					echo ' <a href="'.site_url('admin/product/index').'" title="clear"><i class="fa fa-times"></i></a>)';
				 }
				  ?>
				</div>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/product/add'); ?>" class="btn btn-success btn-sm">Add</a> 
					<a href="<?php echo site_url('admin/product/expired_deals'); ?>" class="btn btn-info btn-sm">Expired Deals</a> 
                </div>
            </div>
            <div class="box-body">
                <div class="pull-left">
				<?php echo form_open("admin/product/index",array("class"=>"form form-inline","method"=>"get")) ?>
					<div class="form-group">						
						<select name="filter" required class="form-control">
							<option value="">select</option>
							<option value="default-thankyou-page">Default Thankyou Page</option>
							<option value="new-thankyou-page">New Thankyou Page</option>
							<option value="direct-access-product">Direct Access Product</option>
						</select>
					</div>
					<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Filter" />
					</div>
				<?php echo form_close();?>
				</div>

				<div class="pull-right">
				<?php echo form_open("admin/product/index",array("class"=>"form form-inline","method"=>"get")) ?>
					<div class="form-group">						
						<input type="text" name="search" value="<?php echo isset($_GET["search"])?$_GET["search"]:"" ?>" required class="form-control" placeholder="search products" />							
					</div>
					<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Search" />
					</div>
				<?php echo form_close();?>
				</div>
				<div style="clear:both"></div>

				
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
					
                    <?php foreach($product as $p){ ?>
                    <tr 
					<?php
						if($p["IsStockAvailable"]=="0")
						{
							echo "style='background:#fed3d7'";
						}
					?>
					>
						<td><?php echo $sr ?></td>
						<td>						
						<a href="<?=site_url("Product")?>/preview/<?=$p["ProductId"]?>" target="_blank" title="View Product"><?php echo $p['ProductName']; ?></a>
						<br />
						<?php 
						if ($p["IsDirectAccess"]==1)
						{
							echo '<span class="label label-success">hidden from site</span>';
						}
						if ($p["isnewthankpage"]==1)
						{
							echo '<span class="label label-info">new thankyou</span>';
						}
						if ($p["isnewthankpage"]==0)
						{
							echo '<span class="label label-default">default thankyou</span>';
						}
						?>

						</td>
						<td>
						
						<img src="<?php echo upload_url().get_thumbnail($p['Featured']); ?>" class="img_65_65 thumbnail"></td>
						<td><?php echo $p['Price']; ?></td>
						<td><?php echo $p['SalePrice']; ?></td>
						<td><?php echo $p['SaleStartDate']; ?></td>
						<td><?php echo $p['SaleEndDate']; ?></td>
						<td><?php echo $p['ProductCatName']; ?></td>
						<td><?php echo $p['CreatedDate']; ?></td>
						<td>
						<a href="<?php echo site_url('admin/product/duplicate/'.$p['ProductId']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-file"></span> Duplicate</a> 
                            <a href="<?php echo site_url('admin/product/edit/'.$p['ProductId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/product/remove/'.$p['ProductId']); ?>" data-confirm="Do you really want to delete?" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
					
                    <?php $sr++; } ?>
                </table>
                <div class="pull-right pagination">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
