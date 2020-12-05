<?php
class Home_model extends CI_Model {

  function fetch_data(){
    $query = $this->db->query("SELECT * FROM products ORDER BY id ASC");
    return $query;
  } 
}
