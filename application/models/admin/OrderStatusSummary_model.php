<?php

class OrderStatusSummary_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function SaveData($data,$createdDate)
	{
		$array = array("SavedData"=>serialize($data),"CreatedDate"=>$createdDate);
		$this->db->insert("OrderStatusSummary",$array);
	}
	
	function getSavedData()
	{
		$this->db->order_by('CreatedDate','desc');
		return $this->db->get("OrderStatusSummary")->result();		 
	}
	
	function getObject($id)
	{
		$this->db->where("OrderStatusSummaryId",$id);
		return $this->db->get("OrderStatusSummary")->row();		 
	}
}
