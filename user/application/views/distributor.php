<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Distributor</title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
 
 <style>
  .dt-button
  {
    padding:10px;
    margin:10px;
    color:#fff;
    background:#000;
    border-radius:16px;
  }
  .dt-button:hover
  {
    color:#fff;
    text-decoration:none;
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
          <h1 class="h3 mb-2 text-gray-800">My Distributor</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="distri" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Distributor Id</th>
                      <th>Name</th>
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
                      <th>Name</th>
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
                     foreach ($distributor as $key) {
                    ?>

                    <tr>
                      <td><?= $i;?></td>
                      <td>
                        <a id="demo<?= $i?>" class='text-decoration-none' href="#animatedModal<?= $i?>"><?= $key->your_sponsor_id;?></a>

    <!--DEMO01-->
    <div id="animatedModal<?= $i?>">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
        <div class="close-animatedModal<?= $i?>"> 
            <center> <img class="m-3" src="https://joaopereirawd.github.io/animatedModal.js/img/closebt.svg" alt="Close" style="cursor:pointer;"> </center>
        </div>
            
        <div class="modal-content" style="background:#3ABEB9;border:none;">

                 <div class="container">
                   <table class="table table-bordered text-center bg-white" id="subids<?= $i?>" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Sub Distributor Id</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S No.</th>
                      <th>Sub Distributor Id</th>
                      <th>Name</th>
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
                      <td><?= $fetchsubdistributor->name?></td>
                    </tr>
              <?php
              $k++;
               }
              ?>

                  </tbody>
                </table>
                 </div>

        </div>
    </div>



                      </td>
                      <td><?= $key->name;?></td>
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
<script src="https://joaopereirawd.github.io/animatedModal.js/js/animatedModal.min.js"></script>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://joaopereirawd.github.io/animatedModal.js/js/animatedModal.min.js"></script>

<?php
$i=1;
 foreach ($distributor as $key) {
?>

<script>
  $("#demo<?= $i?>").animatedModal(
    {
      animatedIn:'fadeInRightBig',
      animationDuration:'1s',
    });
</script>

<script>
$(document).ready(function() {
    $('#subids<?= $i?>').DataTable({
      dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
    });
} );
</script>


<?php $i++; }?>

<script>
$(document).ready(function() {
    $('#distri').DataTable({
      dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
    });
} );
</script>
</body>

</html>
