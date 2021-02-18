<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('Welcomemodel','model');
}
public function index()
{
if($this->session->userdata('topchoiceadminlogin2020'))
{
	return redirect('Welcomelogin/index');
}
	$this->load->view('login');
}

public function loginaccount()
{
  $userid=$this->input->post('userid');
  $password=$this->input->post('password');
  $checklogindetail=$this->model->checklogindetail($userid,$password);
  if($checklogindetail>=1)
  {
  	  $this->session->set_userdata('topchoiceadminlogin2020',$userid);
      return redirect('Welcomelogin/index');
  }
  else
  {
  	$this->session->set_flashdata('error','Wrong Id And Password');
  	return redirect();
  }


}
public function logout()
{
  $this->session->unset_userdata('topchoiceadminlogin2020');
  return redirect();
}


}
