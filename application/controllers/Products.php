<?php 
class Products extends CI_Controller 
{
    public function index(){
        $page_data['page_title'] = 'Products';
        $page_data['page'] = 'products';
        $this->load->view('admin/index',$page_data);
    }

    public function form_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("pname", "Product Name", 'required');
        $this->form_validation->set_rules("pprice", "Product Price", 'required');
        $this->form_validation->set_rules("pqty", "Product Quantity", 'required');

        if($this->form_validation->run()){
            $this->load->model("Products_model");
            $data = array(
                'product_name'  => $this->input->post('pname'),
                'product_price'  => $this->input->post('pprice'),
                'product_qty'  => $this->input->post('pqty'),
                'product_image'  => $this->input->post('pimage'),
                'product_category'  => $this->input->post('pcategory')
            );

            $this->Products_model->insert_data($data);
            redirect(base_url() . "inserted");

        } else{
            $this->index();
        }
    }
    
    public function inserted(){
        $this->index();
    }
}
?>

