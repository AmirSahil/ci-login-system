<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        if ($this->input->post()) {
            $email = $this->input->post('email_id');
            $password = sha1($this->input->post('password'));

            $result = $this->db->get_where('users', array('email_id' => $email, 'password' => $password, 'role' => 'System Admin', 'login_status'=>'Active'))->result_array();
            $uid = $result[0]['id'];
            $first_name = $result[0]['first_name'];
            $last_name = $result[0]['last_name'];
            $email = $result[0]['email_id'];

            $this->session->set_userdata('admin_uid', $uid);
            $this->session->set_userdata('admin_first_name', $first_name);
            $this->session->set_userdata('admin_last_name', $last_name);
            $this->session->set_userdata('admin_email', $email);
        }
        if ($this->session->userdata['admin_uid']) {
            $page_data['page_title'] = 'Dashboard';
            $page_data['page'] = 'dashboard';
            $this->load->view('admin/index', $page_data);
        } else {
            $page_data['page_title'] = "Login Admin";
            $this->load->view('admin/login', $page_data);
        }
    }

    public function products()
    {
        $this->load->model("Products_model");
        $page_data['fetch_data'] = $this->Products_model->fetch_data();
        $page_data['page_title'] = 'Products';
        $page_data['page'] = 'products';
        $this->load->view("admin/index", $page_data);
    }

    public function addproducts()
    {
        $page_data['page_title'] = "Add Products";
        $page_data['page'] = "addproducts";
        $this->load->view('admin/index', $page_data);
    }

    public function form_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("pname", "Product Name", 'required');
        $this->form_validation->set_rules("pprice", "Product Price", 'required|numeric|greater_than[0.99]');
        $this->form_validation->set_rules("pqty", "Product Quantity", 'required|numeric|greater_than[0.99]');


        if($this->session->userdata['admin_uid']){
            if ($this->form_validation->run()) {
                $this->load->model("Addproducts_model");
                $data = array(
                    'product_name' => $this->input->post('pname'),
                    'product_price' => $this->input->post('pprice'),
                    'product_qty' => $this->input->post('pqty'),
                    'product_image' => $this->input->post('pimage'),
                    'product_category' => $this->input->post('pcategory')
                );

                $this->Addproducts_model->insert_data($data);
                redirect("admin/products");

            } else {
                $this->addproducts();
            }
        } else{
            $this->index();
        }
    }

    public function inserted()
    {
        $this->addproducts();
    }

    public function delete_data()
    {
        $id = $this->uri->segment(3);
        $this->load->model("Products_model");
        $this->Products_model->delete_data($id);
        redirect("Admin/deleted");
    }

    public function deleted()
    {
        $this->products();
    }

    public function update_data()
    {
        $this->load->model("Products_model");
        $page_data['edit'] = $this->Products_model->edit_products($this->uri->segment('3'));
        $page_data['page'] = 'editproducts';
        $this->load->view("admin/index", $page_data);
    }

    public function update()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';


        $this->load->library('form_validation');
        $this->form_validation->set_rules("pname", "Product Name", 'required');
        $this->form_validation->set_rules("pprice", "Product Price", 'required|numeric|greater_than[0.99]');
        $this->form_validation->set_rules("pqty", "Product Quantity", 'required|numeric|greater_than[0.99]');
        if (empty($_FILES['pimage']['name']))
        {
            $this->form_validation->set_rules('pimage', 'Image', 'required');
        }

        if($this->session->userdata['admin_uid']){
            if ($this->form_validation->run()) {
                $this->load->model("Products_model");
                $data = array(
                    'product_name' => $this->input->post('pname'),
                    'product_price' => $this->input->post('pprice'),
                    'product_qty' => $this->input->post('pqty'),
                    'product_image' => $this->input->post('pimage'),
                    'product_category' => $this->input->post('pcategory')
                );

                $this->Products_model->product_update($this->uri->segment('3'), $data);
                $this->products();

            } else {
                $this->update_data();
            }
        } else{
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

    public function users()
    {
        $this->load->model("Users_model");
        $page_data['fetch_data'] = $this->Users_model->fetch_data();
        $page_data['page_title'] = 'Users';
        $page_data['page'] = 'users';
        $this->load->view("admin/index", $page_data);
    }

    public function addusers()
    {
        $page_data['page_title'] = "Add Users";
        $page_data['page'] = 'addusers';
        $this->load->view("admin/index", $page_data);
    }

    /*Insert*/
    public function usr_form_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "First Name", 'required');
        $this->form_validation->set_rules("last_name", "Last Name", 'required');
        $this->form_validation->set_rules("email_id", "Email", 'trim|required|valid_email');
        $this->form_validation->set_rules("password", "Password", 'required');
        if($this->session->userdata['admin_uid']){
            if ($this->form_validation->run()) {
                $this->load->model("AddUser_Model");
                $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email_id' => $this->input->post('email_id'),
                    'password' => sha1($this->input->post('password')),
                    'role' => $this->input->post('role'),
                    'login_status' => $this->input->post('login_status'),
                );

                $this->AddUser_Model->insert_data($data);
                redirect("admin/users");

            } else {
                $this->addusers();
            }
        } else{
            $this->index();
        }
    }

    public function users_inserted()
    {
        $this->addusers();
    }

    public function user_delete_data()
    {
        $id = $this->uri->segment(3);
        $this->load->model("Users_model");
        $this->Users_model->delete_data($id);
        redirect("Admin/user_deleted");
    }

    public function user_deleted()
    {
        $this->users();
    }
    public function user_update()
    {
        $this->load->model("Users_model");
        $page_data['edit'] = $this->Users_model->edit_users($this->uri->segment('3'));
        $page_data['page'] = 'editusers';
        $this->load->view("admin/index", $page_data);
    }

    public function update_user()
    { $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "First Name", 'required');
        $this->form_validation->set_rules("last_name", "Last Name", 'required');
        $this->form_validation->set_rules("email_id", "Email", 'trim|required|valid_email');
        $this->form_validation->set_rules("password", "Password", 'required');

        if($this->session->userdata['admin_uid']){
            if ($this->form_validation->run()) {
                $this->load->model("Users_model");
                $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email_id' => $this->input->post('email_id'),
                    'password' => sha1($this->input->post('password')),
                    'role' => $this->input->post('role'),
                    'login_status' => $this->input->post('login_status'),
                );

                $this->Users_model->usersdata_update($this->uri->segment('3'), $data);
                $this->users();

            } else {
                $this-> user_update();
            }
        } else{
            $this->index();
        }
    }
}