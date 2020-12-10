

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
    $this->load->model("Home_model");
    $page_data['fetch_data'] = $this->Home_model->fetch_data();
    $page_data['page_title'] = 'User Home';
    $page_data['page'] = 'userhome';
    $this->load->view('front/index',$page_data);
   //   $this->load->view('front/pages/register');
 }

 public function product_view()
    {
        $this->load->model("Viewproduct_model");
        $page_data['edit'] = $this->Viewproduct_model->view_products($this->uri->segment('3'));
        $page_data['page_title'] = 'Product View';
        $page_data['page'] = 'productview';
        $this->load->view("front/index", $page_data);
    }


    public function add_cart()
    {

      if($this->session->userdata('id')){
				if($this->input->post('upload')){
          $this->load->model("Viewproduct_model");
          $product = $this->Viewproduct_model->view_products($this->uri->segment('3'));
					$data = array(
            'user_id' => $this->session->userdata('id'),
            'product_id' => $product['id'],
						'product_name' => $product['product_name'],
            'product_price' => $product['product_price'],
            'product_qty' => $this->input->post('quantity'),
            'product_img' => $product['product_image'],
            'total_price' => ($product['product_price'] * $this->input->post('quantity'))
					);
                    
          $this->load->model('Cart_model');
          $this->Cart_model->insert_data($data);
          $this->cart();
        } else{
          $this->product_view();
        }
					
			} else{
				$this->index();
			}
    }

    public function cart(){
      $this->load->model("Cart_model");
      $page_data['fetch_data'] = $this->Cart_model->fetch_data();
      $page_data['total_price'] = $this->Cart_model->total($this->session->userdata('id'));
      $page_data['fetch_user'] = $this->Cart_model->fetch_user($this->session->userdata('id'));
      $page_data['page_title'] = 'User Cart';
      $page_data['page'] = 'cart';
      $this->load->view("front/index", $page_data);
    }

    public function checkout()
    {
        $this->load->model("Viewproduct_model");
        $page_data['edit'] = $this->Viewproduct_model->view_products($this->uri->segment('3'));
        $page_data['page_title'] = 'User Checkout';
        $page_data['page'] = 'checkout';
        $this->load->view("front/index", $page_data);
    }


    public function delete_data()
    {
        $id = $this->uri->segment(3);
        $this->load->model("Cart_model");
        $this->Cart_model->delete_data($id);
        redirect("Private_area/deleted");
    }

    public function deleted()
    {
        $this->cart();
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