<?php
class Cart_model extends CI_Model
{
	function insert_data($data){
		$this->db->insert("user_cart", $data);
	} 

	function fetch_data(){
		$query = $this->db->query("SELECT * FROM user_cart ORDER BY id ASC");
		return $query;
	  } 

	  function fetch_user($id){
		$this->db->select('name');
		$this->db->where("id", $id);
		$row = $this->db->get("codeigniter_register");  
    	return $row->row_array();
	  } 

	function total($id){
		$query = $this->db->query("SELECT SUM(total_price) as total FROM user_cart WHERE user_id = $id");
		return $query->result();
	}

	function delete_data($id){
		$this->db->where("id", $id);
		$this->db->delete("user_cart");
	  }
}