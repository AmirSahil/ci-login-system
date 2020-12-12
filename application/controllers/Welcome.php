<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model("Home_model");
    	$page_data['fetch_data'] = $this->Home_model->fetch_data();
    	$page_data['page_title'] = 'Ecommerce CI';
		$page_data['page'] = 'home';
		$this->load->view('front/index',$page_data);
	}

	public function product_view()
    {
        $this->load->model("Viewproduct_model");
        $this->load->model("Cart_model");
        $page_data['edit'] = $this->Viewproduct_model->view_products($this->uri->segment('3'));
        $page_data['fetch_data'] = $this->Cart_model->fetch_data();
        $page_data['page_title'] = 'Ecommerce CI';
        $page_data['page'] = 'welcomeview';
        $this->load->view("front/index", $page_data);
    }
	
}
