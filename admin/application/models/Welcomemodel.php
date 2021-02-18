<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomemodel extends CI_Model {

public function checklogindetail($userid,$password)
{
	$q=$this->db->select()
	         ->from('admin')
	         ->where('email',$userid)
	         ->where('password',$password)
	         ->get();
            return $q->num_rows();
}

public function fetchallmembers()
{
  $q=$this->db->select()
              ->from('user')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function fetchallmemberstotal()
{
  $q=$this->db->select()
              ->from('user')
              ->get();
              return $q->num_rows();
}
public function fetchidproofrequest()
{
  $q=$this->db->select()
              ->from('user_id_proof')
              ->where('status',0)
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function approvedifproof($id)
{
   $data['status']=1;
   $this->db->where('id',$id)
             ->update('user_id_proof',$data);
}

public function rejectidproof($id)
{
   $data['status']=2;
   $this->db->where('id',$id)
             ->update('user_id_proof',$data);
}
public function fetchpancardrequest()
{
  $q=$this->db->select()
              ->from('user_pan_card')
              ->where('status',0)
              ->order_by('id','desc')
              ->get();
              return $q->result(); 
}
public function approvedpancard($id)
{
   $data['status']=1;
   $this->db->where('id',$id)
             ->update('user_pan_card',$data);
}
public function rejectpancard($id)
{
   $data['status']=2;
   $this->db->where('id',$id)
             ->update('user_pan_card',$data);
}
public function fetchbankdetailrequest()
{
   $q=$this->db->select()
              ->from('user_bank_detail')
              ->where('status',0)
              ->order_by('id','desc')
              ->get();
              return $q->result();  
}
public function approvedbank($id)
{
   $data['status']=1;
   $this->db->where('id',$id)
             ->update('user_bank_detail',$data);
}
public function rejectbank($id)
{
   $data['status']=2;
   $this->db->where('id',$id)
             ->update('user_bank_detail',$data);
}
public function fetchelectricityrequest()
{
   $q=$this->db->select()
              ->from('user_electricity')
              ->where('status',0)
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function approvedelectricity($id)
{
   $data['status']=1;
   $this->db->where('id',$id)
             ->update('user_electricity',$data);
}
public function rejectelectricity($id)
{
   $data['status']=2;
   $this->db->where('id',$id)
             ->update('user_electricity',$data);
}
public function fetchpackage()
{
   $q=$this->db->select()
              ->from('user_package')
              ->order_by('package_amount','asc')
              ->get();
              return $q->result();
}
public function instpackage($data)
{
  $this->db->insert('user_package',$data);
}
public function packagedetele($id)
{
   $this->db->where('id',$id)
             ->delete('user_package'); 
}
public function fetchpaymentrequest()
{
   $q=$this->db->select()
              ->from('user_payment')
              ->order_by('id','desc')
              ->where('status',0)
              ->get();
              return $q->result();
}
public function approvedpaymentrequest($id)
{
   $data['status']=1;
   $this->db->where('id',$id)
             ->update('user_payment',$data);
}
public function rejectpaymentrequest($id)
{
   $data['status']=2;
   $this->db->where('id',$id)
             ->update('user_payment',$data);
}
public function fetchsendmsgforall()
{
   $q=$this->db->select()
              ->from('user_alert')
              ->where('message_type','all')
              ->order_by('id','desc')
              ->get();
              return $q->result(); 
}
public function deletemessageforall($id)
{
   $this->db->where('id',$id)
             ->delete('user_alert'); 
}
public function instmessageforall($data)
{
  $this->db->insert('user_alert',$data);
}
public function instsendmsgforindividual($data)
{
  $this->db->insert('user_alert',$data);
}
public function deletesendmsgforindividual($id)
{
  $this->db->where('id',$id)
           ->delete('user_alert');  
}
public function fetchsendmsgforindividual()
{
   $q=$this->db->select()
              ->from('user_alert')
              ->where('message_type','Individual')
              ->order_by('id','desc')
              ->get();
              return $q->result();  
}
public function approvedpaymentrequestuser($userid,$amount) 
{
  date_default_timezone_set("Asia/Calcutta");
  $date=date("Y-m-d");
  $data['status']=1;
  $data['package']=$amount;
  $data['activationdate']=$date;
  $this->db->where('your_sponsor_id',$userid)
             ->update('user',$data);
}
public function fetchusercomplain()
{
    $q=$this->db->select()
              ->from('user_alert')
              ->where('message_type','complain')
              ->order_by('id','desc')
              ->get();
              return $q->result();  
}
public function uploadproducts($data)
{
  $this->db->insert('products',$data);
}

public function fetchallproducts()
{
    $q=$this->db->select()
              ->from('products')
              ->order_by('id','desc')
              ->get();
              return $q->result();  
}
public function deleteproducts($id)
{
  $this->db->where('id',$id)
           ->delete('products');
}
public function instaddcategory($data)
{
  $this->db->insert('product_category',$data);
}
public function fetchaddcategory()
{
    $q=$this->db->select()
              ->from('product_category')
              ->order_by('id','desc')
              ->get();
              return $q->result(); 
}
public function deleteaddcategory($id)
{
   $this->db->where('id',$id)
           ->delete('product_category'); 
}
public function fetchuserbalance($userid)
{
 $q=$this->db->select()
         ->from('user')
         ->where('your_sponsor_id',$userid)
         ->get();
         return $q->row('balance');
}
public function updatebalance($userid,$newbalance)
{
  $data['balance']=$newbalance;
  $this->db->where('your_sponsor_id',$userid)
           ->update('user',$data);
}
public function fetchorderdetail()
{
    $q=$this->db->select()
              ->from('user_order')
              ->order_by('id','desc')
              ->where('status',1)
              ->get();
              return $q->result();  
}
public function fetchorderproductdetail()
{
    $q=$this->db->select()
              ->from('user_order_product')
              ->order_by('id','desc')
              ->where('status',1)
              ->get();
              return $q->result(); 
}
public function fetchproducctquantity($id)
{
    $q=$this->db->select()
              ->from('products')
              ->order_by('id','desc')
              ->where('id',$id)
              ->get();
              return $q->row('product_quantity');
}
public function updatequantityproduct($id,$new_product_quantity)
{
  $data['product_quantity']=$new_product_quantity;
  $this->db->where('id',$id)
           ->update('products',$data);
}
public function updateproductdata($id,$data)
{
   $this->db->where('id',$id)
           ->update('products',$data); 
}

public function fetchtotalproduct()
{
    $q=$this->db->select()
              ->from('products')
              ->get();
              return $q->num_rows(); 
}
public function fetchtotalorder()
{
    $q=$this->db->select()
              ->from('user_order')
              ->get();
              return $q->num_rows(); 
}
public function bvlavel()
{
  $q=$this->db->query("select * from bv_level order by level desc");
   return $q->result();
}
public function bvlavelinsert($data)
{
  $this->db->insert('bv_level',$data);
}
public function bvlaveldelete($id)
{
   $this->db->where('id',$id)
           ->delete('bv_level');
}
public function bvupdate($id,$percentage)
{
    $this->db->query("update bv_level set percentage = '$percentage' where id = '$id'");
}
public function fetchcontactus()
{
  $output=$this->db->query('select * from contact order by id desc');
  return $output->result();
}
public function fetchbvredeem()
{
  $output=$this->db->query('select * from bvredeem order by id desc');
  return $output->result();
}
public function bvredeemapproved($id,$userid,$bv)
{
  date_default_timezone_set('Asia/Kolkata');      
  $date=date("Y-m-d h:i");
  $userbv=$this->db->query("select bv from user where your_sponsor_id='$userid'");
  $current_user_bv=$userbv->row('bv');
  $new_bv=$current_user_bv-$bv;
  $this->db->query("update user set bv='$new_bv' where your_sponsor_id='$userid'");
  $this->db->query("update bvredeem set status='1' , admintime='$date' where id='$id'");
}
public function bvredeemreject($id)
{
  date_default_timezone_set('Asia/Kolkata');      
  $date=date("Y/m/d h:i:sa");
  $this->db->query("update bvredeem set status='2' , admintime='$date'  where id='$id'");
}
}
