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
								<h2>Welcome To Top Choice Technologies</h2>
								<h1 class="mb-3">Welcome To Top Choice Technologies</h1>
								<p class="mb-4 pb-3">Welcome To Top Choice Technologies</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(<?= base_url()?>assets/images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-8 ftco-animate">
							<div class="text mt-md-5 w-100 text-center">
								<h2>Welcome To Top Choice Technologies</h2>
								<h1 class="mb-3">Welcome To Top Choice Technologies</h1>
								<p class="mb-4 pb-3">Welcome To Top Choice Technologies</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-8 d-flex">
					<div class="row no-gutters">
						<div class="col-md-4">
							<div class="services-2">
								<div class="icon"><span class="flaticon-church"></span></div>
								<div class="text">
									<h4>Worhip</h4>
									<span class="subheading">What to expect</span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-2">
								<div class="icon"><span class="flaticon-pray"></span></div>
								<div class="text">
									<h4>Connect</h4>
									<span class="subheading">Contact Members</span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="services-2">
								<div class="icon"><span class="flaticon-love"></span></div>
								<div class="text">
									<h4>God's Love</h4>
									<span class="subheading">Beliefs and History</span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="services-2 services-block">
						<div class="text">
							<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<style>
	.pro
	{
		box-shadow:0px 16px 32px rgb(0 0 0 / 50%);
		background-color: rgba(64, 63, 62, 0.2);
		border-radius:32px;
		backdrop-filter: blur(37px);
		border: 1px solid rgba(255, 255, 255, 0.2);
		overflow:hidden;
		transition: 1s;

	}
	.addcartbutton 
	{
       box-shadow:0px 15px 35px rgba(0,0,0,0.2)!important;
       border-top:1px solid rgba(0,0,0,0.2);
       border-bottom:1px solid rgba(0,0,0,0.2);
       position:relative;
       transition:1s;
	}
	.addcartbuttonicon 
	{
		padding:8px;
		box-shadow:0px 15px 35px rgba(0,0,0,0.5);
		border-radius:50%;
	}

	.productsname::before
	{
	    content: '';
	    position:absolute;
		top:0; 
		left:0;
		width:0%;
		height:100%;
		background:rgba(196, 67, 34,0.2);
		transition:2s;
	}
	.productsvalue::before
	{
	    content: '';
	    position:absolute;
		top:0; 
		left:0;
		width:0%;
		height:100%;
		background:rgba(13, 49, 194,0.2);
		transition:5s;
	}
	.productsname
	{
      /*background-color:#C44322;*/
      background:rgba(255,255,255,0.2);
      position:relative;
      transition: 1s;
	}
	
	.productsvalue
	{
      /*background-color:#0D31C2;*/
      position:relative;
      background:rgba(0,0,0,0.2);
      transition: 1s;
      
   	}
   	.proimg
   	{
   		transition:1s;
   	}
	.pro:hover .productsname
	{
		background-color:#C44322;
	}
	.pro:hover .productsvalue
	{
		background-color:#0D31C2;
	}
	.pro:hover .addcartbutton
	{
	  letter-spacing:4px;
	}
	.pro:hover .proimg
	{
		transform:scale(1.1);
	}
	.pro:hover .addcartbutton::before
	{
		transform:skew(45deg) translateX(260%);
	}
	.pro:hover .productsname::before
	{
		width:100%;
	}
	.pro:hover .productsvalue::before
	{
		width:100%;
	}

</style>

	<section class="ftco-section ftco-no-pb ftco-no-pt" style="background:#ececec;padding-bottom:60px!important;">
		<div class="container-fluid">
			<div class="row no-gutters justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Products</span>
					<h2>Products</h2>
				</div>
			</div>
            
            <div class="row">
            	<?php
                   foreach ($products as $products) {
            	?>
            	<div class="col-md-3">
            		<div class="pro mb-3">
            			<img class="proimg" src="<?= base_url()?>uploads/products/<?= $products->product_image?>" alt="products" style="width:100%;">
            			<p class="text-center productsname text-uppercase text-white text-weight-bold p-2 mb-0"><?= $products->product_name ?></p>
            			<p class="text-center productsvalue text-uppercase text-white text-weight-bold p-2 mb-2"><?= $products->product_price ?>  &#8377;</p>

            		    <?php
                          if($this->session->userdata('topchoiceuser2020')) { ?>
            		    	 <center>
            		    	 	<?php
                                 $userid=$this->session->userdata('topchoiceuser2020');
                                $checkcart=$this->db->select()
                                          ->where('userid',$userid)
                                          ->where('product_id',$products->id)
                                          ->from('user_cart')
                                          ->get();
                                  $checkcartmain=$checkcart->num_rows();
            		    	 	?>
                                <?php 
                                   if ($checkcartmain!=0) {
                                ?>
            		    	    <button class="btn addcartbutton" style="cursor:not-allowed;color:grey;"> <i class="fas fa-shopping-bag addcartbuttonicon"></i> Added in Cart</button>
                                <?php }
                                  else {
                                ?>
            		    	    <button class="btn addcartproduct addcartbutton" data-product-id="<?= $products->id ?>"><i class="fas fa-cart-plus addcartbuttonicon"></i> Add Cart</button>
            		    	    <?php
            		    	}
            		    	?>
            		    	</center>
            		    <?php }
                           else
                           {
            		     ?>
            		     <a href="<?= base_url('login')?>"> <center> <button class="btn addcartbutton"> <i class="fas fa-cart-plus addcartbuttonicon"></i> Add Cart</button> </center> </a>
            	      	<?php } ?>
            	      	<br>
            		</div>
            	</div>

            <?php }?>

            </div>


           </div>





	</section>

<br>
<br>

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