<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$data["pagetitle"]="Home";
		$this->load->model("ProductCat");
		$this->load->model("admin/Product_model","Product");
		
		$view["allProductCatList"]=$this->ProductCat->GetAlllProductCat();
		
		$latestProducts = $this->Product->GetLatestProducts(12);
		$view["LatestProducts"] = array();
		$view["LatestProducts2"] = array();
		
		list($view["LatestProducts"], $view["LatestProducts2"]) = array_chunk($latestProducts, ceil(count($latestProducts) / 2));
		
		
		$this->load->view('template/header',$data);
		$this->load->view('home/home_view',$view);
		$this->load->view('template/footer');
	}
}
