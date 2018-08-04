<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="clear:both"></div>
<div class="home-slider-area">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3" >
							<div class="owl-carousel owl-theme home-banner-slider" data-plugin-options="{'items':1, 'loop': true,'autoplay':true, 'margin': 5}">
								<div>
									<img class="img-responsive" src="<?=asset_url()?>/img/slides/1.png" alt="Slide">
								</div>
								<div>
									<img class="img-responsive" src="<?=asset_url()?>/img/slides/2.png" alt="Slide">
								</div>
								<div>
									<img class="img-responsive" src="<?=asset_url()?>/img/slides/3.png" alt="Slide">
								</div>
								<div>
									<img class="img-responsive" src="<?=asset_url()?>/img/slides/4.png" alt="Slide">
								</div>
								<div>
									<img class="img-responsive" src="<?=asset_url()?>/img/slides/5.png" alt="Slide">
								</div>
							</div>
						</div>
						<div class="col-md-3 col-md-pull-9">
							<div class="row">
								<div class="col-sm-6 col-md-12">
									<div class="side-custom-menu">
										<h2>
											<i class="fa fa-bars"></i>
											Top Categories
										</h2>

										<ul>										
										<?php foreach($allProductCatList as $val ): ?>										
											<li><a href="<?=get_category_url($val)?>">	<?=$val->CatName; ?></a> </li>
										<?php endforeach;?>										
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="banners-wrapper">
				<div class="container">
					<div class="homepage-bar">
						<div class="row">
							<div class="col-md-4">
								<i class="fa fa-truck bar-icon"></i>
								<div class="bar-textarea">
									<h3>PAYMENT ON DELIVERY</h3>
									<p>Safe and secure payments</p>
								</div>
							</div>
							<div class="col-md-4">
								<i class="fa fa-dollar bar-icon"></i>
								<div class="bar-textarea">
									<h3>MONEY BACK GUARANTEE</h3>
									<p>100% money back guarantee.</p>
								</div>
							</div>
							<div class="col-md-4">
								<i class="fa fa-support bar-icon"></i>
								<div class="bar-textarea">
									<h3>ONLINE SUPPORT 24/7</h3>
									<p>Our experts always available.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="banners-container">
					<div class="container">
						<div class="row">

							<div class="col-sm-3 col-xs-6">
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner1.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner2.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner3.jpg" alt="Banner">
								</a>
							</div>
							<div class="col-sm-3 col-xs-6 col-sm-push-6">
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner7.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner8.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner9.jpg" alt="Banner">
								</a>
							</div>

							<div class="clearfix visible-xs"></div>

							<div class="col-sm-6 col-sm-pull-3">
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner4.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner5.jpg" alt="Banner">
								</a>
								<a href="#" class="banner">
									<img src="<?=asset_url()?>img/demos/shop/banners/shop4/banner6.jpg" alt="Banner">
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>

			

			<div class="container mb-lg">
				<h2 class="slider-title">
                    <span class="inline-title">Latest Products</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme manual new-products-carousel">
					<?php if($LatestProducts):?>
					<?php foreach($LatestProducts as $product):?>
					<?php 
						$data["Product"]=$product;						;
					?>
					<?php $this->load->view("template/product",$data); ?>
					
					<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>

			<div class="container mb-lg">
				<h2 class="slider-title">
                    <span class="inline-title">Latest Products</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme manual new-products-carousel">
					<?php if($LatestProducts2):?>
					<?php foreach($LatestProducts2 as $product):?>
					<?php 
						$data["Product"]=$product;						;
					?>
					<?php $this->load->view("template/product",$data); ?>
					
					<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>

		