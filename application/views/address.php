<!DOCTYPE html>
<html lang="en">
<head>

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
  

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url()?>assets/images/bg_1.jpg');max-height:200px;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
     </div>
   </div>
 </div>
</section>


<section style="padding:50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
         <button class="btn btn-success" data-toggle="modal" data-target="#addaddress" style="margin-top:15%;"> <i class="fas fa-plus-circle"></i> Add New Address</button>

<style>
  .form-control
  {
    height:auto;
  }
  .inner-col-md-4 
  {
    border:1px solid #000;
    border-radius:16px 16px 0px 0px;
    padding:20px;
    margin:10px;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="addaddress" tabindex="-1" aria-labelledby="addaddressLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body form-group">
          
          <form action="<?= base_url('Welcome/insertaddress')?>" method="post">

             <h2 class="text-center">Address Detail</h2>

           <input type="text" class="form-control" name="name" placeholder="Enter Name..." required>
           <br>
           <input type="text" class="form-control" pattern="[6-9]{1}[0-9]{9}" maxlength="10" minlength="10" name="contact" placeholder="Enter Contact No..." required>
           <br>
           <input type="text" class="form-control" name="address" placeholder="Enter Address..." required>
           <br>
           <input type="text" class="form-control" name="lankmark" placeholder="Enter Lankmark..." required>
           <br>
           <input type="text" class="form-control" name="state" placeholder="Enter State..." required>
           <br>
           <input type="text" class="form-control" name="city" placeholder="Enter City..." required>
           <br>
           <input type="text" class="form-control" name="pincode" placeholder="Enter Pin Code..." required>
           <br>
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </form>

      </div>

    </div>
  </div>
</div>

      </div>

  <?php
     foreach ($address as $key) {
  ?>
   <div class="col-md-4">
       <div class="inner-col-md-4" style="margin-bottom:0;">
         <p style="margin:0;"><?= $key->name?></p>
         <p style="margin:0;"><?= $key->contact?></p> 
         <p style="margin:0;"><?= $key->address?> , <?= $key->lankmark?> , <?= $key->city?> , <?= $key->state?> , Pin Code - <?= $key->pincode?></p>
       </div>

          <button class="btn btn-primary selectaddress" data-id="<?= $key->id?>" style="margin:0px 10px 0px 10px;border-radius:0;width:95%;">Select This Address</button> 
   </div>

   <?php
 }
 ?>

<div class="col-md-12 text-right">
    <br>
    <a href="<?= base_url('Welcome/cartpreview')?>"> <button class="btn btn-success process" style="display:none;">Process To Pay</button> </a>
</div>

    </div>
  </div>
</section>


<?php include('footer.php');?>


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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url()?>assets/js/google-map.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('.selectaddress').click(function()
    {
      $('.process').show();
      $('.inner-col-md-4').css('background','none');
      $('.inner-col-md-4').css('color','#000');
      $(this).prev().css('background','green');
      $(this).prev().css('color','#fff');
    })
</script>
<script>
  $('.selectaddress').click(function()
  {
    var id=$(this).data('id');

          $.ajax({
           url: "<?= base_url("Welcome/selectaddress")?>",
           type: "POST",
           data: ({ id:id }),
        success: function (response) {
          // alert(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           // alert(errorThrown);
        }
    });

  })
        
</script>

</body>
</html>