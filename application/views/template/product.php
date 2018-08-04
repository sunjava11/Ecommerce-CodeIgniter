<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
						<div class="product">
								<a href="<?=get_product_url($Product)?>" title="Product Name" class="product-image">	
	<figure class="product-image-area" style="" >
	
										<img src="<?=upload_url().get_thumbnail($Product->FeaturedImage)?>" alt="<?=$Product->ProductName?>" style="">										
									
								</figure>

</a>								<div class="product-details-area">
									<h2 class="product-name"><a href="<?=get_product_url($Product)?>" title="<?=$Product->ProductName?>"><?=$Product->ProductName?></a></h2>									

									<div class="product-price-box">
										<span class="old-price"><?=amount_format($Product->Price)?></span>
										<span class="product-price"><?=amount_format($Product->SalePrice)?></span>
									</div>

									<div class="product-actions">
										<?=form_open("Checkout")?>
										<input type="hidden" name="ProductId" value="<?=$Product->ProductId?>">
										<input type="hidden" name="ProductName" value="<?=$Product->ProductName?>">
										<input type="hidden" name="ProductSalePrice" value="<?=$Product->SalePrice?>">
										<input type="hidden" name="DeliveryCharges" value="200">
										<input type="hidden" name="TotalCOD" value="<?=$Product->SalePrice+200?>">
										<a href="javascript:;" class="addtocart btn-block">Buy Now</a>
										<?=form_close()?>													
									</div>
								</div>
							</div>
