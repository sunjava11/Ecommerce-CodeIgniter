<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCat extends CI_Model{
	
	public function GetAlllProductCat(){
		$query = $this->db->get("productcat");
		
		return $query->result();
	}
	
}