<?php
class Cart_model extends CI_Model
{
	function insert_data($data){
		$this->db->insert("user_cart", $data);
	} 

	function insert_checkout($data){
		$this->db->insert("user_checkout", $data);
	} 

	function fetch_data($id){
		$query = $this->db->query("SELECT * FROM user_cart WHERE user_id = $id");
		return $query;
	  }  

	  function fetch_data_all(){
		$query = $this->db->query("SELECT * FROM user_cart ORDER BY id ASC");
		return $query;
	  }  

	  function fetch_products(){
		$query = $this->db->query("SELECT * FROM products ORDER BY id ASC");
		return $query;
	  }  

	  function fetch_orders(){
		$query = $this->db->query("SELECT * FROM user_checkout ORDER BY id ASC");
		return $query;
	  }   
	  
	function total($id){
		$query = $this->db->query("SELECT SUM(total_price) as total FROM user_cart WHERE user_id = $id");
		return $query->result();
	}

	function delete_data($id){
		$this->db->where("id", $id);
		$this->db->delete("user_cart");
	}

	function delete_cart($id){
		$this->db->where("user_id", $id);
		$this->db->delete("user_cart");
	}
}