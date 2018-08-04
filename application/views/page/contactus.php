<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<div style="margin-top:20px"></div>
                <div class="section-contact-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">

								<?php if($msg=="1"):?>
								<div class="alert alert-success mt-lg" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
								<?php endif;?>

								<?php if($msg=="0"): ?>
								<div class="alert alert-danger hidden mt-lg" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
								</div>
								<?php endif; ?>

								<h2 class="heading-text-color" style="text-align:left;margin-left:15px">Contact us</h2>
								<form id="contactForm" action="<?=site_url("page/contactus")?>" method="POST" class="form">
									<div class="row">
										<div class="col-sm-12">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Name *</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Email *</label>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
											</div>
										</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Subject</label>
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
											</div>
											</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-12">
											<div class="form-group mb-lg">
												<label>Message *</label>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
											</div>

											<input type="submit" value="Send Message" class="btn btn-primary mb-xlg" data-loading-text="Loading...">
										</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-4">
								<h2 class="heading-text-color" style="text-align:left">The Office</h2>
								<ul class="list-unstyled list-contact">
									<li>
										<i class="fa fa-map-marker"></i> 
										<div><strong>Address:</strong> Canal View, Lahore</div>
										
									</li>
									<li>
										<i class="fa fa-phone"></i> 
										<div><strong>Phone:</strong> 0323-6819373</div>										
									</li>
									<li>
										<i class="fa fa-envelope"></i> 
										<div><strong>Email:</strong> contact@shopnow.pk</div>										
									</li>									
								</ul>
							</div>
							
							<div class="col-md-4">
								<h2 class="heading-text-color" style="text-align:left">Business Days</h2>
								<ul class="list-unstyled list-contact">
									<li>
										<i class="fa fa-clock-o"></i> 
										<div>Monday - Saturday</div>
										
									</li>
									<li>
										<i class="fa fa-clock-o"></i> 
										<div>09:00am - 09:00pm</div>										
									</li>
												
								</ul>
							</div>

							<div class="col-md-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13610.617439153883!2d74.24547297624702!3d31.47869290213232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190230b3f76449%3A0x2eff931d6d2bfeec!2sCanal+View%2C+Lahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1527189484118" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>