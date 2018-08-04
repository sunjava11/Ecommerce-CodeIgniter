<?php
echo '
<style>
.heading{font-weight:bold}
.new-page{page-break-before: always}
h3{margin:0;padding:0;}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script src="'.asset_url().'/js/jQuery.print.js"></script>
<script>
$(document).ready(function(){
    $(".print-page").print();
});
</script>


<div class="print-page">
<table cellpadding="0" cellspacing="0" border="1">
<caption>'.$OrderStatus.' Orders Summary Sheet '.date("d-m-y").'</caption>
<tr>
        <td>Sr</td>
        <td>Conginee Name</td>
        <td>Mobile</td>
        <td>Address</td>
        <td>COD Amount</td>
        <td>Order Id</td>
        <td>Cod Received</td>
    </tr>
';

    $counter=1;
    $totalCOD=0;
foreach($result as $val)
{
    
    if(($counter%4)==0)
    {
        echo "<div class='new-page'></div>";
    }
    
    $orderId = $val->OrderId;?>
    
    <tr>
        <td><?=$counter?></td>
        <td><?= $val->Consignee ?></td>
        <td><?= $val->Cell1?>/<?= $val->Cell2?></td>
        <td><?= $val ->ShippingAddress?></td>
        <td><?= $val->TotalCOD?></td>
        <td><?=$orderId?></td>
        <td></td>
    </tr>
<?php
    $totalCOD=$totalCOD+$val->TotalCOD;
    $counter++;
    
}

echo '
<tr>
    <td colspan="4">Total COD</td>
    <td>'.number_format($totalCOD).'</td>
    <td></td>
    <td></td>
</tr>
</table></div>';