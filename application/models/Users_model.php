<?php
class Users_model extends CI_Model {

  function fetch_data(){
    $query = $this->db->query("SELECT * FROM users ORDER BY id DESC");
    return $query;
  } 
  
  function delete_data($id){
    $this->db->where("id", $id);
    $this->db->delete("users");
  }

  function fetch_single_data($id){
    $this->db->where("id", $id);
    $query = $this->db->query("SELECT * FROM users WHERE id = $id");
    return $query;
  }  
   
  function update_data($data, $id){  
    $this->db->where("id", $id);  
    $this->db->update("users", $data);
  }  
}
