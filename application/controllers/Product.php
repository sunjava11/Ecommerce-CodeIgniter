<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Product_model',"Product");				
    } 
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index($slug,$productId)
	{
		$data["ProductDetail"] = $this->Product->GetProductDetail($slug,$productId);
		$data["RelatedProducts"]="";
		$data["pagetitle"]="";
		$data["SoldCount"]=0;
		$data["DeliveryCharges"]=200;
		
		$data["IsActive"]=0;
		
		if(strtotime($data["ProductDetail"]->SaleEndDate)>=strtotime(date("Y-m-d")))
		{
			$data["IsActive"]=1;
		}
		
		if($data["ProductDetail"])
		{
			 $data["RelatedProducts"] = $this->Product->GetRelatedProducts($data["ProductDetail"]->ProductId,$data["ProductDetail"]->ProductCatId);
			$data["pagetitle"]=$data["ProductDetail"]->ProductName;
		}
		
		$this->load->view('template/header',$data);
		$this->load->view('product/detail_view',$data);
		$this->load->view('template/footer');
	}
}
