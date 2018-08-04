Consignee Name,Consignee Address,Consignee Mobile Number,Consignee Email,Destination City,Pieces,Weight,COD Amount,Customer Reference Number,Special Handling,Service Type,Product Details,Remarks
<?php if(isset($queryData)){?>
	<?php foreach($queryData as $row):?>
	<?=str_replace(","," ",$row->FirstName)?> <?=str_replace(","," ",$row->LastName)?>(<?=$row->cell1?>),<?=str_replace(","," ",$row->ShippingAddress)?>,<?=$row->cell2?>,<?=$row->email?>,<?=$row->city?>,1,0.5,<?=$row->TotalCOD?>,bkey-<?=$row->OrderId?>,Yes,O,<?=str_replace(","," ",$row->productname)?>,Please Call Before Delivery<?php echo "\n"?>
	<?php endforeach;?>
<?php }?>