<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<?php include("static/header.html") ?>\
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
	<?php
	$page = "apply";
	include("static/navigation.php") ?>
	<!--Start TITLE PAGE-->
	<section class="title_page bg_4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2>Apply Now</h2>
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Apply Now</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--End TITLE PAGE-->

	<!-- Start Apply Now Page -->
	<!-- multistep form -->
	<div id="form-wrapper">
		<span>
			<h1 id="apply-title">Funding Application</h1>
		</span>

		<form id="msform">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">Age</li>
				<li> Diabetes type</li>
				<li>Treament type</li>
				<li>Average Fast Glucose</>
				<li>Average postprandial Glucose</>
			</ul>
			<!-- fieldsets -->


			<fieldset>
				<h2 class="fs-title">First Name</h2>
				<input type="name" name="firstname" placeholder="First Name">

				<h2 class="fs-title">Last Name</h2>
				<input type="name" name="lastname" placeholder="Last Name">


				<h2 class="fs-title">Email Address</h2>
				<input type="email" name="email" placeholder="Email">

				<h2 class="fs-title">
					Phone Number
				</h2>
				<input type="number" name="phone-number" placeholder="xxx-xxx-xxxx">

				<h2 class="fs-title">Legal Business Name </h2>
				<!-- <h3 class="fs-subtitle">This is step 1</h3> -->
				<input type="text" name="business-name" placeholder="Business Name">

				<h2 class="fs-title">Doing Business As</h2>
				<input type="text" name="dba" placeholder="Doing Business As">

				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>

			<fieldset>
				<h2 class="fs-title">Type of Business Entity</h2>
				<!-- <h3 class="fs-subtitle">What type of diabetes do you have?</h3> -->
				<select>
					<option value="a">Corporation</option>
					<option value="b">LLC</option>
					<option value="b">LLP</option>
					<option value="b">LP</option>
					<option value="b">Sole Proprietor</option>
				</select>
				</br>
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Treament Type</h2>
				<h3 class="fs-subtitle"></h3>
				<select>
					<option value="a">Insuline</option>
					<option value="b">Oral Treament</option>
				</select>
				</br>
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Average Fast Glucose</h2>
				<h3 class="fs-subtitle"></h3>
				<input type="number" name="quantity" min="30" max="50" placeholder="Average Fast Glucose?">
				</br>
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Details</h2>
				<h3 class="fs-subtitle">HBA1C</h3>
				<input name="name" placeholder="HBAA1C" class="name" required />
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="submit" name="submit" class="submit action-button" value="Calculate" />
			</fieldset>
		</form>
	</div>

	<!-- jQuery -->
	<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<!-- jQuery easing plugin -->
	<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

	<!-- End Apply Now PAGE -->


	<?php include("static/footer.html") ?>

	<script type="text/javascript">
		/* 
Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar 

*/
		//jQuery time
		var current_fs, next_fs, previous_fs; //fieldsets
		var left, opacity, scale; //fieldset properties which we will animate
		var animating; //flag to prevent quick multi-click glitches

		$(".next").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50) + "%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'transform': 'scale(' + scale + ')'
					});
					next_fs.css({
						'left': left,
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".previous").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//de-activate current step on progressbar
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale previous_fs from 80% to 100%
					scale = 0.8 + (1 - now) * 0.2;
					//2. take current_fs to the right(50%) - from 0%
					left = ((1 - now) * 50) + "%";
					//3. increase opacity of previous_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'left': left
					});
					previous_fs.css({
						'transform': 'scale(' + scale + ')',
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".submit").click(function() {
			return false;
		})
	</script>
</body>





</html>