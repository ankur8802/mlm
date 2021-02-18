<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallerymodel extends CI_Model {
 

public function galleryinst($data)
{
	$this->db->insert('gallery',$data);
}
public function fetchgallery()
{
$q=$this->db->select()
         ->from('gallery')
         ->order_by('id','desc')
         ->get();	
         return $q->result();
}
public function deletegallery($id)
{
	$this->db->where('id',$id)
	         ->delete('gallery');
}




}
