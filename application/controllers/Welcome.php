<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	  parent::__construct();
      $this->load->model('Welcomemodel');
}

public function index()
{
    $data['products']=$this->Welcomemodel->fetchproducts();
    $data['gallery']=$this->Welcomemodel->fetchgallerylimit(8);
	$this->load->view('index',$data);
}
public function signup()
{
	$this->load->view('signup');	
}
public function instregistration()
{

 $data=$this->input->post();
 $sponsor_id=$this->input->post('under_sponsor_id');
 $data['status']=0;
 $this->load->model('Welcomemodel');
 $lastsponsorid=$this->Welcomemodel->lastsponsorid();
 if(!$lastsponsorid)
 { 
 	$lastsponsorid="TCT1508200";
 }
  $lastsponsoridplus=substr($lastsponsorid,-7)+1;
  $newsponsorid="TCT".$lastsponsoridplus;
  $data['your_sponsor_id']=$newsponsorid;

 unset($data['accept']);

 $check_sponsor_id=$this->Welcomemodel->checksponsorid($sponsor_id);
 if($check_sponsor_id>=1)
 {
 	$this->Welcomemodel->instregistration($data);
 	$this->session->set_flashdata('success',"Successfully Registered Your Login Id is $newsponsorid");
 	return redirect();
 }
 elseif ($sponsor_id=="root")
 {
 	$this->Welcomemodel->instregistration($data);
 	$this->session->set_flashdata('success',"Successfully Registered Your Login Id is $newsponsorid");
 	return redirect();
 }
 else
 {
 	$this->session->set_flashdata('error','Sponsor Id Not Match');
 	return redirect();
 }


}

public function login()
{
	$this->load->view('login');	
}
public function checklogin()
{
	$userid=$this->input->post('your_sponsor_id');
	$password=$this->input->post('password');
	$checkidpassword=$this->Welcomemodel->checklogin($userid,$password);
	if($checkidpassword<=1)
	{
		$this->session->set_userdata('topchoiceuser2020',$userid);
		return redirect();
	}
	else
	{
		 $this->session->set_flashdata('error',"Wrong Id And Password");
 	     return redirect('login');
	}
}
public function logout()
{
	session_destroy();
	return redirect('login');
}

public function addcartproduct()
{
	$product_id=$this->input->post('productid');
	$data['product_id']=$product_id;
	$data['status']=0;
	$data['product_quantity']=1;
	$addcartproductcheck=$this->Welcomemodel->addcartproductcheck($product_id);	
	if ($addcartproductcheck>=1) {
       return redirect('Welcome/index');
	}
	else
	{
	$this->Welcomemodel->addcartproduct($data);	
	}

}
public function cart()
{
  if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }

 $data['products']=$this->Welcomemodel->cartproductfetch();	
 $cartproductfetch=$this->Welcomemodel->cartproductfetch();	
 $i=0;
 foreach ($cartproductfetch as $products) {
    $checkproductquntity=$data['products']["$i"]->product_id;
    $checkproductquntitynew=$this->Welcomemodel->checkcartquentity($checkproductquntity);
    if($checkproductquntitynew<=0)
    {
    	$this->Welcomemodel->removecheckcartquentity($checkproductquntity);
    }
 	$i++;
 }
  $this->load->view('cart',$data);	

}
public function removecartproduct($id)
{
 if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }

   $this->Welcomemodel->removecartproduct($id);	
   return redirect('Welcome/cart'); 
}
public function updatequantity()
{
	$id=$this->input->post('id');
	$quantity=$this->input->post('quantity');
	$productid=$this->input->post('productid');
    $maxquantity=$this->Welcomemodel->checkmaxquantity($productid);
    if ($maxquantity>=$quantity) {
      $this->Welcomemodel->updatequantity($id,$quantity);	
      echo "ok";
    }
    else
    {
    	echo "max";
    }
}
public function processtopay($totalprice)
{
 if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }
  $this->session->set_userdata('totalprice',$totalprice);
  $data['address']=$this->Welcomemodel->fetchaddress();
  $this->load->view('address',$data);

}
public function insertaddress()
{
 if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }
  $data=$this->input->post();
  $this->Welcomemodel->insertaddress($data);
  $totalprice=$this->session->userdata('totalprice');
  $this->session->set_flashdata('success',"Add Address Successfully");
  return redirect("Welcome/processtopay/$totalprice");
}
public function selectaddress()
{
	$id=$this->input->post('id');
	$data['address']=$this->Welcomemodel->selectaddress($id);
	$this->session->set_userdata('deliveryaddress',$data);
}

public function cartpreview()
{
 if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }
  
  $data['products']=$this->Welcomemodel->cartproductfetch();	
  $data['address']=$this->session->userdata('deliveryaddress');
  $this->load->view('cartpreview',$data);
}
public function ordernow($totalprice)
{
 if(!$this->session->userdata('topchoiceuser2020'))	
  {
	return redirect('Welcome/index');
  }

// order data 
$data['order_amount']=$totalprice;
$data['userid']=$this->session->userdata('topchoiceuser2020');
$data['status']=1;
$address=$this->session->userdata('deliveryaddress');
$data['user_address']=$address['address']->name . ' , ' . $address['address']->contact . ' , ' . $address['address']->address . ' , ' . $address['address']->lankmark  . ' , ' . $address['address']->city  . ' , ' . $address['address']->state    . ' , ' .  $address['address']->pincode;

// fetch product detail by order data
$productsorderlastid=$this->Welcomemodel->fetchorderlastid();
$products=$this->Welcomemodel->fetchproductorderid();
$i=1;
$newproductorderid=$productsorderlastid+1;
foreach ($products as $products) {
   $product["$i"]=$newproductorderid;
   $newproductorderid++;
   $i++;
}
$productsnew= implode(',', $product);
$data['product_order_id']=$productsnew;


// card data insert in order product 
$cartdata=$this->Welcomemodel->fetchcartdata();
$totalbusinessvolumebyorder=0;
foreach ($cartdata as $cartdata) {
	$carddetail['userid']=$cartdata->userid;
	$carddetail['product_id']=$cartdata->product_id;
	$carddetail['product_quentity']=$cartdata->product_quantity;
	$carddetail['status']=1;

    $userid=$cartdata->userid;
	$product_id=$cartdata->product_id;
	$product_quentity=$cartdata->product_quantity;
   
    $currentquantity=$this->Welcomemodel->fetchcurrentquantity($product_id);

    
    $businessvolume=$this->Welcomemodel->fetchbusinessvolume($product_id);
    $businessvolumebyquantity=$businessvolume*$product_quentity;
    $totalbusinessvolumebyorder=$businessvolumebyquantity+$totalbusinessvolumebyorder;

    $newquantity=$currentquantity-$product_quentity;
	$this->Welcomemodel->contractquantity($product_id,$newquantity);
	$this->Welcomemodel->orderdetail($carddetail);

$i++;
}
// card data insert in order product 

// order 
$this->Welcomemodel->insertorder($data);
// order 


// balance 
$accountbalance=$this->Welcomemodel->fetchaccountbalance();
$newaccountbalance=$accountbalance-$totalprice;
$this->Welcomemodel->updateaccountbalance($newaccountbalance);
// balance 

// cart data remove
$this->Welcomemodel->removecartdata();

// business volume 
$this->businessvolume($totalbusinessvolumebyorder);



}

public function businessvolume($totalbusinessvolumebyorder)
{
  $totalbvdistribute=$totalbusinessvolumebyorder;
  $current_user=$this->session->userdata('topchoiceuser2020');
  $calculatebv=$totalbvdistribute*20/100;
  $this->Welcomemodel->userbvupdate($calculatebv,$current_user);
  $bvdistribution = array(
      'your_sponsor_id' => $current_user, 
      'user_bv_id' => 'SELF', 
      'bv' => $calculatebv,
    ); 
    $this->addlevelbv($bvdistribution);



  $parentuser = $this->findunderid($current_user);

  // level 1
  if($parentuser!='root' && $parentuser!="")
  {
     $level=1;
     $fetchlevelpercentage=$this->Welcomemodel->fetchlevelpercentage($level);
     $totalbvdistribute=$totalbusinessvolumebyorder-$calculatebv;
     $calculatebv=$totalbvdistribute*$fetchlevelpercentage/100;
     $this->Welcomemodel->userbvupdate($calculatebv,$parentuser);
     $bvdistribution = array(
      'your_sponsor_id' => $parentuser, 
      'user_bv_id' => $current_user, 
      'bv' => $calculatebv,
    ); 
    $this->addlevelbv($bvdistribution);
  }
  // level 1 end

 // level 2
$parentuser = $this->findunderid($parentuser);
  if($parentuser!='root' && $parentuser!="")
  { 
     $level=2;
     $fetchlevelpercentage=$this->Welcomemodel->fetchlevelpercentage($level);
     $totalbvdistribute=$totalbvdistribute-$calculatebv;
     $calculatebv=$totalbvdistribute*$fetchlevelpercentage/100;
     $this->Welcomemodel->userbvupdate($calculatebv,$parentuser);
     $bvdistribution = array(
      'your_sponsor_id' => $parentuser, 
      'user_bv_id' => $current_user, 
      'bv' => $calculatebv,
    ); 
    $this->addlevelbv($bvdistribution);
  }
  // level 2 end
for ($x = 3; $x <= 10; $x++) {

 // level 3 4 5 6 7 8 9 10
$parentuser = $this->findunderid($parentuser);
  if($parentuser!='root' && $parentuser!="")
  { 
     $level=$x;
     $fetchlevelpercentage=$this->Welcomemodel->fetchlevelpercentage($level);
     $totalbvdistribute=$totalbvdistribute-$calculatebv;
     $calculatebv=$totalbvdistribute*$fetchlevelpercentage/100;
     $this->Welcomemodel->userbvupdate($calculatebv,$parentuser);
     $bvdistribution = array(
      'your_sponsor_id' => $parentuser, 
      'user_bv_id' => $current_user, 
      'bv' => $calculatebv,
    ); 
    $this->addlevelbv($bvdistribution);
  }

  else
  {
      $this->session->set_flashdata('success',"Order Places Successfully");
       return redirect("Welcome/index");
  }


  // level  3 4 5 6 7 8 9 10 end

}
 


}
public function addlevelbv($bvdistribution)
{
  $this->Welcomemodel->addlevelbv($bvdistribution);
}
public function findunderid($current_user)
{
   $parentuser=$this->Welcomemodel->fetchparentuser($current_user);
    return $parentuser;
}
public function category($category)
{
  $category=str_replace('-', ' ', $category);
  $data['product']=$this->Welcomemodel->fetchproductbycategory($category);
  $data['category']=$category;
  $this->load->view('categoryproduct',$data);
}
public function gallery()
{
  $data['gallery']=$this->Welcomemodel->fetchgallerylimit(8);
  $this->load->view('gallery',$data);
}
public function contactus()
{
  $this->load->view('contactus');
}
public function insertcontactus()
{
  $data=$this->input->post();
  $this->Welcomemodel->insertcontactus($data);
  $this->session->set_flashdata('success',"Query Submitted Successfully");
  return redirect("Welcome/contactus");
}



}
