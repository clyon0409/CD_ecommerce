<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function catalog()
	{
		$result1= $this->Ecommerce->get_images();
		$result2 = $this->Ecommerce->get_all_category_with_counts();
		// $datas['types'] = $result2;
		// // var_dump($result);
		// $images ['imgs'] = $result1;
		//var_dump($result2); die();
		$array = array(
					'types' => $result2,
					'imgs' => $result1
					);
		$this->load->view('catalog', $array);
	}


	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('home');
	}

	public function product()
	{
		$this->load->view('product');
	}

	
	public function build_cart()
	{

		if(!empty($this->session->userdata('cart_id')))
		{
			$item = $this->input->post();
			$item['cart_id']= $this->session->userdata('cart_id');
			$cart_id = $this->session->userdata('cart_id');
			$this->load->model('Customer');
			$this->Customer->add_to_cart($item);
			$qty = $this->Customer->qty_in_cart($cart_id);
			$this->session->set_userdata('cart_qty', $qty[0]['total_qty']);
		}
		else 
		{
			$this->load->model('Customer');
			$this->Customer->create_cart();
			$cart_id = $this->db->insert_id();
			$this->session->set_userdata('cart_id', $cart_id);

			$item = $this->input->post();
			$item['cart_id']= $cart_id;
			$this->Customer->add_to_cart($item);
			$qty = $this->Customer->qty_in_cart($cart_id);
			$this->session->set_userdata('cart_qty', $qty[0]['total_qty']);
		}
	}

	public function buy(){
		echo "Thank you for buying!";
	}

	public function cart()
	{
		$cart_id = $this->session->userdata('cart_id');
		$this->load->model('Customer');
		$items = $this->Customer->display_cart($cart_id);
		$cart_total = $this->Customer->cart_total($cart_id);
		$this->load->view('cart', array('items' => $items, 'cart_total' => $cart_total));
	}

	public function cups(){
		$this->load->view('cups');
	}

	public function delete_item($product_id)
	{
		$cart_id = $this->session->userdata('cart_id');
		$this->load->model('Customer');
		$this->Customer->delete_item($product_id, $cart_id);
		$qty = $this->Customer->qty_in_cart($cart_id);
		$this->session->set_userdata('cart_qty', $qty[0]['total_qty']);
		$this->cart();
	}


	public function checkout()
	{
		$result = $this->input->post();
		$this->load->model('Customer');

		// add to customer info to db
		$this->Customer->add_customer($result);
		$result['customer_id'] = $this->db->insert_id();

		// add customer shipping address to db
		$this->Customer->add_shipping($result);

		// add order to db
		$cart_id = $this->session->userdata('cart_id');

		$total = $this->Customer->cart_total($cart_id);
		foreach($total as $value)
		{
			$order['total'] = $value;
		}
		$order['cart_id'] = $this->session->userdata('cart_id');
		$order['customer_id'] = $result['customer_id'];
		$this->Customer->submit_order($order);


	}

	public function get_product($category_id){
	
		$result = $this->Ecommerce->get_product_by_category($category_id);
		var_dump($result); die();
		$product['images'] = $result;
		$this->load->view('catalog', $product);
	}


	
	public function pay_info()
	{
		$result = $this->input->post();


 	 	$shipping['first_name'] = $result["shipping_first_name"];
 	 	$shipping['last_name'] = $result["shipping_last_name"];
  		$shipping['address'] = $result["shipping_address"];
  		$shipping['address_2'] = $result["shipping_address_2"];
  		$shipping['city'] = $result["shipping_city"];
  		$shipping['state'] = $result["shipping_state"];
  		$shipping['zip'] = $result["shipping_zip"];



	  	$billing['first_name'] = $result["billing_first_name"];
	  	$billing['last_name'] = $result["billing_last_name"];
	  	$billing['address'] = $result["billing_address"];
	  	$billing['address_2'] = $result["billing_address_2"];
	 	$billing['city'] = $result["billing_city"];
	 	$billing['state'] = $result["billing_state"];
	 	$billing['zip'] = $result["billing_zip"];
	 	$billing['card_type'] = $result["billing_card_type"];
	 	$billing['card_number'] = $result["billing_card_number"];
	 	$billing['security_code'] = $result["billing_security_code"];
	  	$billing['billing_expiration'] = $result["billing_expiration"];

	}


}   //end of main controller
}

//end of main controller