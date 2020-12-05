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

    function edit_users($id){
        $this->db->select('*');
        $this->db->where("id", $id);
        $row = $this->db->get("users");
        return $row->row_array();
    }
  function update_data($data, $id){  
    $this->db->where("id", $id);  
    $this->db->update("users", $data);
  }  
}
