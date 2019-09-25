<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include("static/header.html");?>
</head>
<body>
<?php 
$page = 'industry';
include("static/navigation.php");?>
		<!--Start TITLE PAGE-->
		<section class="title_page bg_3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2>Contact</h2>
						<nav id="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Contact</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!--End TITLE PAGE-->
		
		<!-- Start Contact Page -->
		<section class="content contact_3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						
						<div class="title_content">
							<h3>Contact Info</h3>
						</div>
						<div class="widget_content info">
							<p align="justify">We understand that time is valuable and you may need to ask a quick question to the Capital Source 2000 team, please feel free to fill out the designated form below and your Capital Source 2000 representative will be able to answer any questions that you may have.</p>
							<ul class="widget_info_contact">
								<li><i class="fa fa-user"></i> <p><strong>Phone</strong>(215) - 291 - 7722</p></li>
								<li><i class="fa fa-envelope"></i> <p><strong>Email</strong><a href="mailto:info@capitalsource2000.com">info@capitalsource2000.com</a></p></li>
								<li><i class="fa fa-globe"></i> <p><strong>Web</strong><a href="http://www.capitalsource2000.com/" target="_blank" data-placement="bottom" data-toggle="tooltip" title="www.capitalsource2000.com">www.capitalsource2000.com</a></p></li>
							</ul>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="title_content">
							<h3>Let's keep in touch</h3>
						</div>
						<p align="justify">Capital Source 2000 and their affiliates are in the office Monday thru Friday 9AM- 6PM and 6PM-9PM by appointment. Please feel free to drop in and see us.</p>
							
						<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
						</div>
						
						<div class="alert alert-danger hidden" id="contactError">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error!</strong> <span class="errorMessage">There was an error sending your message.</span>
						</div>
						
						<form id="contactForm" action="contact.php" novalidate class="jogjaContact">
							<div class="row">
								<div class="form-group">
									<div class="col-lg-6 col-md-6 col-sm-6" >
										<input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6" style="margin-top:-33px;">
										<input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:33px;">
								<div class="form-group">
									<div class="col-md-12 col-lg-12 col-sm-12">
										<input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
									</div>
								</div>
							</div>
							<div class="row mrgb_20">
								<div class="form-group">
									<div class="col-md-12 col-lg-12 col-sm-12">
										<textarea id="message" name="message" rows="8" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12 col-sm-12">
									<input type="submit" data-loading-text="Loading..." class="btn btn-primary" value="Send Message">
								</div>
							</div>
						</form>
					</div>
				</div> <!--END ROW-->
			</div>
		</section>
		<!-- End Contact Page -->
<?php include("static/footer.html");?>
</body>
</html>
