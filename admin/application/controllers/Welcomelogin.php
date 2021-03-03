<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomelogin extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('Welcomemodel','model');
	if(!$this->session->userdata('topchoiceadminlogin2020'))
	{
		return redirect('Welcome/index');
	}
}

public function index()
{
  $data['fetchallmemberstotal']=$this->model->fetchallmemberstotal();
  $data['fetchtotalproduct']=$this->model->fetchtotalproduct();
  $data['fetchtotalorder']=$this->model->fetchtotalorder();
	$this->load->view('index',$data); 
}
public function allmembers()
{
  $data['allmembers']=$this->model->fetchallmembers();
  $this->load->view('allmember',$data); 
}

public function idproofrequest()
{
  $data['idproofrequest']=$this->model->fetchidproofrequest();
  $this->load->view('idproofrequest',$data); 
}
public function approvedifproof($id)
{
  $this->model->approvedifproof($id);
  $this->session->set_flashdata('success','Approved Successfully');
  return redirect('Welcomelogin/idproofrequest');
}
public function rejectidproof($id)
{
  $this->model->rejectidproof($id);
  $this->session->set_flashdata('success','Reject Id Proof Successfully');
  return redirect('Welcomelogin/idproofrequest'); 
}

public function pancardrequest()
{
  $data['pancardrequest']=$this->model->fetchpancardrequest();
  $this->load->view('pancardrequest',$data); 
}

public function approvedpancard($id)
{
  $this->model->approvedpancard($id);
  $this->session->set_flashdata('success','Approved Successfully');
  return redirect('Welcomelogin/pancardrequest');
}
public function rejectpancard($id)
{
  $this->model->rejectpancard($id);
  $this->session->set_flashdata('success','Reject Pan Card Successfully');
  return redirect('Welcomelogin/pancardrequest'); 
}
public function bankdetailrequest()
{
   $data['bankdetailrequest']=$this->model->fetchbankdetailrequest();
  $this->load->view('bankdetailrequest',$data); 
}
public function approvedbank($id)
{
  $this->model->approvedbank($id);
  $this->session->set_flashdata('success','Approved Successfully');
  return redirect('Welcomelogin/bankdetailrequest');
}
public function rejectbank($id)
{
  $this->model->rejectbank($id);
  $this->session->set_flashdata('success','Reject Bank Detail Successfully');
  return redirect('Welcomelogin/bankdetailrequest'); 
}
public function electricityrequest()
{
   $data['electricityrequest']=$this->model->fetchelectricityrequest();
  $this->load->view('electricityrequest',$data);  
}
public function approvedelectricity($id)
{
  $this->model->approvedelectricity($id);
  $this->session->set_flashdata('success','Approved Successfully');
  return redirect('Welcomelogin/electricityrequest');
}
public function rejectelectricity($id)
{
  $this->model->rejectelectricity($id);
  $this->session->set_flashdata('success','Reject Successfully');
  return redirect('Welcomelogin/electricityrequest'); 
}
public function package()
{
  $data['package']=$this->model->fetchpackage();
  $this->load->view('package',$data);  
}
public function instpackage()
{
  $data=$this->input->post();
  $this->model->instpackage($data);
  $this->session->set_flashdata('success','Add Package Successfully');
  return redirect('Welcomelogin/package'); 
}

public function packagedetele($id)
{
  $this->model->packagedetele($id);
  $this->session->set_flashdata('success','Delete Successfully');
  return redirect('Welcomelogin/package'); 
}
public function paymentrequest()
{
   $data['paymentrequest']=$this->model->fetchpaymentrequest();
  $this->load->view('paymentrequest',$data); 
}
public function approvedpaymentrequest($id,$userid,$amount)
{
  $this->model->approvedpaymentrequest($id);
  $this->model->approvedpaymentrequestuser($userid,$amount);
  $balance=$this->model->fetchuserbalance($userid);
  $newbalance=$balance+$amount;
  $this->model->updatebalance($userid,$newbalance);
  $this->session->set_flashdata('success','Approved Successfully');
  return redirect('Welcomelogin/paymentrequest');
}
public function rejectpaymentrequest($id)
{
  $this->model->rejectpaymentrequest($id);
  $this->session->set_flashdata('success','Reject Successfully');
  return redirect('Welcomelogin/electricityrequest'); 
}
public function sendmsgforall()
{
  $data['massege']=$this->model->fetchsendmsgforall();
  $this->load->view('sendmsgforall',$data); 
}
public function instmessageforall()
{
  $data=$this->input->post();
  $data['message_type']="all";
  $data['userid']="all";
  $this->model->instmessageforall($data);
  $this->session->set_flashdata('success','Add Alert For All Successfully');
  return redirect('Welcomelogin/sendmsgforall');

}
public function deletemessageforall($id)
{
  $this->model->deletemessageforall($id);
  $this->session->set_flashdata('success','Delete Successfully');
  return redirect('Welcomelogin/sendmsgforall');  
}
public function sendmsgforindividual()
{
  $data['massege']=$this->model->fetchsendmsgforindividual(); 
  $data['allmembers']=$this->model->fetchallmembers();
  $this->load->view('sendmsgforindividual',$data); 
}

public function instsendmsgforindividual()
{
  $data=$this->input->post();
  $this->model->instsendmsgforindividual($data);
  $this->session->set_flashdata('success','Add Alert Successfully');
  return redirect('Welcomelogin/sendmsgforindividual');
}
public function deletesendmsgforindividual($id)
{
  $this->model->deletesendmsgforindividual($id);
  $this->session->set_flashdata('success','Delete Successfully');
  return redirect('Welcomelogin/sendmsgforindividual'); 
}

public function usercomplain()
{
    $data['massege']=$this->model->fetchusercomplain();
    $this->load->view('usercomplain',$data); 
}
public function bvlavel()
{
  $data['bvlavel']=$this->model->bvlavel();
  $this->load->view('bvlevel',$data); 
}
public function bvlavelinsert()
{
  $data=$this->input->post();
  $this->model->bvlavelinsert($data);
    $this->session->set_flashdata('success','Update Successfully');
  return redirect('Welcomelogin/bvlavel'); 
}
public function bvlaveldelete($id)
{
  $this->model->bvlaveldelete($id);
  $this->session->set_flashdata('success','Delete Successfully'); 
  return redirect('Welcomelogin/bvlavel'); 
}
public function bvupdate()
{
  $id=$this->input->post('id');
  $percentage=$this->input->post('percentage');
  $this->model->bvupdate($id,$percentage);
  $this->session->set_flashdata('success','Update B V Level Percentage Successfully'); 
  return redirect('Welcomelogin/bvlavel'); 
}
public function contactus()
{
  $data['contactus']=$this->model->fetchcontactus();
  $this->load->view('contactus',$data);
}
public function bvredeem()
{
  $data['bvredeem']=$this->model->fetchbvredeem();
  $this->load->view('bvredeem',$data);
}
public function bvredeemapproved($id,$userid,$bv)
{
  $this->model->bvredeemapproved($id,$userid,$bv);
  $this->session->set_flashdata('success','Redeem Accepted'); 
  return redirect('Welcomelogin/bvredeem');
}
public function bvredeemreject($id)
{
  $this->model->bvredeemreject($id);
  $this->session->set_flashdata('success','Redeem Rejected'); 
  return redirect('Welcomelogin/bvredeem');
}
public function payoutreport()
{
  $userid=$this->input->post('userid');
  $fromdate=$this->input->post('fromdate');
  $todate=$this->input->post('todate');
  if($userid)
  {
    $data['payoutreport']=$this->model->payoutreportbyid($userid);
    $data['page']="byid";
  }
  elseif($fromdate && $todate) {
     $data['payoutreport']=$this->model->payoutreportbydate($fromdate,$todate);
    $data['page']="bydate";
  }
  else
  {
     $data['page']='options';
  }
  $this->load->view('payoutreport',$data); 
}

}
