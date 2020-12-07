<?php
class Products_model extends CI_Model {

  function fetch_data(){
    $query = $this->db->query("SELECT * FROM products ORDER BY id DESC");
    return $query;
  } 
  
  function delete_data($id){
    $this->db->where("id", $id);
    $this->db->delete("products");
  }

  function edit_products($id){  
    $this->db->select('*');
    $this->db->where("id", $id);  
    $row = $this->db->get("products");  
    return $row->row_array();
  }  

  function product_update($id, $data){
    $this->db->where("id", $id);  
    $this->db->update('products', $data);
  }

  function view_products($id){  
    $this->db->select('*');
    $this->db->where("id", $id);  
    $row = $this->db->get("products");  
    return $row->row_array();
  }
}
