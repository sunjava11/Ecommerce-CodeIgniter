<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct()
    {
        parent::__construct();
       $this->load->model('admin/Order_model',"Order");				
    } 
		
	public function index()
	{
		$data["pagetitle"]="Checkout";
		
			
		 if(isset($_POST) && count($_POST)>0)
		 {
			
			$data["ProductName"]=$this->input->post("ProductName");
			$data["ProductId"]=$this->input->post("ProductId");
			$data["ProductSalePrice"]=$this->input->post("ProductSalePrice");
			$data["DeliveryCharges"]=$this->input->post("DeliveryCharges");
			$data["TotalCOD"]=$this->input->post("TotalCOD");
			
			$data["productVariation"]=$this->input->post("productVariation");			
			
			$this->load->view('template/header',$data);
			$this->load->view('checkout/checkout_view',$data);
			$this->load->view('template/footer');	
		 }
		 else{
			
		  $this->load->view('template/header',$data);
		  $this->load->view('checkout/emptycart_view',$data);
		  $this->load->view('template/footer');	
		 }
		
		
	}
	
	
	
	
	public function PlaceOrder()
	{
		if(isset($_POST) && count($_POST)>0)
		{
			if(isset($_SESSION["token"]))
			{
				if($_SESSION["token"]==$this->input->post("token"))
				{
					unset($_SESSION["token"]);
	
					date_default_timezone_set("Asia/Karachi");
				$createdDate = date("Y-m-d H:i:s");			
				$this->load->model("admin/Customer_model","Customer");
				$this->load->model("admin/OrderStatus_model");
				
				$customerArray = array(
										"FirstName"=>$this->input->post("FirstName"),
										"LastName"=>$this->input->post("LastName"),
										"Cell1"=>$this->input->post("Cell1"),
										"Cell2"=>$this->input->post("Cell2"),
										"Email"=>$this->input->post("Email"),
										"ShippingAddress"=>$this->input->post("ShippingAddress"),
										"City"=>$this->input->post("City"),
										"NearMostFamousPlace"=>$this->input->post("NearMostFamousPlace"),
										"CreatedDate"=>$createdDate
										);
										
										
										
				$customerId = $this->Customer->add_customer($customerArray);	
	
				$orderArray = array(
							"ProductId"=>$this->input->post("ProductId"),
							"CODAmount"=>$this->input->post("CODAmount"),
							"ShippingCost"=>$this->input->post("ShippingCost"),
							"CustomerId"=>$customerId,
							"ProductVariation"=>json_encode($this->input->post("productVariation")),
							"OrderStatusId"=>$this->OrderStatus_model->get_order_status_processing()->OrderStatusId	,
	"CreatedDate"=>$createdDate						
				);
	
				
				$orderId = $this->Order->add_order($orderArray);
				
			
				$redirectString = "Checkout/ThankYou/?orderId=".$orderId."&customerName=".$customerArray["FirstName"]." ".$customerArray["LastName"]."";
				$_SESSION["redirect_checkout"]=$redirectString;
				redirect($redirectString);
				
				}
			}	
			else{
				redirect($redirectString);
			}					
		}
		else{
			$error["heading"]="Something went wrong";
			$error["message"]="Please try again or contact admin";
			
			$this->load->view('errors/html/error_general',$error);
			
		}
			
	}
	
	
	public function ThankYou()
	{
		$orderId = $this->input->get("orderId");
		$customerName = $this->input->get("customerName");
		
		$data["CustomerName"]=$customerName;
		$data["OrderId"]=$orderId;
		$data["pagetitle"]="Thank You";
			
			
		$this->load->model("admin/Product_model");
		$isNewThankyouPage  = $this->Product_model->IsNewThankyouPage($orderId);
		
		
		
			 $data["fbPixel"]="";
 
 if($isNewThankyouPage==true)
 {
	 $data["fbPixel"]="";
 }
			
			 $this->load->view('template/header',$data);
			 $this->load->view('checkout/thankyou_view',$data);
			 $this->load->view('template/footer');
	}
	
	
}
