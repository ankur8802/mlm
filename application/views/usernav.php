	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 location">
						<span class="fa fa-clock-o mr-2"></span>
						 <script>
							var dt = new Date();
var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
document.write(time);
						</script>
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url()?>">
				<img src="<?= base_url()?>assets/images/logo/1.jfif" alt="logo" style="max-width:200px;max-height: 70px;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url()?>" class="nav-link">Home</a></li>
			        <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Company
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="#">About us</a>
                       <a class="dropdown-item" href="#">Vision & Mission</a>
                       <a class="dropdown-item" href="#">Disclaimer</a>
                     </div>
                    </li>
					<li class="nav-item"><a href="<?= base_url()?>" class="nav-link">Marketing</a></li>
					<li class="nav-item"><a href="<?= base_url()?>" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="<?= base_url()?>" class="nav-link">Download</a></li>
					<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Our Products
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Health-Supplements')?>">Health Supplements</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Essentials')?>">Essentials</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Water-Purifier')?>">Water Purifier</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Air-Purifier')?>">Air Purifier</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Ayurveda')?>">Ayurveda</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Health-Food')?>">Health Food</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Home-Care')?>">Home Care</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Personal-Care')?>">Personal Care</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Natural-Personal-Care')?>">Natural Personal Care</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/category/'.'Women-Hygiene')?>">Women Hygiene</a>
                     </div>
                    </li>
					<li class="nav-item"><a href="<?= base_url()?>" class="nav-link">Contact Us</a></li>
                    <?php
                       $userid=$this->session->userdata('topchoiceuser2020');
                    ?>
					<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?= $this->session->userdata('topchoiceuser2020');?>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="<?= base_url("user/Welcome/loginbyuser/$userid")?>">User Panel</a>
                       <a class="dropdown-item" href="<?= base_url("Welcome/cart/")?>">Cart</a>
                       <a class="dropdown-item" href="<?= base_url('Welcome/logout')?>"> Logout </a>
                     </div>
                    </li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->