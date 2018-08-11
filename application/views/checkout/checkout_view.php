<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php
	$_SESSION["token"]=uniqid();
?>
<div class="container">
				<div class="row">
					<div class="col-md-9">
					<div style="margin-top:50px"></div>
					
					<h3>Shipping Details</h3>
					<?=form_open("Checkout/PlaceOrder",array("class"=>"form","id"=>"checkoutForm"))?>
						<div class="col-md-12">
						<div class="form-group col-md-12">
							<label>First Name *</label>
							<input type="text" name="FirstName" data-rule-required="true" class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							
							<input type="hidden" value=" " name="LastName" >
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Email</label>
							<input type="text" name="Email"  class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							<label>Phone 1 *</label>
							<input type="number" name="Cell1" data-rule-required="true" data-rule-number="true" class="form-control" data-rule-minlength="11" data-rule-maxlength="11">
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Phone 2</label>
							<input type="number" name="Cell2" data-rule-number="true" class="form-control" data-rule-minlength="11" data-rule-maxlength="11">
						</div>
						
						<div class="form-group col-md-6">
							<label>Complete Address *</label>
							<input type="text" name="ShippingAddress" data-rule-required="true" class="form-control">
						</div>
						</div>
						
						<div class="col-md-12">
						<div class="form-group col-md-6">
							<label>Near Most Famous Place</label>
							<input type="text" name="NearMostFamousPlace" class="form-control">
						</div>
						
						<div class="form-group col-md-6">
							<label>City *</label>
							<select class="form-control chosen-select" name="City" data-rule-required="true">
								        <?=get_city_dropdown()?>        
							</select>
						</div>
						</div>

						<h2>Your Order</h2>
						<table class="table table-bordered">
						
							<tr>
								<th>Product</th>
								<th>Total</th>
							</tr>
							<tr>
								<td><?=$ProductName?>
								<?php
									if($productVariation)
									{
										echo "<br>";
										foreach($productVariation as $variation)
										{
											$variationName = explode("_",$variation);
											echo "<strong>".$variationName[0].":</strong>".$variationName[1]."<br>";
											echo "<input type='hidden' name='productVariation[]' value='".$variationName[0].":".$variationName[1]."'>";
										}
									}
								?>
								</td>
								<td><?=amount_format($ProductSalePrice)?></td>
							</tr>
							<tr>
								<td><strong>Sub Total</strong></td>
								<td><?=amount_format($ProductSalePrice)?></td>
							</tr>
							<tr>
								<td><strong>Delivery Charges</strong></td>
								<td><?=amount_format($DeliveryCharges)?></td>
							</tr>
							<tr>
								<td><strong>Total</strong></td>
								<td><strong><?=amount_format($TotalCOD)?></strong></td>
							</tr>
						</table>
						
						<div class="col-md-12">
						<input type="hidden" name="ProductId" value="<?=$ProductId?>" >
						<input type="hidden" name="CODAmount" value="<?=$ProductSalePrice?>" >
						<input type="hidden" name="ShippingCost" value="<?=$DeliveryCharges?>">
						<input type="hidden" name="token" value="<?=$_SESSION["token"]?>" >
						
						<input type="submit" value="Place Order" class="btn btn-block btn-success">
						</div>
						
					<?=form_close()?>
					</div>					
				</div>
			</div>