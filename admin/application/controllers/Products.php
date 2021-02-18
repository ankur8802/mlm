<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

function __construct()
{
  parent::__construct();
  $this->load->model('Welcomemodel','model');
  if(!$this->session->userdata('topchoiceadminlogin2020'))
  {
    return redirect('Welcome/index');
  } 
}

public function addproducts()
{
  $data['products']=$this->model->fetchallproducts();
  $data['products2']=$this->model->fetchallproducts();
  $data['category']=$this->model->fetchaddcategory();
  $this->load->view('products',$data);
}

public function insertproduct()
{
    $data=$this->input->post();
    $config['upload_path'] = '../uploads/products';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $config['max_width']            = 600;
    $config['max_height']           = 700;
    $this->load->library('upload',$config,'products');
    $this->products->initialize($config);
    if($this->products->do_upload('product_image'))
    {
       $products=$this->products->data();
       $productsimage=$products['raw_name'].$products['file_ext'];
       $data['product_image']=$productsimage;
       $data['status']=1;
       $this->model->uploadproducts($data);
       $this->session->set_flashdata('success','Add Product Successfully');
      return redirect('Products/addproducts');  
    }
    else
    {
       $this->session->set_flashdata('error','Wrong File Formate Or File Size');
      return redirect('Products/addproducts');    
    }
}

public function deleteproducts($id)
{
       $this->model->deleteproducts($id);
       $this->session->set_flashdata('success','Delete Product Successfully');
      return redirect('Products/addproducts');   
}
public function addcategory()
{
  $data['category']=$this->model->fetchaddcategory();
  $this->load->view('addcategory',$data);
}
public function instaddcategory()
{
  $data=$this->input->post();
  $this->model->instaddcategory($data);
  $this->session->set_flashdata('success','Add Product Category Successfully');
  return redirect('Products/addcategory'); 
}
public function deleteaddcategory($id)
{
       $this->model->deleteaddcategory($id);
       $this->session->set_flashdata('success','Delete Product Category Successfully');
      return redirect('Products/addcategory'); 
}
public function orderdetail()
{
  $data['order']=$this->model->fetchorderdetail();
  $this->load->view('order',$data); 
}
public function orderproductdetail()
{
  $data['orderproduct']=$this->model->fetchorderproductdetail();
  $this->load->view('orderproduct',$data); 
}
public function addquantity()
{
  $id=$this->input->post('id');
  $product_quantity=$this->input->post('product_quantity');
  $old_product_quantity=$this->model->fetchproducctquantity($id);
  $new_product_quantity=$old_product_quantity+$product_quantity;
  $this->model->updatequantityproduct($id,$new_product_quantity);
  $this->session->set_flashdata('success','Quantity Update Successfully');
  return redirect('Products/addproducts'); 
}
public function editproduct($id)
{
  $data=$this->input->post();
  $this->model->updateproductdata($id,$data);
  $this->session->set_flashdata('success','Product Update Successfully');
  return redirect('Products/addproducts'); 
}

}
