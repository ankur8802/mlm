<!DOCTYPE html>
<html lang="en">
<head>
	<title>MLM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
	
	<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/magnific-popup.css">


	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/jquery.timepicker.css">

	<link rel="stylesheet" href="<?= base_url()?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
</head>
<body>

<?php
   if($this->session->userdata('topchoiceuser2020'))
   {
    include('usernav.php');
   }
   else
   {
   	include('navbar.php');
   }
?>
	
	<section class="hero-wrap js-fullheight">
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight" style="background-image:url(<?= base_url()?>assets/images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-8 ftco-animate">
							<div class="text mt-md-5 w-100 text-center">
								<h1 class="mb-3">Contact Us</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Address:</span> 	Noida , U.P</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-secondary d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Phone:</span> <a href="#">+91 xxx xxx xxx x</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-tertiary d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Email:</span> <a href="mailto:info@yoursite.com"> 	info@abc.com </a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-quarternary d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Website</span> <a href="#">topchoice.g2plays.in</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<form action="<?= base_url('Welcome/insertcontactus')?>" method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-info">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(<?= base_url()?>assets/images/about-3.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
<br><br>

<?php include('footer.php');?>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="<?= base_url()?>assets/js/popper.min.js"></script>
		<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.easing.1.3.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.waypoints.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.stellar.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.animateNumber.min.js"></script>
		<script src="<?= base_url()?>assets/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.timepicker.min.js"></script>
		<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url()?>assets/js/scrollax.min.js"></script>
		<script src="<?= base_url()?>assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="<?= base_url()?>assets/js/google-map.js"></script>
		<script src="<?= base_url()?>assets/js/main.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script>
   $(document).ready(function()
   {
   	  $('.addcartproduct').click(function()
  {
    $(this).css({"color": "grey", "cursor": "not-allowed"});
  	var productid=$(this).data("product-id");
  	  $.ajax({
           url: "<?= base_url("Welcome/addcartproduct")?>",
           type: "POST",
           data: ({ productid:productid }),
        success: function (response) {
          // alert(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           // alert(errorThrown);
        }
    });
  });
   })
</script>

	</body>
	</html>