<div class="row">
    <div class="col-md-12">
		<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title pull-left">Product Purchase Report</h3>				
            </div>
			<?php echo form_open('admin/report/ProductPurchaseReport'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="" class="control-label">From Date</label>
						<div class="form-group">
							<input type="text" name="fromDate" class="form-control has-datepicker" data-rule-required="true" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="" class="control-label">To Date</label>
						<div class="form-group">
							<input type="text" name="toDate"  class="form-control has-datepicker" data-rule-required="true" />
						</div>
					</div>					
					<div class="col-md-6">
						<label for="OrderStatus" class="control-label">OrderStatus</label>
						<div class="form-group">
																			
								<?php 
								
								foreach($all_orderstatus as $value)
								{
									echo '<label><input type="checkbox" name="OrderStatusId[]" value="'.$value->OrderStatusId.'" /> '.$value->OrderStatus.'</label>';
									echo "<br>";
								} 
								?>							
						</div>
					</div>					
				</div>
			</div>
			<div class="box-footer">			
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Download Report
				</button>				
	        </div>				
			<?php echo form_close(); ?>
		</div>
		
		
    </div>
</div>
