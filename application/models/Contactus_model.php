<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus_model extends CI_Model{
	
	public function add($param){
		$this->db->insert("contactus",$param);				
	}
	
	public function get_all()
	{
		$this->db->order_by("createddate","desc");
		return $this->db->get("contactus")->result_array();
	}
	
}