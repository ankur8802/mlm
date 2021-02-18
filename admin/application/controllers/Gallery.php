<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Gallerymodel','gallery');

		if(!$this->session->userdata('topchoiceadminlogin2020'))
          {
             return redirect('Welcome/index');
          }
	}


public function gallery()
{
	$data['gallery']=$this->gallery->fetchgallery();
	$this->load->view('gallery',$data);
}
public function galleryinst()
{
        $config['upload_path'] = '../uploads/gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
         {
            $post=$this->upload->data();
            $galleryimage=$post['raw_name'].$post['file_ext'];
            $data['image']=$galleryimage;
            $this->gallery->galleryinst($data);
            $this->session->set_flashdata('success','Successfully Submitted');
            return redirect('Gallery/gallery');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate Or Image Size');
         	return redirect('Gallery/gallery');
         }


}
public function deletegallery($id)
{
	$this->gallery->deletegallery($id);
	$this->session->set_flashdata('success','gallery Delete Successfully');
     return redirect('Gallery/gallery');
}



}
