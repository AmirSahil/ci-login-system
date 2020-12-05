

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('');
  }
 }

 function index()
 {
    $this->load->model("Products_model");
    $page_data['fetch_data'] = $this->Products_model->fetch_data();
    $page_data['page_title'] = 'User Home';
    $page_data['page'] = 'userhome';
    $this->load->view('front/index',$page_data);
   //   $this->load->view('front/pages/register');
 }

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('');
 }
}

?>