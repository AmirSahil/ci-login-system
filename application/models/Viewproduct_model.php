<?php
class Viewproduct_model extends CI_Model {

  function view_products($id){  
    $this->db->select('*');
    $this->db->where("id", $id);  
    $row = $this->db->get("products");  
    return $row->row_array();
  }
}
