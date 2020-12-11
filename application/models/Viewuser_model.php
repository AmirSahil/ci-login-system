<?php
class Viewuser_model extends CI_Model {

  function view_user($id){
    $this->db->select('*');
    $this->db->where("id", $id);  
    $row = $this->db->get("users");
    return $row->row_array();
  }
}
