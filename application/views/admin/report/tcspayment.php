<div class="box box-info hidden-print">

<div class="box-header with-border">
              	<h3 class="box-title">Upload Payment Detail</h3>
            </div>
			
<?php if(isset($error)){echo $error;}?>
<?=form_open("admin/report/uploadtcspayment",array("enctype"=>"multipart/form-data"))?>
 
 <div class="box-body">
 <div class="col-md-6">
						<label class="control-label">Delivery Detail</label>
						<div class="form-group">
							<input name="DeliveryDetails"  class="form-control" type="file">
						</div>
					</div>
					<div class="col-md-6">
						<label class="control-label">Payment Detail</label>
						<div class="form-group">
							<input name="PaymentDetails"  class="form-control" type="file">
						</div>
					</div>
<input type="hidden" name="asdf">
</div>
<div class="box-footer">
<input type="submit" value="upload" class="btn btn-primary">
</div>
<?=form_close();?>
</div>

