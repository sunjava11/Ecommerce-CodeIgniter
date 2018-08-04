<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon" style="display:none">
							<span>Get in Touch</span>
						</div>
						
						<div class="col-md-3">
							<h4>Quick Jump</h4>
							<ul class="links">
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="<?=site_url()?>">Home</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="<?=site_url("page/activedeal")?>">Deals</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="<?=site_url("page/contactus")?>"">Contact Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="<?=site_url("page/aboutus")?>"">About Us</a>
								</li>								
							</ul>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
								<h4>Contact Information</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> Sadar, Karachi</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> 0334-3883726</p></li>
									<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:bazaarkey.com@gmail.com">bazaarkey.com@gmail.com</a></p></li>
									<li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> Mon - Sat / 9:00AM - 9:00PM</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Deals</h4>
							<ul class="features">
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Active Deals</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Expired Deals</a>
								</li>								
							</ul>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Be the First to Know</h4>
								<p class="newsletter-info">Get all the latest information on Events,<br> Sales and Offers. Sign up for newsletter today.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>


								<p>Enter your e-mail Address:</p>
								<form id="newsletterForm" action="#" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit">Submit</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-copyright">
					<div class="container" style="text-align:center">
						
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-instragram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
						
					</div>
				</div>
				
			</footer>
			
		</div>

		<!-- Vendor -->
		<script src="<?=asset_url()?>/vendor/jquery/jquery.min.js"></script>
		<script src="<?=asset_url()?>/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?=asset_url()?>/vendor/jquery.easing/jquery.easing.min.js"></script>		
		<script src="<?=asset_url()?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<script src="<?=asset_url()?>/vendor/jquery.validation/jquery.validation.min.js"></script>
		
		
		<script src="<?=asset_url()?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		
		<script src="<?=asset_url()?>/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?=asset_url()?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?=asset_url()?>/js/theme.js"></script>


		<script src="<?=asset_url()?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>		

				

		<!-- Demo -->
		<script src="<?=asset_url()?>/js/demos/demo-shop-4.js"></script>
		
		<script src="<?=asset_url()?>js/jquery.mb-comingsoon.min.js"></script>
		
		<script src="<?=asset_url()?>js/chosen.jquery.min.js"></script>
		
		<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?=asset_url()?>/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?=asset_url()?>/js/theme.init.js"></script>
		
		
		


	</body>
</html>
