<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Productgallery Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('productgallery/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ProductGalleryId</th>
						<th>IsFeatured</th>
						<th>ProductId</th>
						<th>ImagePath</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($productgallery as $p){ ?>
                    <tr>
						<td><?php echo $p['ProductGalleryId']; ?></td>
						<td><?php echo $p['IsFeatured']; ?></td>
						<td><?php echo $p['ProductId']; ?></td>
						<td><?php echo $p['ImagePath']; ?></td>
						<td>
                            <a href="<?php echo site_url('productgallery/edit/'.$p['ProductGalleryId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('productgallery/remove/'.$p['ProductGalleryId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
