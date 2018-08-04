<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCategory extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Product_model',"Product");						
    } 
	
	public function index($slug,$productCatId)
	{
		$data["pagetitle"]="Product Category ".$slug;
		
		$params["productCatId"]=$productCatId;
		$params["productCatName"]=$slug;
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		
		
		
		$view["activeProducts"]=$this->Product->GetProductCategory($params);
		
        $this->load->library('pagination');
		
                        
		$config['base_url'] = base_url()."/index.php/ProductCategory/?productCatId=".$params['productCatId']."&productCatName=".$params['productCatName']."";
        $config['total_rows'] = sizeof($view["activeProducts"]);	

		
		$config['per_page']=RECORDS_PER_PAGE;
		$config['page_query_string'] = true;
		$config['attributes'] = array('class' => 'pagination__next');
		
        $this->pagination->initialize($config);
		
		
		
		$data["ProductCategory"]=$slug;
		
		
		$this->load->view('template/header',$data);
		$this->load->view('productcategory/index',$view);
		$this->load->view('template/footer');
	}
}
