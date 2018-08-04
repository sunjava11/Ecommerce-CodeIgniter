<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Upload Files</h3>
            </div>
            
			<form action="<?php echo site_url('/admin/imageupload/add'); ?>" >
			<?= form_upload(array("name"=>"featured"))?>
			
			</form>
			
		
      	</div>
    </div>
</div>

