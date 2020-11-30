<?php
class Addproducts_model extends CI_Model 
{
	function saverecords($data)
	{
          $this->db->insert('products',$data);
		  return $this->db->insert_id();
	}
	function insert_data($data){
		$this->db->insert("products", $data);
	} 
}
