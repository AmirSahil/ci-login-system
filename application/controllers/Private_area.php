

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
    $this->load->model("Cart_model");
    $page_data['count_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
    $page_data['fetch_data'] = $this->Home_model->fetch_data();
    $page_data['fetch_user'] = $this->session->userdata('name');
    $page_data['page_title'] = 'User Home';
    $page_data['page'] = 'userhome';
    $this->load->view('front/index',$page_data);
   //   $this->load->view('front/pages/register');
 }

 public function product_view()
    {
        $this->load->model("Viewproduct_model");
        $this->load->model("Cart_model");
        $page_data['count_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
        $page_data['edit'] = $this->Viewproduct_model->view_products($this->uri->segment('3'));
        $page_data['fetch_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
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
          redirect('private_area/cart');
        } else{
          $this->product_view();
        }
					
			} else{
				$this->index();
			}
    }

    public function cart(){
      $this->load->model("Cart_model");
      $page_data['count_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
      $page_data['fetch_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
      $page_data['total_price'] = $this->Cart_model->total($this->session->userdata('id'));
      $page_data['fetch_user'] = $this->session->userdata('name');
      $page_data['page_title'] = 'User Cart';
      $page_data['page'] = 'cart';
      $this->load->view("front/index", $page_data);
    }

    public function checkout()
    {
      $this->load->model("Cart_model");
      $page_data['count_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
      $page_data['total_price'] = $this->Cart_model->total($this->session->userdata('id'));
      $page_data['fetch_user'] = $this->session->userdata('name');
      $page_data['page_title'] = 'User Checkout';
      $page_data['page'] = 'checkout';
      $this->load->view("front/index", $page_data);
    }

    public function add_checkout()
    {

      if($this->session->userdata('id')){
				if($this->input->post('upload')){
          $this->load->model("Cart_model");
          $fetch_data = $this->Cart_model->fetch_data($this->session->userdata('id'));
          if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
              if($row->user_id == $this->session->userdata('id')){
					      $data = array(
                  'product_id' => $row->product_id,
                  'user_id' => $row->user_id,
                  'first_name' => $this->input->post('firstname'),
                  'last_name' => $this->input->post('lastname'),
                  'address' => $this->input->post('address'),
                  'phone' => $this->input->post('phone'),
                  'email' => $this->input->post('email'),
                  'product_qty' => $row->product_qty,
                  'sub_total' => $row->total_price
                );

                $this->load->model('Cart_model');
                $this->Cart_model->insert_checkout($data);
                $this->load->model("Cart_model");
                $this->Cart_model->delete_cart($this->session->userdata('id'));
              } 
            }
          }else{
              echo 'bo products to checkout';
          }
    
          $this->thankyou();
        } else{
          $this->product_view();
        }
					
			} else{
				$this->index();
			}
    }

    public function thankyou(){
      $page_data['page_title'] = 'Order Placed';
      $page_data['page'] = 'thankyou';
      $this->load->view("front/index", $page_data);
    }

    public function myorders(){
      $this->load->model('Cart_model');
      $page_data['count_data'] = $this->Cart_model->fetch_data($this->session->userdata('id'));
      $page_data['fetch_details'] = $this->Cart_model->fetch_products();
      $page_data['fetch_order'] = $this->Cart_model->fetch_orders();
      $page_data['page_title'] = 'My Orders';
      $page_data['page'] = 'myorders';
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