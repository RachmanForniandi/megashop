<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_products extends CI_Model
{
	
	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('products');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		}else{
			return array();
		}
	}

}