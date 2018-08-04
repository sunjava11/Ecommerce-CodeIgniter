<div class="print">

<h1><?php if(isset($_GET["filter"]))
{
	echo $_GET["filter"]." Payments";
}
	?></h1>
<div class="filters" style="text-align:center">
	<?php foreach($_GET as $key=>$val):?>
		<?php if($val):?>
		<?=$key?>: <?=$val?>
		<?php endif;?>
	<?php endforeach;?>
</div>
<?=form_open("admin/report/tcspaymentdetail",array("class"=>"form form-inline hidden-print pull-left","method"=>"get"))?>
 
 Booking From; <input type="text" class="has-datepicker" name="fromDate">
 Booking To: <input type="text" class="has-datepicker" name="toDate">
 
 Payment:
 <select name="filter" required class="form-control" >	
	<option value="complete">Complete</option>
	<option value="unpaid">Un Paid</option>
 </select>
 
 Delivery Status:
 <select name="deliveryStatus" class="form-control" >	
	<option value="">select</option>
	<option value="Delivered">Delivered</option>
	<option value="Return To Origin">Return To Origin</option>
	<option value="InProcess">InProcess</option>
	<option value="Return To Shipper">Return To Shipper</option>	
 </select>
 
 Sort By:
 <select name="sort" required class="form-control" >
	<option value="BookingDateAsc">Booking Date (Lower to High)</option>
	<option value="BookingDateDesc">Booking Date (High to Lower)</option>
	
 </select>
 

<input type="submit" value="Get Report" class="btn btn-primary">

<?=form_close();?>

<a href="#" onclick="window.print()" class="btn btn-primary hidden-print pull-right btn-xs" title="Print"><i class="fa fa-print"></i></a>

<table class="table table-striped table-responsive">
<tr>
	<th>Sr #</th>
	<th>CN Number</th>
	<th>Booking Date</th>
	<th>COD Amount</th>
	<th>COD Amount Period</th>
	<th>Shipping Charges</th>
	<th>Shipping Charges Period</th>
	<th>Delivery Status</th>
</tr>

<?php
$sr=1;
 if($allrecords):?>
<?php foreach($allrecords as $row):?>
<tr>
	<td><?=$sr?></td>
	<td><?=$row->CNNumber?></td>
	<td><?=date("d-m-Y",strtotime($row->BookingDate))?></td>
	<td><?=$row->CODAmount?></td>
	<td><?=$row->CODAmountPeriod?></td>
	<td><?=$row->ShippingCharges?></td>
	<td><?=$row->ShippingChargesPeriod?></td>
	<td><?=$row->DeliveryStatus?></td>
	
</tr>	
<?php $sr++;?>
<?php endforeach;?>

<?php endif;?>
</table>

</div>