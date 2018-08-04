			
			<div class="print">
			<h1><?=SiteName()?></h1>
			<h2><?php
				if($orders)
				{
					echo $orders[0]["OrderStatus"]." Orders";
				}
			?></h2>
			<form action="" method="post" class="form form-inline hidden-print" style="text-align:center">
				From: <input type="text" name="fromDate" class="has-datepicker" required>
				To: <input type="text" name="toDate" class="has-datepicker" required>
				Order Status: 
				<select name="orderStatusId" required>
				<?php foreach($OrderStatusList as $orderStatus):?>
				<option value="<?=$orderStatus->OrderStatusId?>"><?=$orderStatus->OrderStatus?></option>
				<?php endforeach;?>
				</select>
				<select name="city" required>
				<?=get_city_dropdown()?>        
				</select>
				<input type="submit" value="Get Report">
			</form>
			
			<a href="#" onclick="window.print()" class="btn btn-primary hidden-print">Print</a>
                <table class="table table-striped table-responsive">
                    <tr>						
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
						
						<td><a href="<?php echo site_url('admin/order/edit/'.$o['OrderId']); ?>" >
						<?php echo $o['OrderId']; ?></a></td>
						<td><?php echo date("d-m-y g:i A",strtotime($o['OrderDate'])); ?></td>
						<td><?php echo $o['OrderStatus']; ?></td>
						<td><?php echo $o['OrderNotes']; ?></td>
						<td><?php echo $o['ProductName']; ?></td>
						<td><?php echo $o['CustomerName']; ?></td>
						<td><?php echo $o['Cell1']; ?> / <?php echo $o['Cell2']; ?></td>
						<td><?php echo $o['ShippingAddress']; ?>, <?php echo $o['City']; ?></td>
						<td><?php echo amount_format($o['TotalCOD']); ?></td>
						
                    </tr>
                    <?php } ?>
                </table>            
				</div>