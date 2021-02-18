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

   </div>
 </div>
</section>

<section style="padding:50px 0px;">
    <div class="container">
       <div class="row">
         <div class="col-md-8">
  <h2 class="text-center">Order Preview</h2>

    <table class="table table-dark text-center">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
<?php
     $i=1;
     $totalprice=0;
    foreach ($products as $product) {

      $id=$product->product_id;
                 $fetchproducts=$this->db->select()
                          ->from('products')
                          ->where('id',$id)
                          ->get();
                 $productbyid=$fetchproducts->row();
?>

    <tr>
      <th scope="row"><?= $i;?></th>
      <td><?= $productbyid->product_name?></td>
      <td><?php 
                        $oldtotal=$productbyid->product_price*$product->product_quantity;
                      echo $productbyid->product_price*$product->product_quantity;
                        $totalprice=$oldtotal+$totalprice;
                   ?></td>
      <td><?= $product->product_quantity?></td>
    </tr>

<?php $i++;
}
?>
   <tr style="background:#ce0f3d">
       <td></td>
       <td>Total</td>
       <td><?= $totalprice?></td>
       <td></td>
   </tr>
  </tbody>
</table>

         </div>
          
          <div class="col-md-4">
                <h2 class="text-center">Delivery Address</h2>

                <div class="address text-center" style="border:2px solid #ce0f3d;border-radius:8px;padding:10px;">
                  <div class="inner-col-md-4" style="margin-bottom:0;">
                    <p style="margin:0;"><?= $address['address']->name?></p>
                    <p style="margin:0;"><?= $address['address']->contact?></p> 
                    <p style="margin:0;"><?= $address['address']->address?> , <?= $address['address']->lankmark?> , <?= $address['address']->city?> , <?= $address['address']->state?> , Pin Code - <?= $address['address']->pincode?></p>
                  </div>
                </div>
          </div>
        
        <div class="col-md-4 offset-8 text-right">
          <p style="background:#ce0f3d;text-align:center;padding:10px;color:#fff;border-radius:32px;">  Avaliable Balance (
           <?php
            $userid=$this->session->userdata('topchoiceuser2020');
            $fetchbalance=$this->db->select('balance')
                      ->from('user')
                      ->where('your_sponsor_id',$userid)
                      ->get();
                      $balance=$fetchbalance->row('balance');
                      echo $balance;
          ?>)
          </p>
            <?php
            $userid=$this->session->userdata('topchoiceuser2020');
               if($totalprice>$balance)
               {
            ?>
            <a href="<?= base_url("user/Welcome/loginbyuser/$userid")?>" target="_blank"><button class="btn btn-primary">Your Balance is Low Add Fund</button></a>
            <?php
          }else{
          ?>
            <a href="<?= base_url("Welcome/ordernow/$totalprice")?>"><button class="btn btn-primary">Order Now</button></a>
          <?php } ?> 

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



</body>
</html>