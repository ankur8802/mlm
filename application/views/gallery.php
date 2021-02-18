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
								<h1 class="mb-3">Gallery</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container-fluid px-md-0">
			<div class="row no-gutters justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Gallery</span>
					<h2>Galleries</h2>
				</div>
			</div>
			<div class="row no-gutters">
				
				<?php
                     foreach ($gallery as $gallery) {
				?>
				<div class="col-md-3">
					<a href="<?= base_url()?>uploads/gallery/<?= $gallery->image?>" class="image-popup img gallery ftco-animate" style="background-image: url(<?= base_url()?>uploads/gallery/<?= $gallery->image?>);">
						<span class="overlay"></span>
					</a>
				</div>
			   <?php } ?>
				
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