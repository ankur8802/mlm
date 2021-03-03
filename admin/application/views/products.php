<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add | Edit | Delete Products</title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
          <h1 class="h3 mb-2 text-gray-800"> Add | Edit | Delete Products </h1>
           
         <form action="<?= base_url('Products/insertproduct')?>" method="post" enctype="multipart/form-data">
            <div class="row form-group">

               <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product category </label>
                <select name="category" class="form-control" required>
                      <option value="">Choose Category</option>
                <?php 
                   foreach ($category as $category) {
                ?>
                      <option> <?= $category->category?> </option>

                <?php } ?>

                </select>
              </div>

              <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product Name </label>
                <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name..." required>
              </div>

              <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product Image <small style="color:red;">Width:- 600px , Height:- 700px </small> </label>
                <input type="file" name="product_image" class="form-control" required>
              </div>



              <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product Quantity </label>
                 <input type="number" name="product_quantity" min="1" class="form-control" placeholder="Enter Products Quantity..." required>
              </div>

              <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product Price </label>
                <input type="number" min="0" name="product_price" class="form-control" placeholder="Enter Product Price..." required>
              </div>

              <div class="col-md-6" style="margin-bottom:20px;">
                <label> Product Business Volume </label>
                <input type="number" min="0" name="product_bv" class="form-control" placeholder="Enter Business Volume..." required>
              </div>
 
              <div class="col-md-12" style="margin-bottom:20px;">
                <label> Product Description </label>
                 <textarea name="product_description" id="description" class="form-control" required></textarea>
              </div>

              

              <div class="col-md-12 text-center" style="margin-top:20px;">
                <button type="sumbit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </form>          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="products" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Product Category</th>
                      <th>Product Name</th>
                      <th>Product Quantity</th>
                      <th>Product Image</th>
                      <th>Product Description</th>
                      <th>Product Price</th>
                      <th>Product BV</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S No.</th>
                      <th>Product Category</th>
                      <th>Product Name</th>
                      <th>Product Quantity</th>
                      <th>Product Image</th>
                      <th>Product Description</th>
                      <th>Product Price</th>
                      <th>Product BV</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                <?php
                $i=1;
                 foreach ($products as $key) {
                ?>
                   <tr>
                   	  <td><?= $i;?></td>
                      <td><?= $key->category?></td>
                      <td><?= $key->product_name?></td>
                      <td><?= $key->product_quantity?></td>
                      <td>
<button class="btn btn-primary" data-toggle="modal" data-target="#productsimage<?= $i?>">View</button>

<!-- Modal -->
<div class="modal fade" id="productsimage<?= $i?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="<?= base_url('../')?>uploads/products/<?= $key->product_image?>" alt=".." style="width:100%;">
      </div>
      <div class="modal-footer" style="display:block;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                      </td>

                      <td>
<button class="btn btn-primary" data-toggle="modal" data-target="#productsdesc<?= $i?>">View</button>

<!-- Modal -->
<div class="modal fade" id="productsdesc<?= $i?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <?= $key->product_description;?>
      </div>
      <div class="modal-footer" style="display:block;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                                          </td>
                      <td><?= $key->product_price?></td>
                      <td><?= $key->product_bv?></td>               
                      <td><?= $key->date?></td>
                      <td><?= $key->time?></td>
                      <td style="min-width:200px;">
                        <a href="<?= base_url("Products/deleteproducts/$key->id")?>"> <i class="far fa-trash-alt" style="color:red;font-size:25px;"></i> </a>
                        <a href="#"  data-toggle="modal" data-target="#productsquentity<?= $key->id?>"> <i class="fab fa-quora" style="color:blue;font-size:25px;margin-left:10px;"></i></a>

                        <a href="#" data-toggle="modal" data-target="#editproduct<?= $key->id?>"><i class="fas fa-edit" style="color:green;font-size:25px;margin-left:10px;"></i></a>

<!-- Update Quantity  -->
<!-- Modal -->
<div class="modal fade" id="productsquentity<?= $key->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="<?= base_url('Products/addquantity')?>" method="post" class="form-group">
          <label>Add Quantity</label>
          <input type="hidden" name="id" value="<?= $key->id?>">
          <input type="number" min="0" name="product_quantity" class="form-control">
          <br>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer text-center" style="display:block;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Update Quantity  -->

<!-- Edit PRoduct -->
<div class="modal fade" id="editproduct<?= $key->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="<?= base_url("Products/editproduct/$key->id")?>" method="post" class="form-group">
           <div class="row form-group">


              <div class="col-md-12" style="margin-bottom:20px;">
                <input type="text" name="product_name" value="<?= $key->product_name?>" class="form-control" placeholder="Enter Product Name..." required>
              </div>


              <div class="col-md-12" style="margin-bottom:20px;">
                <input type="number" min="0" name="product_price" value="<?= $key->product_price?>" class="form-control" placeholder="Enter Product Price..." required>
              </div>

              <div class="col-md-12" style="margin-bottom:20px;">
                <input type="number" min="0" name="product_bv" value="<?= $key->product_bv?>" class="form-control" placeholder="Enter Business Volume..." required>
              </div>
 
              <div class="col-md-12" style="margin-bottom:20px;">
                <label> Product Description </label>
                 <textarea name="product_description" id="editdescription<?= $key->id?>" class="form-control" required><?= $key->product_description?></textarea>
              </div>

              

              <div class="col-md-12 text-center" style="margin-top:20px;">
                <button type="sumbit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer text-center" style="display:block;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit PRoduct -->

                      </td>
                   </tr>

                  <?php $i++; } ?>


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

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

<script>
$(document).ready(function() {
    $('#products').DataTable({
      dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
    });
} );
</script>

<script>
     CKEDITOR.replace( 'description' );
</script>
<?php
   foreach ($products2 as $key2) {
?>
<script>
     CKEDITOR.replace( 'editdescription<?= $key2->id?>' );
</script>
<?php
}
?>
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