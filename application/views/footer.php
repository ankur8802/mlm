	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 mb-4 mb-md-0">
					<h2 class="footer-heading">Top Choice Technologies</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>

				<div class="col-md-4 col-lg-4 pl-lg-5 mb-4 mb-md-0">
					<h2 class="footer-heading">Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="#" class="py-2 d-block">Home</a></li>
						<li><a href="#" class="py-2 d-block">About</a></li>
						<li><a href="#" class="py-2 d-block">Sermons</a></li>
						<li><a href="#" class="py-2 d-block">Events</a></li>
						<li><a href="#" class="py-2 d-block">Blog</a></li>
						<li><a href="#" class="py-2 d-block">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-lg-4 mb-4 mb-md-0">
					<h2 class="footer-heading">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">Noida , U.P</span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 xxx xxx xxx x</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@abc.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright">
						Copyright &copy; All rights reserved |  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">topchoicetechnologies.com</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
<script src="https://kit.fontawesome.com/e6726924f5.js"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if($this->session->flashdata('success'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('success');?>", "success"); 
</script>

<?php
}
?>

<?php
if($this->session->flashdata('error'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('error');?>", "error"); 
</script>

<?php
}
?>

<?php
if($this->session->flashdata('warning'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('warning');?>", "warning"); 
</script>

<?php
}
?>