<?php
class AddUser_Model extends CI_Model
{
	function saverecords($data)
	{
          $this->db->insert('users',$data);
		  return $this->db->insert_id();
	}
	function insert_data($data){
		$this->db->insert("users", $data);
	} 
}