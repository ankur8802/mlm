<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomemodel extends CI_Model {

public function checklogindetail($userid,$password)
{
	$q=$this->db->select()
	         ->from('user')
	         ->where('your_sponsor_id',$userid)
	         ->where('password',$password)
	         ->get();
            return $q->num_rows();
}
public function fetchdistributor()
{
$id=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	         ->from('user')
	         ->where('under_sponsor_id',$id)
	         ->get();
            return $q->result();
}

public function fetchmyprofile()
{
$id=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	         ->from('user')
	         ->where('your_sponsor_id',$id)
	         ->get();
            return $q->row();	
}
public function updatemyprofile($data,$your_sponsor_id)
{
  $this->db->where('your_sponsor_id',$your_sponsor_id)
            ->update('user',$data);
}
public function fetcholdpassword()
{
$id=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	         ->from('user')
	         ->where('your_sponsor_id',$id)
	         ->get();
            return $q->row('password');
}

public function updatepassword($newpassword)
{
  $data['password']=$newpassword;
  $id=$this->session->userdata('topchoiceuser2020');
  $this->db->where('your_sponsor_id',$id)
            ->update('user',$data);
}

public function updatemobile($mobile)
{
  $data['mobile']=$mobile;
  $id=$this->session->userdata('topchoiceuser2020');
  $this->db->where('your_sponsor_id',$id)
            ->update('user',$data);	
}

public function uploadpic($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $this->db->where('your_sponsor_id',$id)
            ->update('user',$data);
}

public function uploadidproof($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $data['status']=0;
  $data['userid']=$id;
  $this->db->insert('user_id_proof',$data);
}
public function uploadpancard($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $data['status']=0;
  $data['userid']=$id;
  $this->db->insert('user_pan_card',$data);
}
public function uploadbankdetail($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $data['status']=0;
  $data['userid']=$id;
  $this->db->insert('user_bank_detail',$data);
}

public function uploadelectricitybill($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $data['status']=0;
  $data['userid']=$id;
  $this->db->insert('user_electricity',$data);	
}
public function fetchbooknow()
{
  $q=$this->db->select()
           ->from('user_package')
           ->order_by('package_amount','asc')
           ->get();
            return $q->result(); 
}
public function paymentrequest($data)
{
  $id=$this->session->userdata('topchoiceuser2020');
  $data['userid']=$id;
  $this->db->insert('user_payment',$data);
}
public function checkpackage()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_payment')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->row(); 
}
public function messageindividual()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_alert')
           ->where('userid',$id)
           ->where('message_type','Individual')
           ->order_by('id','desc')
           ->get();
            return $q->result(); 
}
public function messageforall()
{
  $q=$this->db->select()
           ->from('user_alert')
           ->where('message_type','all')
           ->order_by('id','desc')
           ->get();
            return $q->result();  
}
public function instcomplain($data)
{
  $this->db->insert('user_alert',$data);
}
public function fetchbalance()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user')
           ->where('your_sponsor_id',$id)
           ->get();
            return $q->row('balance'); 
}
public function fetchbv()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user')
           ->where('your_sponsor_id',$id)
           ->get();
            return $q->row('bv'); 
}
public function fetchidproof()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_id_proof')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->row(); 
}
public function fetchpan()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_pan_card')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->row(); 
}
public function fetchbank()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_bank_detail')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->row();  
}
public function fetchelectricty()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_electricity')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->row();  
}
public function fetchmyorder()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_order_product')
           ->where('userid',$id)
           ->where('status',1)
           ->get();
            return $q->result(); 
}
public function bvhistroy()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('user_bv')
           ->where('your_sponsor_id',$id)
           ->order_by('id','desc')
           ->get();
            return $q->result(); 
}
public function redeembv($data)
{
  $this->db->insert('bvredeem',$data);
}
public function fetchpayoutbv()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('bvredeem')
           ->where('your_sponsor_id',$id)
           ->order_by('id','desc')
           ->where('status','1')
           ->get();
            return $q->result(); 
}
public function fetchpayoutbvreject()
{
  $id=$this->session->userdata('topchoiceuser2020');
  $q=$this->db->select()
           ->from('bvredeem')
           ->where('your_sponsor_id',$id)
           ->order_by('id','desc')
           ->where('status','2')
           ->get();
            return $q->result();  
}
public function fetchpayoutbvbydate($fromdate,$todate,$status)
{
  $output=$this->db->query("select * from bvredeem  where( date between '$fromdate' and '$todate') AND ( status = '$status')");
   return $output->result();
}



}
