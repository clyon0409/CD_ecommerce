<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function add_new()
	{
		$this->load->view('edit_product');
	}

	public function cancel()
	{
		echo 'got into cancel method';
		//reset values
	}

	public function close()
	{
		$this->load->view('product_dashboard');
	}

	public function delete()
	{
		echo 'got into delete method';
	}

	public function edit()
	{
		$this->load->view('edit_product');
	}

	public function login()
	{
		echo 'got into login';
		var_dump($this->input->post());

		$success = true;
		if($success)
		{
			$this->load->view('order_dashboard');
			$this->load_order_data();
		}
	}

	public function next()
	{
		echo 'got into next method';
	}

	public function orders()
	{
		$this->load->view('order_dashboard');
		$this->load_order_data();
	}

	public function pagination()
	{
		echo 'got into pagination method';
	}

	public function preview()
	{
		$this->load->view('product');
	}
	public function previous()
	{
		echo 'got into previous function';
	}

	public function products()
	{
		$this->load->view('product_dashboard');
		$this->load_product_data();
	}

	public function show_order()
	{
		$this->load->view('show_order');
	}

	public function update_product()
	{
		echo 'got into update method';
		var_dump($this->input->post());
	}

	private function load_order_data()
	{
		//run query to get all order data
		$this->load->view('partial_view_orders_table');
	}

	private function load_product_data()
	{
		//run query to get all product data
		$this->load->view('partial_view_products_table');
	}


}

//end of main controllers