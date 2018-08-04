<?php $active="";?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contact Us Listing</h3>
            	
            </div>
            <div class="box-body">
			
			
			
			
                <table class="table table-striped table-responsive">
                    <tr>						
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Date</th>												
                    </tr>
                    <?php foreach($allData as $o){ ?>
                    <tr>
						
						
						<td><?php echo $o['name']; ?></td>
						<td><?php echo $o['email']; ?></td>
						<td><?php echo $o['subject']; ?></td>
						<td><?php echo $o['message']; ?></td>
						<td><?php echo date("d-m-y g:i A",strtotime($o['createddate'])); ?></td>						
						
                    </tr>
                    <?php } ?>
                </table>
                    
            </div>
        </div>
    </div>
</div>
