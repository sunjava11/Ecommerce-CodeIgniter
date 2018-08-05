<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	
	public function activedeal($offset = 0)
	{
		$data["pagetitle"]="Active Deals";
		$this->load->model("admin/Product_model","Product");		
		
		
		
        $this->load->library('pagination');
		$params['limit'] = 20; 
		//$params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		$params['offset'] = $offset*$params['limit'];
						
		//echo $params['offset'];

		$config['base_url'] = base_url()."/index.php/page/activedeal";
        $config['total_rows'] = $this->Product->get_all_product_count();		
		$config['per_page']=20;
		$config['page_query_string'] = false;
		$config['display_pages'] = TRUE;
		$config['num_links'] = 30;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;	
		
		// $config['next_tag_open']='<div class="nextpage">';
		// $config['next_tag_close']='</div>';

		//various pagination configuration
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['first_tag_open'] = '<span class="first">';
        $config['first_tag_close'] = '</span>';
        $config['first_link'] = '';
        $config['last_tag_open'] = '<span class="last">';
        $config['last_tag_close'] = '</span>';
        $config['last_link'] = '';
        $config['prev_tag_open'] = '<span class="prev">';
        $config['prev_tag_close'] = '</span>';
        $config['prev_link'] = '';
        $config['next_tag_open'] = '<span class="next">';
        $config['next_tag_close'] = '</span>';
        $config['next_link'] = '';
        $config['cur_tag_open'] = '<span class="current">';
        $config['cur_tag_close'] = '</span>';
		
        $this->pagination->initialize($config);
		
		
		
		$view["activeProducts"]=$this->Product->GetActiveProducts($params);
		
		
		$this->load->view('template/header',$data);
		$this->load->view('page/active_deal_view',$view);
		$this->load->view('template/footer');
	}
	
	public function expiredeal()
	{
		$data["pagetitle"]="Expire Deals";
		$this->load->model("admin/Product_model","Product");		
		
		
		
        $this->load->library('pagination');
		$params['limit'] = 20; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
                        
		$config['base_url'] = base_url()."/index.php/page/expiredeal?";
        $config['total_rows'] = $this->Product->get_all_product_count_expire();		
		$config['per_page']=20;
		$config['page_query_string'] = true;
		$config['attributes'] = array('class' => 'pagination__next');
		
        $this->pagination->initialize($config);
		
		
		
		$view["activeProducts"]=$this->Product->GetExpireProducts($params);
		
		
		$this->load->view('template/header',$data);
		$this->load->view('page/expire_deal_view',$view);
		$this->load->view('template/footer');
	}
	
	public function search()
	{
		$data["pagetitle"]="Searched Deals";
		$this->load->model("admin/Product_model","Product");		
		
		$params["searchterm"]=$this->input->get("q");
		$params['limit'] = 20; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
		
		$view["activeProducts"]=$this->Product->GetSearchProducts($params);
		
        $this->load->library('pagination');
		
                        
		$config['base_url'] = base_url()."/index.php/page/search?";
        $config['total_rows'] = sizeof($view["activeProducts"]);	

		
		$config['per_page']=20;
		$config['page_query_string'] = true;
		$config['attributes'] = array('class' => 'pagination__next');
		
        $this->pagination->initialize($config);
		
		
		
		
		
		
		$this->load->view('template/header',$data);
		$this->load->view('page/search_view',$view);
		$this->load->view('template/footer');
	}
	
	public function contactus()
	{
		$data["pagetitle"]="Contact Us";		
		$data["msg"]="";		
		
		if(isset($_POST) && count($_POST)>0)
		{
			$array = array(
			"name"=>$this->input->post("name"),
			"email"=>$this->input->post("email"),
			"subject"=>$this->input->post("subject"),
			"message"=>$this->input->post("message")
			);
			
			
			$this->load->model("Contactus_model");
			$this->Contactus_model->add($array);
			$data["msg"]="1";
		}
		
		
		$this->load->view('template/header',$data);
		$this->load->view('page/contactus');
		$this->load->view('template/footer');
	}
}
