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
';

$counter=0;
foreach($result as $val)
{
    
    if(($counter%3)==0)
    {
        echo "<div class='new-page'></div>";
    }
    
    $orderId = $val->OrderId;?>
    <table>
        <tr>
            <td colspan="2"><h3><?=sitename()?></h3></td>
        </tr>
        <tr>
            <td class="heading">
                Order Id:
            </td>
            <td>
                <?= $orderId ?>
            </td>
        </tr>
        
        <tr>
            <td class="heading">
                Consignee:
            </td>
            <td>
                <?= $val->Consignee ?>
            </td>
        </tr>
        <tr>
            <td class="heading">
                Consignee Address:
            </td>
            <td>
                <?= $val ->ShippingAddress?>
                
            </td>
        </tr>
        <tr>
            <td class="heading">
                Destination:
            </td>
            <td>
                <?= $val->City ?>
            </td>
        </tr>
        <tr>
            <td class="heading">
                Contact No:
            </td>
            <td>
                <?= $val->Cell1?>/<?= $val->Cell2?>
            </td>
        </tr>
        <tr>
            <td class="heading">
                Product:
            </td>
            <td>
               <?= $val->ProductName?>
            </td>
        </tr>
        <tr>
            <td class="heading">
                COD Amount:
            </td>
            <td>
                <?= $val->TotalCOD?>
            </td>
        </tr>
        
        <tr>
            <td class="heading">
                Date:
            </td>
            <td>
                <?= date("d-m-y") ?>
            </td>
        </tr>
        <tr>
        <td><small>Website: www.bazaarkey.com</small></td>
        <td align="right"><small>Phone: 0306-2723394</small></td>
        </tr>
    </table>
      <hr>
<?
    $counter++;
    
}

echo '</div>';