<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Gallery </title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">


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
                  Admin
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
          <h1 class="h3 mb-2 text-gray-800"> Gallery</h1>
                 
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('Gallery/galleryinst')?>" method="post" enctype='multipart/form-data'>
                                <div class="row form-group">


                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <label>Gallery Image<!--  <small style="color:red;">Size (Width = 900px and Height = 600px)</small> --></label>
                                    <input type="file" name="image" class="form-control dropify" required>
                                </div>

                                <div class="col-md-12 text-center" style="margin-bottom:10px;">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>

                                </div>
                            </form>



                            <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                             
                                        <?php
                                        $i=1;
                                         foreach ($gallery as $key ) {
                                        ?>
                                         
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td>
                                                    <img src="<?= base_url('../')?>uploads/gallery/<?= $key->image;?>" alt="gallery" style="max-width:100px;max-height: 100px;">
                                                </td>
                                                <td>
                                                     <a href="<?= base_url("gallery/deletegallery/$key->id")?>">   <i class="fas fa-trash-alt"></i>  </a>
                                                </td>
                                            </tr>

                                         <?php $i++; }  ?>
                                        </tbody>
                                    </table>
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


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script type="text/javascript">
    $('.dropify').dropify();
</script>

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

</body>

</html>