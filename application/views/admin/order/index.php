<?php $active="";?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Orders Listing</h3>
            	<div class="box-tools">
                    <a  href="<?php echo site_url('admin/order/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
			
			<div class="" style="margin-bottom:10px">
			<a href="<?=site_url("admin/order/index?orderstatusid=all")?>" class="btn btn-sm btn-default">All <span class='badge'><?=$allOrderCount?></a>
						<?php foreach($OrderStatusCount as $status):?>
						
							<?php
							if(isset($_GET["orderstatusid"])):
								
								if($_GET["orderstatusid"]==$status->OrderStatusId)
								{
									$active="active";
								}
								else{
									$active="";
								}
								endif;
							?>
						
							<a href="<?=site_url("admin/order/index?orderstatusid=".$status->OrderStatusId."")?>" 
							class="btn btn-sm btn-default <?=$active ?> "><?=$status->OrderStatus?> <span class="badge"><?=$status->OrderStatusCount?></span></a>							
						<?php endforeach;?>
			</div>
			
			
			<div class=" pull-left">
				Move Orders:
				<?=form_open("admin/Order/UpdateOrderStatus",array("id"=>"updateOrderStatus","class"=>"form form-inline"));?>
					<div class="form-group">
					
					<select class="form-control col-md-3" name="OrderStatus">
						<?php foreach($OrderStatusCount as $status):?>
							<option value="<?=$status->OrderStatusId?>"><?=$status->OrderStatus?></option>
						<?php endforeach;?>
					</select>
					</div>
					<div class="form-group">
					<input type="hidden" name="orderIdsToMove" id="orderIdsToMove">
					<input type="hidden" name="exsistingOrderStatusId" value="<?=$_GET["orderstatusid"]?>">
					<input class="btn btn-primary" type="submit" value="Move">
					</div>
				<?=form_close();?>
			</div>
			
			<div class=" pull-left" style="margin-left:10px">
				Print Orders:
				<?=form_open("admin/Order/PrintOrders",array("id"=>"printOrders","class"=>"form form-inline"));?>
					<div class="form-group">
					
					<select class="form-control col-md-3" name="OrderStatus">
						<?php foreach($OrderStatusCount as $status):?>
							<option value="<?=$status->OrderStatusId?>"
							<?php
								if(isset($_GET["orderstatusid"]))
								{
									if($_GET["orderstatusid"]==$status->OrderStatusId)
									{
										echo "selected";
									}
								}
							?>
							><?=$status->OrderStatus?></option>
						<?php endforeach;?>
					</select>
					</div>
					<div class="form-group">
					<input type="checkbox" name="optIsSummary" value="1"> Is Summary					
					<input type="hidden" name="orderIdsToPrint" id="orderIdsToPrint">
					<input class="btn btn-primary" type="submit" value="Print Label">
					</div>
				<?=form_close();?>
			</div>
			
			
			
			<div class=" pull-right">
				Search Orders:
				<?=form_open("admin/Order/Index",array("class"=>"form form-inline","method"=>"get"));?>
					<div class="form-group">					
					<input type="text" name="s" class="form-control" value="<?=isset($_GET["s"])?$_GET["s"]:""?>">
					<input type="hidden" name="orderstatusid" value="<?=isset($_GET["orderstatusid"])?$_GET["orderstatusid"]:"";?>">
					</div>
					<div class="form-group">					
					<input class="btn btn-primary" type="submit" value="Search">
					</div>
				<?=form_close();?>
			</div>
			<div class="">
                <table class="table table-striped table-responsive">
                    <tr>
						<th><input type="checkbox" id="checkAllOrders"> </th>
						<th>Order #</th>
						<th>Order Date</th>
						<th>Order Status</th>
						<th>Order Notes</th>
						<th>Product Name</th>
						<th>Customer Name</th>						
						<th>Cell1 / Cell2</th>						
						<th>Address</th>						
						<th>Total COD Amount</th>
						
						
                    </tr>
                    <?php foreach($orders as $o){ ?>
                    <tr>
						<td><input type="checkbox" id="<?php echo $o['OrderId']; ?>" class="chkMoveOrder"> </td>
						<td><a href="<?php echo site_url('admin/order/edit/'.$o['OrderId']); ?>" >
						<?php echo $o['OrderId']; ?></a>
						<?php if ($o['isnewthankpage']==1):?>
						<label class="label label-info">new thankyou page</label>
						<?php endif;?>
						</td>
						<td><?php echo date("d-m-y g:i A",strtotime($o['OrderDate'])); ?></td>
						<td><?php echo $o['OrderStatus']; ?>
						<a href="javascript:;" id="<?=$o["OrderId"]?>" class="ordernotes-form" title="Add Order Comments">
							<i class="fa fa-comments"></i>
						</a>
						<div  style="display:none" id="<?=$o["OrderId"]?>">
							<form class="form form-inline" id="addnoteform_<?=$o["OrderId"]?>" action="<?=site_url("admin/order/addordernotes")?>" method="post">
								<div class="form-group">
									
									<textarea name="OrderNotes" id="OrderNotesId_<?=$o["OrderId"]?>" class="form-control" ><?php echo trim($o["OrderNotes"]); ?></textarea>
									
								</div>
								<div class="form-group">
									
									<input type="hidden" class="ordernote_orderId" name="ordernote_orderId" value="<?=$o["OrderId"]?>">	
									<input type="button" class="OrderNoteSubmitButton btn btn-sm" value="Add Comments" >
									<div id="OrderNoteMessage_<?=$o["OrderId"]?>"></div>
								</div>
							</form>
						</div>						
						</td>
						<td>
						<?php echo trim($o["OrderNotes"]); ?>
						</td>
						<td><?php echo $o['ProductName']; ?>
							<?php 
									if($o["ProductVariation"])
									{
										$array = json_decode($o["ProductVariation"]);
										
										if($array)
										{
											foreach($array as $val)
											{
												echo "<strong>(".$val.")</strong>";
											}
										}
										
									}
								
							?>
						</td>
						<td><?php echo $o['CustomerName']; ?></td>
						<td><?php echo $o['Cell1']; ?> / <?php echo $o['Cell2']; ?></td>
						<td><?php echo $o['ShippingAddress']; ?>, <?php echo $o['City']; ?></td>
						<td><?php echo amount_format($o['TotalCOD']); ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
				</div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
