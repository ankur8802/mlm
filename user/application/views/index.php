<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://madeas.github.io/box-shadows/css/box-shadows.min.css">
  
<script src="https://kit.fontawesome.com/e6726924f5.js" crossorigin="anonymous"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include('sidenav.php');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background:linear-gradient(111.95647678511193deg, rgba(231, 244, 245,1) 5.533854166666667%,rgba(78, 240, 250,1) 96.67968749999999%);">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-color:#061749!important;">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small">
                  <?= $this->session->userdata('topchoiceuser2020');?>
                </span>
<!--                 <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
 -->              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Welcome/logout')?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">



            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Welcome</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 text-uppercase">
                       <?php
                          $userid=$this->session->userdata('topchoiceuser2020');
                         $output=$this->db->query("select * from user where your_sponsor_id='$userid'");
                         $userdetail=$output->row();
                          echo $userdetail->name;
                        ?>
                       </div>
                       <div class="text-xs font-weight-bold mt-2 text-warning text-uppercase mb-1 ipaddress">Your Ip Address is<br> <i class="fas fa-globe-asia text-success"></i></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Your Joining Date</div>
                      <div class="h5 mb-0 font-weight-bold text-success text-uppercase" style="font-size:15px;">
                       <?php
                          $userid=$this->session->userdata('topchoiceuser2020');
                         $output=$this->db->query("select * from user where your_sponsor_id='$userid'");
                         $userdetail=$output->row();
                          echo $userdetail->joining_date;
                        ?>
                       </div>
                       <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Your Activation Date</div>
                      <div class="h5 mb-0 font-weight-bold text-success text-uppercase" style="font-size:15px;">
                       <?php
                          $userid=$this->session->userdata('topchoiceuser2020');
                         $output=$this->db->query("select * from user where your_sponsor_id='$userid'");
                         $userdetail=$output->row();
                          echo $userdetail->activationdate;
                        ?>
                       </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $balance;?> </div>
                      <?php 
                         if ($balance>0) {
                      ?>

                      <p class="btn bShadow-4h bShadow-3h m-0 mt-2" style="background:linear-gradient(111.95647678511193deg, rgba(248, 198, 215,1) 5.533854166666667%,rgba(175, 233, 249,1) 96.67968749999999%);"><a href="<?= base_url("../")?>" class="text-dark font-weight-bold" style="text-decoration:none;" target="_blank"> Shop Now </a> </p>
                    <?php } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">B V</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $bv;?>  </div>
                      <?php
                          $id=$this->session->userdata('topchoiceuser2020');
                         $result=$this->db->query("select * from bvredeem where your_sponsor_id='$id' and status='0'");
                         $checkrq=$result->num_rows();
                         if ($bv>0 && $checkrq==0) {
                      ?>
                      <p class="btn bShadow-4h bShadow-3h m-0 mt-2" style="background:linear-gradient(111.95647678511193deg, rgba(248, 198, 215,1) 5.533854166666667%,rgba(175, 233, 249,1) 96.67968749999999%);"><a href="<?= base_url("Welcomelogin/redeembv/$bv")?>" class="text-dark font-weight-bold text-decoration-none "> Redeem B.V </a> </p>
                      <?php } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>






          </div>

<style>
  .no-gutters ul li a
  {
    text-decoration:none;
  }
</style>
           <div class="row">
              <div class="col-xl-6 col-md-6 mb-6">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      
                    <ul style="list-style-position:inside;color:red;">
                      <?php
                        if(!$idproof)
                        {
                      ?>
                      <li><a href="<?= base_url('Welcomelogin/kyc')?>" style="color:red;"> ID Proof <i class="fas fa-times-circle"></i>  </a> </li> 
                      <?php }
                       elseif($idproof->status)
                       {
                      ?>
                      <li style="color:green;"> ID Proof <i class="fas fa-check"></i> </li>
                    <?php }?>

                    <?php
                        if(!$pan)
                        {
                      ?>
                      <li><a href="<?= base_url('Welcomelogin/kyc')?>" style="color:red;"> PAN Detail  <i class="fas fa-times-circle"></i>  </a> </li> 
                      <?php }
                       elseif($pan->status)
                       {
                      ?>
                      <li style="color:green;"> PAN Detail  <i class="fas fa-check"></i> </li>
                    <?php }?>

                    <?php
                        if(!$bank)
                        {
                      ?>
                      <li><a href="<?= base_url('Welcomelogin/kyc')?>" style="color:red;"> Bank Detail <i class="fas fa-times-circle"></i>  </a> </li> 
                      <?php }
                       elseif($bank->status)
                       {
                      ?>
                      <li style="color:green;"> Bank Detail <i class="fas fa-check"></i> </li>
                    <?php }?>

                    <?php
                        if(!$electricty)
                        {
                      ?>
                      <li><a href="<?= base_url('Welcomelogin/kyc')?>" style="color:red;"> Electricity Bill  <i class="fas fa-times-circle"></i>  </a> </li> 
                      <?php }
                       elseif($electricty->status)
                       {
                      ?>
                      <li style="color:green;"> Electricity Bill  <i class="fas fa-check"></i> </li>
                    <?php }?>


                    </ul>  

                </div>
              </div>
            </div>
        </div>

          <!-- Content Row -->



</div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white" style="position:fixed;bottom:0;width:100%;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Topchoicetechnologies.com 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url()?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url()?>assets/js/demo/chart-pie-demo.js"></script>



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
    $(".state").val("<?= $myprofile->state?>");
  })
</script>

<script>
  $.getJSON("https://api.ipify.org/?format=json", function(e) {
    var ipass=e.ip;
     $('.ipaddress').append("<span class='text-success'>" + e.ip+ "</span>");
});
</script>
</body>

</html>
