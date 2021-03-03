<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> KYC </title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<style>
  .upload
  {
    padding:10px;
    box-shadow: 0 1px 10px 5px rgba(0, 0, 0, 0.1);
    margin:10px;
    border-radius:8px;
    min-height:560px;
    background: linear-gradient(180deg,#061749 10%,#030b25 100%);
  }
  .dropify-message p
  {
     font-size:20px;
     color:red;

  }

</style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include('sidenav.php');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>




          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
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
          <h1 class="h3 mb-2 text-gray-800">KYC</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="upload">
                         <div class="upload-pic text-center">
                          <h5>Upload Profile Pic</h5>
                             <form action="<?= base_url('Welcomelogin/uploadpic')?>" method="post" enctype='multipart/form-data'>
                               <input type="file" name="pic" class="profilepic" required>
                               <br>
                               <button type="submit" class="btn btn-primary"> Upload </button>
                             </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="upload">
                         <div class="upload-pic text-center">
                          <h5>Upload ID Proof</h5>
                             <form action="<?= base_url('Welcomelogin/uploadidproof')?>" method="post" enctype='multipart/form-data'>
                               <input type="file" name="id_proof" class="idproof" required>
                               <br>
                               <select name="id_proof_type" class="form-control" required="required">
                                    <option value="" required="">Select ID Proof </option>
                                    <option value="Voter ID Proof">Voter ID Proof </option>
                                    <option value="Passport">Passport</option>
                                    <option value="Smart Card">Smart Card</option>
                                    <option value="Aadhar Card">Aadhar Card</option>
                                    <option value="Driving Licence">Driving Licence</option>
                              </select>

                              <br>

                              <input type="text" name="id_proof_no" required placeholder="Enter ID Proof No" class="form-control">

                               <br>
                               <button type="submit" class="btn btn-primary"> Upload </button>
                             </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="upload">
                         <div class="upload-pic text-center">
                          <h5>Upload PAN Detail</h5>
                             <form action="<?= base_url('Welcomelogin/uploadpancard')?>" method="post" enctype='multipart/form-data'>
                               <input type="file" name="pancard" class="pancard" required>
                               <br>
                               <input type="text" name="pancard_no" class="form-control" required placeholder="Enter Pan Card No.">
                               <br>
                               <button type="submit" class="btn btn-primary"> Upload </button>
                             </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="upload">
                         <div class="upload-pic text-center">
                          <h5>Upload Bank Detail</h5>
                             <form action="<?= base_url('Welcomelogin/uploadbankdetail')?>" method="post" enctype='multipart/form-data'>
                               <input type="file" name="bank" class="bank" required>
                               <br>
                               <input type="text" name="accountholdername" class="form-control" required placeholder="Enter Account Holder Name..">
                               <br>
                               <input type="text" name="bankname" class="form-control" required placeholder="Enter Bank Name..">
                               <br>
                               <input type="text" name="accountno" class="form-control" required placeholder="Enter Bank Account No..">
                               <br>
                               <input type="text" name="ifsc" class="form-control" required placeholder="Enter IFSC Code..">
                               <br>
                               <button type="submit" class="btn btn-primary"> Upload </button>
                             </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="upload">
                         <div class="upload-pic text-center">
                          <h5>Upload Electricity Bill</h5>
                             <form action="<?= base_url('Welcomelogin/uploadelectricitybill')?>" method="post" enctype='multipart/form-data'>
                               <input type="file" name="electricity" class="Electricity" required>
                               <br>
                               <button type="submit" class="btn btn-primary"> Upload </button>
                             </form>
                        </div>
                      </div>
                    </div>


                  </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
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
  <script src="<?= base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url()?>assets/js/demo/datatables-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
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

<script>
  $('.profilepic').dropify({
    messages: {
        'default': 'Select Profile Pic',
        'replace': 'Click To Change Image',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

  $('.idproof').dropify({
    messages: {
        'default': 'Select Id Proof',
        'replace': 'Click To Change Image',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

  $('.pancard').dropify({
    messages: {
        'default': 'Select Pan Card',
        'replace': 'Click To Change Image',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

  $('.bank').dropify({
    messages: {
        'default': 'Select Bank detail',
        'replace': 'Click To Change Image',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

  $('.Electricity').dropify({
    messages: {
        'default': 'Select Electricity Bill',
        'replace': 'Click To Change Image',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
});

  
</script>




</body>

</html>
