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
}