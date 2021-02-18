<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>All Members</title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
          <h1 class="h3 mb-2 text-gray-800">All Members</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Distributor Id</th>
                      <th>Password</th>
                      <th>Name</th>
                      <th>Sponsor Id</th>
                      <th>Mobile</th>
                      <th>Package</th>
                      <th>Status</th>
                      <th>Joining Date</th>
                      <th>Activation Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S No.</th>
                      <th>Distributor Id</th>
                      <th>Password</th>
                      <th>Name</th>
                      <th>Sponsor Id</th>
                      <th>Mobile</th>
                      <th>Package</th>
                      <th>Status</th>
                      <th>Joining Date</th>
                      <th>Activation Date</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php
                    $i=1;
                     foreach ($allmembers as $key) {
                    ?>

                    <tr>
                      <td><?= $i;?></td>
                      <td>

                      <a href="#" data-toggle="modal" data-target="#subdistributor<?= $key->your_sponsor_id;?>"><?= $key->your_sponsor_id;?></a>


<!-- Modal -->
<div class="modal fade" id="subdistributor<?= $key->your_sponsor_id;?>" tabindex="-1" aria-labelledby="subdistributorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable<?= $key->your_sponsor_id;?>" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Sub Distributor Id</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S No.</th>
                      <th>Sub Distributor Id</th>
                    </tr>
                  </tfoot>
                  <tbody>
            <?php 
           $fetchsubdist=$this->db->select()
                                  ->from('user')
                                  ->where('under_sponsor_id',$key->your_sponsor_id)
                                  ->get();
                            $fetchsubdistributor=$fetchsubdist->result();
        ?> 
              <?php
                $k=1;
                foreach ($fetchsubdistributor as $fetchsubdistributor) {
              ?>
                    <tr>
                      <td><?= $k;?></td>
                      <td><?= $fetchsubdistributor->your_sponsor_id?></td>
                    </tr>
              <?php
              $k++;
               }
              ?>

                  </tbody>
                </table>
              </div>
      </div>
      <div class="modal-footer" style="display: block;text-align: center;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                      </td>
                      <td><?= $key->password?></td>
                      <td><?= $key->name;?></td>
                      <td><?= $key->under_sponsor_id;?></td>
                      <td><?= $key->mobile;?></td>
                      <td><?= $key->package;?></td>
                      <td>
                      	<?php
                            if($key->status==0)
                            {
                            	echo "<button class='btn btn-danger'>Unpaid</button>";
                            }
                            elseif($key->status==1)
                            {
                            	echo "<button class='btn btn-success'>Paid</button>";
                            }
                      	?>
                      </td>
                      <td><?= $key->joining_date;?></td>
                      <td><?= $key->activationdate;?></td>
                    </tr>
                     <?php $i++; }?>

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
                    
  <?php
      $i=1;
       foreach ($allmembers as $key) {
   ?>

<script>
  $(document).ready( function () {
    $('#dataTable<?= $key->your_sponsor_id;?>').DataTable();
} );
</script>

<?php
}
?>
</body>

</html>
