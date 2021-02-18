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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.css">
</head>
<body>

<?php include('navbar.php'); ?>
	
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url()?>assets/images/bg_1.jpg');max-height:150px;">
		<div class="overlay"></div>

	</section>

	<section class="ftco-section" style="background:linear-gradient(110.24685718007152deg, rgba(245, 167, 128,1) 5.533854166666667%,rgba(241, 43, 92,1) 96.67968749999999%);">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background:linear-gradient(110.24685718007152deg, rgba(246, 245, 245,1) 5.533854166666667%,rgba(220, 220, 220,1) 96.67968749999999%);border-radius:16px;">
				<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
				     
				     	<center><h1>Login</h1></center>
                      <form action="<?= base_url('Welcome/checklogin')?>" class="row form-group" method="post">
                      
                      	<div class="col-md-12" style="margin-top:10px;">
							<input type="text" name="your_sponsor_id" class="form-control" placeholder="Enter Your Id" required>
						</div>

						<div class="col-md-12" style="margin-top:10px;">
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						</div>



						<div class="col-md-12 text-center">
							<br>
							<button class="btn btn-primary">Login </button>
						</div>



                      </form>

                    <div class="newuser text-center" style="padding-bottom:30px;">
                    	<i class="fa fa-user" aria-hidden="true"></i> New User? 
                    	<a href="<?= base_url('sign-up')?>">Register Here</a>
                    </div>

	
				</div>
			</div>
		</div>
			</div>
		</div>
	</section>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js"></script>
<script type="text/javascript">
	$('.dob').flatpickr(
          {
    dateFormat: "d-m-Y",
    maxDate: "today"
}
		);
</script>
<script>
	$(document).ready(function()
	{
		var source= $(location).attr('href');
		$('.source').val(source);
	})
</script>

	</body>
	</html>