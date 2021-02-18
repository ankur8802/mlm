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
<style>
    .userproduct p
    {
       font-size:18px;
    }

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
input:focus
{
   outline:none;
}
</style>
<section class="text-center userproduct" style="padding:50px 0px;">
     <div class="container">

<?php
     $totalprice=0;
    foreach ($products as $product) {

      $id=$product->product_id;
                 $fetchproducts=$this->db->select()
                          ->from('products')
                          ->where('id',$id)
                          ->get();
                 $productbyid=$fetchproducts->row();
?>
        <div class="row">

          <div class="col-md-3">
               <p><?= $productbyid->product_name?></p>
          </div>

          <div class="col-md-3">
               <p>
                   <?php 
                           $oldtotal=$productbyid->product_price*$product->product_quantity;
                      echo $productbyid->product_price*$product->product_quantity;
                        $totalprice=$oldtotal+$totalprice;
                   ?>
                  
                </p>
          </div>

          <div class="col-md-3">
            <input type="number" class="text-center changequantity" data-id="<?= $product->id?>" data-productid="<?= $productbyid->id?>" value="<?= $product->product_quantity?>" style="border-radius:16px;">
          </div>

           <div class="col-md-3">
               <a href="<?= base_url("Welcome/removecartproduct/$product->id")?>"><i class="fas fa-times-circle" style="font-size:25px;"></i></a>
          </div>

        </div>
<?php
}
?>
     
<div class="checkout" style="padding:50px 20px;background:#FCFCFC;">
         <div class="row">
       <div class="col-md-6"></div>
       <div class="col-md-6 text-right">
          <p style="font-size:15px;color:#ce0f3d;text-transform:uppercase;">Total of product pricing
           <span style="color:#000;padding-left:20px;"><?= $totalprice?></span>
          </p> 

          <p style="font-size:15px;color:#ce0f3d;text-transform:uppercase;">Shipping Charges
           <span style="color:#000;padding-left:60px;">0</span>
          </p>

          <p style="font-size:15px;color:#ce0f3d;text-transform:uppercase;">Total
           <span style="color:#000;padding-left:20px;"><?= $totalprice?></span>
          </p> 

          <a href="<?= base_url("Welcome/processtopay/$totalprice")?>"> <button class="btn btn-success">Process To Pay</button> </a>

       </div>
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
  $('.changequantity').keyup(function()
  {
    var id=$(this).data('id');
    var quantity=$(this).val();
    var productid=$(this).data('productid');
    

    if(quantity>=1)
    {
            $.ajax({
           url: "<?= base_url("Welcome/updatequantity")?>",
           type: "POST",
           data: ({ id:id , quantity:quantity , productid:productid }),
        success: function (response) {
          // alert(response);
          if (response=="ok")
          {
            location.reload();
          }
          else if(response=="max")
          {
             swal("Quantity Not Avaliable", " ",'error');
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           // alert(errorThrown);
        }
    });
    }

  })
</script>


</body>
</html>