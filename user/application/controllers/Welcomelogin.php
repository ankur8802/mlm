<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomelogin extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('Welcomemodel','model');
	if(!$this->session->userdata('topchoiceuserlogin2020'))
	{
		return redirect('Welcome/index');
	}
}

public function index()
{
  $data['balance']=$this->model->fetchbalance();
  $data['bv']=$this->model->fetchbv();
  $data['idproof']=$this->model->fetchidproof();
  $data['pan']=$this->model->fetchpan();
  $data['bank']=$this->model->fetchbank();
  $data['electricty']=$this->model->fetchelectricty();
	$this->load->view('index',$data);
}

public function booknow()
{
  $data['checkpackage']=$this->model->checkpackage();
  $data['booknow']=$this->model->fetchbooknow();
	$this->load->view('booknow',$data);
}

public function distributor()
{
	$data['distributor']=$this->model->fetchdistributor();
	$this->load->view('distributor',$data);	
}

public function myprofile()
{
   $data['myprofile']=$this->model->fetchmyprofile();
   $this->load->view('myprofile',$data);
}

public function updatemyprofile()
{
	$data=$this->input->post();
	$your_sponsor_id=$this->input->post('your_sponsor_id');
	$this->model->updatemyprofile($data,$your_sponsor_id);
	$this->session->set_flashdata('success','Profile Update Successfully');
  	return redirect('Welcomelogin/myprofile');
}

public function changepassword()
{
   $this->load->view('changepassword');
}

public function updatepassword()
{
	$oldpassword=$this->input->post('oldpassword');
	$newpassword=$this->input->post('newpassword');
	$cnewpassword=$this->input->post('cnewpassword');
	$fetcholdpassword=$this->model->fetcholdpassword();
    if($newpassword!=$cnewpassword)
    {
    	$this->session->set_flashdata('error','New Password And Confirm Password Not Match');
    	return redirect('Welcomelogin/changepassword');	
    }
    elseif($oldpassword!=$fetcholdpassword)
    {
    	$this->session->set_flashdata('error','Old Password is Wrong');
    	return redirect('Welcomelogin/changepassword');	
    }
    elseif($newpassword==$cnewpassword && $oldpassword==$fetcholdpassword)
    {
    	$this->model->updatepassword($newpassword);
    	$this->session->set_flashdata('success','Password Update Successfully');
    	return redirect('Welcomelogin/changepassword');	
    }
    else
    {
    	$this->session->set_flashdata('error','Sorry Something is Wrong');
    	return redirect('Welcomelogin/changepassword');	
    }

}

public function changemobile()
{
   $this->load->view('changemobile');
}
public function updatemobile()
{
	$mobile=$this->input->post('mobile');
	$cmobile=$this->input->post('cmobile');
    if($mobile!=$cmobile)
    {
    	$this->session->set_flashdata('error','Mobile No. And Confirm Mobile No. Not Match');
    	return redirect('Welcomelogin/changemobile');	
    }
    elseif($mobile==$cmobile)
    {
    	$this->model->updatemobile($mobile);
    	$this->session->set_flashdata('success','Mobile Update Successfully');
    	return redirect('Welcomelogin/changemobile');	
    }
}
public function kyc()
{
   $this->load->view('kyc');	
}

public function uploadpic()
{
	$config['upload_path'] = '../uploads/user/profileimage';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload',$config,'profile');
    $this->profile->initialize($config);
    if($this->profile->do_upload('pic'))
    {
       $profile=$this->profile->data();
       $profileimage=$profile['raw_name'].$profile['file_ext'];
       $data['pic']=$profileimage;
       $this->model->uploadpic($data);
       $this->session->set_flashdata('success','Profile Pic Upload Successfully');
    	return redirect('Welcomelogin/kyc');	
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate');
    	return redirect('Welcomelogin/kyc');		
    }
}

public function uploadidproof()
{
	$data=$this->input->post();
	$config['upload_path'] = '../uploads/user/idproofimage';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'idproof');
    $this->idproof->initialize($config);
    if($this->idproof->do_upload('id_proof'))
    {
       $idproof=$this->idproof->data();
       $idproofimage=$idproof['raw_name'].$idproof['file_ext'];
       $data['id_proof']=$idproofimage;
       $this->model->uploadidproof($data);
       $this->session->set_flashdata('success','Id Proof Upload Successfully');
    	return redirect('Welcomelogin/kyc');	
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate');
    	return redirect('Welcomelogin/kyc');		
    }
}

public function uploadpancard()
{
	$data=$this->input->post();
	$config['upload_path'] = '../uploads/user/pancard';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'pancard');
    $this->pancard->initialize($config);
    if($this->pancard->do_upload('pancard'))
    {
       $pancard=$this->pancard->data();
       $pancardimage=$pancard['raw_name'].$pancard['file_ext'];
       $data['pancard']=$pancardimage;
       $this->model->uploadpancard($data);
       $this->session->set_flashdata('success','Pan Card Upload Successfully');
    	return redirect('Welcomelogin/kyc');	
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate');
    	return redirect('Welcomelogin/kyc');		
    }
}

public function uploadbankdetail()
{
	$data=$this->input->post();
	$config['upload_path'] = '../uploads/user/bank';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'bank');
    $this->bank->initialize($config);
    if($this->bank->do_upload('bank'))
    {
       $bank=$this->bank->data();
       $bankimage=$bank['raw_name'].$bank['file_ext'];
       $data['bank']=$bankimage;
       $this->model->uploadbankdetail($data);
       $this->session->set_flashdata('success','Bank Detail Upload Successfully');
    	return redirect('Welcomelogin/kyc');	
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate');
    	return redirect('Welcomelogin/kyc');		
    }	
}

public function uploadelectricitybill()
{
   	$config['upload_path'] = '../uploads/user/electricity';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'electricity');
    $this->electricity->initialize($config);
    if($this->electricity->do_upload('electricity'))
    {
       $electricity=$this->electricity->data();
       $electricityimage=$electricity['raw_name'].$electricity['file_ext'];
       $data['electricity']=$electricityimage;
       $this->model->uploadelectricitybill($data);
       $this->session->set_flashdata('success','Electricity Bill Upload Successfully');
    	return redirect('Welcomelogin/kyc');	
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate');
    	return redirect('Welcomelogin/kyc');		
    }		
}
public function buypackage($amount)
{
  $data['amount']=$amount;
  $this->load->view('buypackage',$data);
}

public function paymentrequest()
{
  $data=$this->input->post();
  $config['upload_path'] = '../uploads/user/payment';
  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'payment');
    $this->payment->initialize($config);
    if($this->payment->do_upload('bank_receipt'))
    {
       $payment=$this->payment->data();
       $paymentimage=$payment['raw_name'].$payment['file_ext'];
       $data['bank_receipt']=$paymentimage;
       $data['status']=0;
       $this->model->paymentrequest($data);
      $this->session->set_flashdata('success',' Payment Request Send Successfully');
      return redirect('Welcomelogin/booknow');
    }

}
public function messageindividual()
{
   $data['message']=$this->model->messageindividual();
   $this->load->view('messageindividual',$data); 
}
public function messageforall()
{
   $data['message']=$this->model->messageforall();
   $this->load->view('messageforall',$data);  
}
public function sendacomplain()
{
 $this->load->view('sendacomplain');  
}
public function instcomplain()
{
  $data=$this->input->post();
  $data['message_type']='complain';
  $data['userid']=$this->session->userdata('topchoiceuserlogin2020');
  $this->model->instcomplain($data);
  $this->session->set_flashdata('success','Conplain Send Successfully');
  return redirect('Welcomelogin/sendacomplain');  
}
public function orderhistory()
{
 $data['myorder']=$this->model->fetchmyorder();
 $this->load->view('orderhistory',$data);  
}
public function bvhistroy()
{
  $data['bvhistroy']=$this->model->bvhistroy();
  $this->load->view('bvhistroy',$data);  
}
public function redeembv($bv)
{
  $data['your_sponsor_id']=$this->session->userdata('topchoiceuserlogin2020');
  $data['bv']=$bv;
  $data['status']='0';
  $this->model->redeembv($data);
  $this->session->set_flashdata('success','Wait For Admin Approval');
  return redirect('Welcomelogin/index'); 
}
public function payoutbv()
{
 $data['payoutbv']=$this->model->fetchpayoutbv();
 $this->load->view('payoutbv',$data);
}

}
