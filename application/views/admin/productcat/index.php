<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Productcat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/productcat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ProductCatId</th>
						<th>CatName</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($productcat as $p){ ?>
                    <tr>
						<td><?php echo $p['ProductCatId']; ?></td>
						<td><?php echo $p['CatName']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/productcat/edit/'.$p['ProductCatId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                         
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
