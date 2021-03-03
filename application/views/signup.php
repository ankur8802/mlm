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
<style>

 input:valid{
     box-shadow: 0px 0px 5px 1px green!important;
 }
 input:invalid{
     box-shadow: 0px 0px 5px 1px red!important;
 }

.hideShowPassword-toggle {
  background-color: transparent;
  background-image: url('http://cloudfour.github.io/hideShowPassword/images/wink.png'); /* fallback */
  background-image: url('http://cloudfour.github.io/hideShowPassword/images/wink.svg'), none;
  background-position: 0 center;
  background-repeat: no-repeat;
  border: 2px solid transparent;
  border-radius: 0.25em;
  cursor: pointer;
  font-size: 100%;
  height: 44px;
  margin: 0;
  max-height: 100%;
  padding: 0;
  overflow: 'hidden';
  text-indent: -999em;
  width: 46px;
  -moz-appearance: none;
  -webkit-appearance: none;
}

.hideShowPassword-toggle-hide {
  background-position: -44px center;
}

.hideShowPassword-toggle:hover,
.hideShowPassword-toggle:focus {
  border-color: #0088cc;
  outline: transparent;
}
</style>
</head>
<body>

<?php include('navbar.php'); ?>
	
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url()?>assets/images/bg_1.jpg');max-height:150px;">
		<div class="overlay"></div>

	</section>

	<section class="ftco-section" style="background:linear-gradient(110.24685718007152deg, rgba(245, 167, 128,1) 5.533854166666667%,rgba(241, 43, 92,1) 96.67968749999999%);">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="background:linear-gradient(110.24685718007152deg, rgba(246, 245, 245,1) 5.533854166666667%,rgba(220, 220, 220,1) 96.67968749999999%);border-radius:16px;">
				<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<center><h1>Register</h1></center>
                      <form action="<?= base_url('Welcome/instregistration')?>" class="row form-group" method="post">
                      	     						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="name" pattern="[a-zA-Z-\s]+" class="form-control" placeholder="Name" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="email" name="email" class="form-control" placeholder="Email" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="under_sponsor_id" class="form-control" placeholder="Sponsor Id" required>
						</div> 

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="mobile" pattern="[789][0-9]{9}" maxlength="10" maxlength="10" class="form-control" placeholder="Mobile" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="house" class="form-control" placeholder="House No." required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="street" class="form-control" placeholder="Street No." required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="locality" class="form-control" placeholder="Locality" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="city"  pattern="[a-zA-Z-\s]+" class="form-control" placeholder="City" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<select type="text" name="state" class="form-control" required>
                                   <option value="">Select State</option>                                  
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                            </select>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="pincode" pattern="[0-9]+" class="form-control" placeholder="Pin Code" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
						</div>


						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="pan" pattern="[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}" class="form-control" placeholder="Pan" required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="gst" class="form-control" placeholder="GST No." required>
						</div>

						<div class="col-md-6" style="margin-top:10px;">
							<input type="text" name="dob" class="form-control dob" placeholder="D.O.B" required readonly>
						</div>

						<input type="text" name="source" class="source" value="" style="display:none;">


						<div class="col-md-12 text-center" style="margin-top:20px;">
							<label>
							<input type="radio" name="accept" required>
							I accept the Terms of Use Privacy Policy</label>
						</div>

						<div class="col-md-12 text-center">
							<button class="btn btn-primary">Join</button>
						</div>



                      </form>

                      <div class="newuser text-center" style="padding-bottom:30px;">
                    	<i class="fa fa-user" aria-hidden="true"></i>Already registered 
                    	<a href="<?= base_url('login')?>"> Click Here to Login</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/hideshowpassword/2.2.0/hideShowPassword.min.js"></script>

<script>
$('#password').hidePassword(true);
</script>
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