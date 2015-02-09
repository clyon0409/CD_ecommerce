<?php

class Ecommerce extends CI_Model {

	function confirm_password($data)
	{
		$query = 'SELECT * FROM admins WHERE email = ?';
		$ret_data = $this->db->query($query, array($data['email']))->row_array();
		
		if ($ret_data['email'] == $data['email'])
		{
			if($ret_data['password'] == $data['password'])
				return true;
			else
				return false;
		}
		else
			return false;
	}

	function get_category()
	{
		$query = 'SELECT name, id FROM categories';
		return $this->db->query($query)->result_array();
		// var_dump($res); die();
	}

	function get_category_id($cat_name)
	{
		$query = 'SELECT id FROM categories WHERE name = ?';
		return $this->db->query($query, array($cat_name))->row_array();
	}

	function get_product_by_id($product_id)
	{
		$query = 'SELECT products.*, GROUP_CONCAT(images.url) as image_urls, GROUP_CONCAT(images.main_pic) as main_pics, categories.name FROM products
				 JOIN images ON images.product_id = products.id
				 JOIN categories ON categories.id = products.category_id  WHERE products.id = ?
				 GROUP BY products.id';
		$result = $this->db->query($query, array($product_id))->row_array();
		//var_dump($result); die();
		$result['images'] = explode(',',$result['image_urls']);
		$result['main_pic_flags'] = explode(',',$result['main_pics']);
		return $result;
	}

	function insert_category($cat_name)
	{
		$query = 'INSERT INTO categories (name) VALUES (?)';
		$values = array($cat_name);
	}

 	
	function insert_product($data){
		// echo 'got into model insert product</br>';
		// var_dump($data);
		if (!empty($data['new_category'])){
			$this->insert_category($data['new_category']);
			$data['category'] = $data['new_category'];
		}

		$cat_id=$this->get_category_id($data['category']);

		$price = floatval(rand(1,100).'.'.rand(0,99));
		$rating = rand(1,5);
		$pic_url_1 = '../../assets/engineer.jpg';
		$pic_url_2 = '../../assets/engineer.jpg';
		$pic_url_3 = '../../assets/engineer.jpg';
		$inventory_count = rand(100,1000);
		$amount_sold = 0;
		$main_pic = 1;
		$query = 'INSERT INTO products (name, price, rating, inventory_count, amount_sold, description, category_id, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?)';
		$values = array($data['name'], $price, $rating, $inventory_count, $amount_sold, $data['description'], $cat_id['id'], date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

}