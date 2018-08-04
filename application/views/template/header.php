<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?=$pagetitle?>-Pakistan's No 1 Online Shop-<?=SiteName()?></title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=asset_url()?>/css/theme.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/theme-blog.css">
		<link rel="stylesheet" href="<?=asset_url()?>/css/theme-shop.css">

		

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=asset_url()?>/css/skins/skin-shop-4.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?=asset_url()?>/css/demos/demo-shop-4.css">
		
		<link rel="stylesheet" href="<?=asset_url()?>/css/mb-comingsoon.css">
		
		<link rel="stylesheet" href="<?=asset_url()?>/css/chosen.min.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=asset_url()?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=asset_url()?>/vendor/modernizr/modernizr.min.js"></script>
		
		

		<?php
		if(isset($fbPixel))
		{
				echo $fbPixel;
		}		
		?>
		
	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 147, 'stickySetTop': '-147px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top visible-lg" style="">
						<div class="container">
							<div class="dropdowns-container">
								<div class="header-dropdown cur-dropdown">
									<a href="#">PKR</a>
								</div>

								<div class="header-dropdown lang-dropdown">
									<a href="#"><img src="<?=asset_url();?>/img/demos/shop/pk.png" alt="All Pakistan">All Pakistan</a>
								</div>

							</div>		
							
							
							<div class="top-menu-area">
								
								<ul class="top-menu">									
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-instragram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
								
								</ul>
							</div>
							
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?=base_url()?>">
										<img alt="Logo"  src="<?=asset_url()?>/img/logos/Shopnow-png-logo.png" height="60">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">
								<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
										<i class="fa fa-bars"></i>
									</a>
									
									<div class="cart-area">
										<div class="custom-block">
											<i class="fa fa-phone"></i>
											<span>(+92)334 3883726</span>											
										</div>
									</div>
									
									<div class="header-search">
										<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
										<?=form_open("page/search",array("method"=>"get"))?>
											<div class="header-search-wrapper">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<select id="cat" name="cat">
													<option value="">All Categories</option>
													<option value="4">Fashion</option>
													<option value="12">- Women</option>
													<option value="13">- Men</option>
													<option value="66">- Jewellery</option>
													<option value="67">- Kids Fashion</option>
													<option value="5">Electronics</option>
													<option value="21">- Smart TVs</option>
													<option value="22">- Cameras</option>
													<option value="63">- Games</option>
													<option value="7">Home &amp; Garden</option>
													<option value="11">Motors</option>
													<option value="31">- Cars and Trucks</option>
													<option value="32">- Motorcycles &amp; Powersports</option>
													<option value="33">- Parts &amp; Accessories</option>
													<option value="34">- Boats</option>
													<option value="57">- Auto Tools &amp; Supplies</option>
                                                </select>
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>

									
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-nav" style="height:35px">
						<div class="container">
						
							<div class="header-nav-main">
								
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a href="<?=base_url()?>">
												Home
											</a>											
										</li>
										
										<li class="dropdown">
											<a class="dropdown-toggle" href="#">
												Deals 
											</a>
											<ul class="dropdown-menu">
												<li class="">
													<a href="<?=site_url("page/activedeal")?>">Active Deals</a>													
												</li>
												<li class="">
													<a href="<?=site_url("page/expiredeal")?>">Expired Deals</a>													
												</li>											
											</ul>
										</li>
										
										
										<li class="">
											<a href="<?=site_url("page/contactus")?>">
												Contact Us
											</a>
										</li>
										<li class="pull-right ">
											<a href="#">
												About Us
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="<?=site_url()?>">Home</a></li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Deals</a>
			
							<ul>
								
									
										<li>
											<a href="<?=site_url("page/activedeal")?>">Active Deals</a>
										</li>
										<li>
											<a href="<?=site_url("page/expiredeal")?>">Expired Deals</a>
										</li>
								
							</ul>
						</li>
						
						<li>
							<a href="<?=site_url("page/contactus")?>">Contact Us</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
			
			