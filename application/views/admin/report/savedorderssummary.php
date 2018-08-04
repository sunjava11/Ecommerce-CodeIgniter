<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Saved Orders Summary</h3>            	
            </div>
            <div class="box-body">			
			
			<?php $sr=1?>
                <table class="table table-striped table-responsive">
                    <tr>
						<th>Sr #</th>
						<th>Generated Date</th>
						<th>Action</th>						
                    </tr>
                    <?php foreach($result as $row){ ?>
                    <tr>
						<td><?=$sr?></td>
						<td><?=date("d-M-Y h:i a",strtotime($row->CreatedDate))?></td>
						<td><a href="<?=site_url("admin/report/viewsavedordersummary/".$row->OrderStatusSummaryId."");?>" target="_blank">View</a></td>						
                    </tr>
					
					<?php $sr++?>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
