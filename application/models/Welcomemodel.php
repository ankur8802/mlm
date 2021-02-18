<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomemodel extends CI_Model {

public function checksponsorid($sponsor_id)
{
	$q=$this->db->select()
	         ->from('user')
	         ->where('your_sponsor_id',$sponsor_id)
	         ->get();
	         return $q->num_rows();
}
public function instregistration($data)
{
	$this->db->insert('user',$data);
}
public function lastsponsorid()
{
	$q=$this->db->select()
	         ->from('user')
	         ->order_by('id','desc')
	         ->limit(1)
	         ->get();
	         return $q->row('your_sponsor_id');	
}
public function fetchproducts()
{
	$q=$this->db->select()
	            ->from('products')
	            ->order_by('id','desc')
	            ->where('product_quantity >=',1)
	            ->where('status',1) 
	            ->get();
	            return $q->result();
}
public function checklogin($userid,$password)
{
	$q=$this->db->select()
	            ->from('user')
	            ->where('your_sponsor_id',$userid)
	            ->where('password',$password)
	            ->get();
	            return $q->num_rows();	
}
public function addcartproduct($data)
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$data['userid']=$userid;
	$this->db->insert('user_cart',$data);	
}
public function addcartproductcheck($product_id)
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	            ->from('user_cart')
	            ->where('userid',$userid)
	            ->where('product_id',$product_id)
	            ->get();
	            return $q->num_rows();
}
public function cartproductfetch()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	            ->from('user_cart')
	            ->where('status',0)
	            ->where('userid',$userid)
	            ->get();
	            return $q->result();
}
public function removecartproduct($id)
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$this->db->where('id',$id)
	         ->where('userid',$userid)
	         ->delete('user_cart');
}
public function updatequantity($id,$quantity)
{
   $data['product_quantity']=$quantity;
   $this->db->where('id',$id)
            ->update('user_cart',$data);
}
public function checkmaxquantity($productid)
{
	$q=$this->db->select()
	            ->from('products')
	            ->where('id',$productid)
	            ->get();
	            return $q->row('product_quantity');
}
public function insertaddress($data)
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$data['userid']=$userid;
	$this->db->insert('user_delivery_address',$data);
}
public function fetchaddress()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	            ->from('user_delivery_address')
	            ->where('userid',$userid)
	            ->get();
	            return $q->result();
}
public function selectaddress($id)
{
	$q=$this->db->select()
	            ->from('user_delivery_address')
	            ->where('id',$id)
	            ->get();
	            return $q->row();	
}
public function fetchproductorderid()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select('product_id')
	            ->from('user_cart')
	            ->where('userid',$userid)
	            ->get();
	            return $q->result();
}
public function fetchcartdata()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	            ->from('user_cart')
	            ->where('userid',$userid)
	            ->get();
	            return $q->result();
}
public function fetchcurrentquantity($product_id)
{
	$q=$this->db->select()
	            ->from('products')
	            ->where('id',$product_id)
	            ->get();
	            return $q->row('product_quantity');
}
public function fetchbusinessvolume($product_id)
{
	$q=$this->db->select()
	            ->from('products')
	            ->where('id',$product_id)
	            ->get();
	            return $q->row('product_bv');	
}
public function contractquantity($product_id,$newquantity)
{
	$data['product_quantity']=$newquantity;
	$this->db->where('id',$product_id)
	          ->update('products',$data);
}
public function orderdetail($carddetail)
{
	$this->db->insert('user_order_product',$carddetail);	
}
public function insertorder($data)
{
	$this->db->insert('user_order',$data);
}
public function fetchaccountbalance()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$q=$this->db->select()
	            ->from('user')
	            ->where('your_sponsor_id',$userid)
	            ->get();
	            return $q->row('balance');
}
public function updateaccountbalance($newaccountbalance)
{
	$data['balance']=$newaccountbalance;
	$userid=$this->session->userdata('topchoiceuser2020');
	$this->db->where('your_sponsor_id',$userid)
	          ->update('user',$data);
}
public function removecartdata()
{
	$userid=$this->session->userdata('topchoiceuser2020');
	$this->db->where('userid',$userid)
	         ->delete('user_cart');
}
public function fetchorderlastid()
{
	$q=$this->db->select()
	            ->from('user_order_product')
	            ->order_by('id','desc')
	            ->get();
	            return $q->row('id');
}
public function checkcartquentity($checkproductquntity)
{
	$q=$this->db->select()
	            ->from('products')
	            ->where('id',$checkproductquntity)
	            ->get();
	            return $q->row('product_quantity');	
}
public function removecheckcartquentity($checkproductquntity)
{
	$this->db->where('product_id',$checkproductquntity)
	         ->delete('user_cart');
}

public function fetchparentuser($current_user)
{
	$q=$this->db->query("select under_sponsor_id from user where your_sponsor_id = '$current_user'");
	    return $q->row('under_sponsor_id');
}
public function addlevelbv($bvdistribution)
{
	$this->db->insert('user_bv',$bvdistribution);
}
public function fetchlevelpercentage($level)
{
	$q=$this->db->select('percentage')
	          ->from('bv_level')
	          ->where('level',$level)
	          ->get();
	          return $q->row('percentage');

}
public function userbvupdate($calculatebv,$parentuser)
{
	$current_bv_row=$this->db->query("select bv from user where your_sponsor_id='$parentuser'");
	$current_bv=$current_bv_row->row('bv');
	$new_bv=$current_bv+$calculatebv;
	$this->db->query("update user set bv='$new_bv' where your_sponsor_id='$parentuser'");
}
public function fetchproductbycategory($category)
{
  $output=$this->db->query("select * from products where category like '%$category%'");
  return $output->result();
}
public function fetchgallerylimit($limit)
{
	$output=$this->db->query("select * from gallery order by id desc limit $limit");
	return $output->result();
}
public function insertcontactus($data)
{
	$this->db->insert('contact',$data);
}

}
