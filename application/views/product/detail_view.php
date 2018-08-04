<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="product-view">
							<div class="product-essential">
								<div class="row">
									<div class="product-img-box col-sm-5">
										<div class="product-img-box-wrapper">
	                                        <div class="product-img-wrapper">
	                                        	<img class="main-product-gallery-image" id="product-zoom" src="<?=upload_url().$ProductDetail->ProductImages[0]->ImagePath?>" data-zoom-image="<?=upload_url().$ProductDetail->ProductImages[0]->ImagePath?>" alt="Product main image">
	                                        </div>

											<a href="#" class="product-img-zoom" title="Zoom">
												<span class="glyphicon glyphicon-search"></span>
											</a>
										</div>

										<div class="owl-carousel manual" id="productGalleryThumbs">
											<?php foreach($ProductDetail->ProductImages as $image):?>
											
											
											<div class="product-img-wrapper" style="">
												
												
												<a href="#" data-image="<?=upload_url().$image->ImagePath?>" data-zoom-image="<?=upload_url().$image->ImagePath?>" data-orignal="<?=upload_url().$image->ImagePath?>" class="product-gallery-item">
                                                    <img src="<?=upload_url().get_thumbnail($image->ImagePath)?>" alt="product">
                                                </a>
												
											</div>
											<?php endforeach;?>											
										</div>
									</div>

									<div class="product-details-box col-sm-7">										
										<h1 class="product-name">
											<?=$ProductDetail->ProductName?>
										</h1>

										<div class="product-detail-info">
											<div class="product-price-box">
												<span class="product-price"><?=amount_format($ProductDetail->SalePrice)?></span>
												<span class="old-price"><?=amount_format($ProductDetail->Price)?></span>
												
											</div>
											<p class="availability">
												<span class="font-weight-semibold lblAvailablity">Availability:</span>
												<?php if($ProductDetail->IsStockAvailable=="1"): ?>
													<span style="color:#90cc0c">In Stock</span>
												<?php endif;?>
												<?php if($ProductDetail->IsStockAvailable=="0"): ?>
													<span style="color:#222">Not Available</span>
												<?php endif;?>
											</p>											
										</div>
										<div style="clear:both"></div>
										
										<?php if($ProductDetail->IsStockAvailable=="1"): ?>	
										<div class="product-actions">
											<div class="">											
												<div class="timer">												
													<div id="saleCountdown" data-year="<?=date("Y",strtotime($ProductDetail->SaleEndDate))?>" data-month="<?=date("m",strtotime($ProductDetail->SaleEndDate))?>" data-day="<?=date("d",strtotime($ProductDetail->SaleEndDate))?>">													
													</div>
												</div>
											</div>
											
										
											
										<?=form_open("Checkout")?>
										<input type="hidden" name="ProductId" value="<?=$ProductDetail->ProductId?>">
										<input type="hidden" name="ProductName" value="<?=$ProductDetail->ProductName?>">
										<input type="hidden" name="ProductSalePrice" value="<?=$ProductDetail->SalePrice?>">
										<input type="hidden" name="DeliveryCharges" value="<?=get_delivery_charges()?>">
										<input type="hidden" name="TotalCOD" value="<?=$ProductDetail->SalePrice+get_delivery_charges()?>">	

										<?php
											if($ProductDetail->productVariation)
											{
												$variationArray = explode("\n",$ProductDetail->productVariation);
												foreach($variationArray as $variation)
												{
													$variationName = explode(":",$variation);
													
													echo '<div class="form-group"><label style="font-weight:bold;float:left">'.$variationName[0].'</label>';
													echo "<select name='productVariation[]' class='form-control' required>";
													
													$variationValues = explode(",",$variationName[1]);
													echo "<option value=''>select</option>";
													foreach($variationValues as $variationVals)
													{
														echo "<option value='".$variationName[0]."_".$variationVals."'>".$variationVals."</option>";
													}
													
													echo "</select></div>";
												}
											}
										?>

										
										<!--<a href="javascript:;" class="addtocart" style="background:#8fcd08;border:1px solid #8fcd08;width:190px">Buy Now</a>-->
										<input type="submit" class="btn btn-success" style="background:#8fcd08;border:1px solid #8fcd08;width:190px" value="Buy Now" >		
										<?=form_close()?>
										
										
											
											<div class="">
												<div class="delivery-time">
													<i class="fa fa-truck" style="color:#840560"></i> <span>Delivery Time: 2 to 3 days</span>
												</div>
												<div class="delivery-return">
													<i class="fa fa-undo" style="color:#840560"></i> <span>7 days free return</span>
												</div>
												<div class="clearfix"></div>
												<div class="delivery-charges">Delivery Charges Rs<?=$DeliveryCharges?></div>
											</div>
											
											
										</div>
								<?php endif;?>
									</div>
								</div>
							</div>
							<div class="tabs product-tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#product-desc" data-toggle="tab">Description</a>
									</li>									
								</ul>
								<div class="tab-content">
									<div id="product-desc" class="tab-pane active">
										<div class="product-desc-area">
											<?=$ProductDetail->LongDescription?>
										</div>
									</div>									
								</div>
							</div>
						</div>

						
						
						<h2 class="slider-title">
                            <span class="inline-title">Related Products</span>
                            <span class="line"></span>
                        </h2>

                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}">
							<?php if($RelatedProducts):?>
							<?php foreach($RelatedProducts as $product):?>
								<?php $data["Product"]=$product;									 
								?>
								<?php $this->load->view("template/product",$data);?>
							<?php endforeach;?>
							<?php endif;?>
						</div>
					</div>
					
				</div>
			</div>
			
			<!--
			<nav class="navbar navbar-default navbar-fixed-bottom hidden-lg hidden-md hidden-sm">
				
				<ul class="nav mobile-footer-menu">
					<li><a class="btn  big-buy-now" style="background:#90cc0c;color:#fff"  href="javascript:;">Buy Now</a></li>					
				</ul>
				
				</nav>
				-->