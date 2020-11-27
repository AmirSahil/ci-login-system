<?php

class Adminadduser extends CI_Controller
{

    public function index()
    {
        $page_data['page']='users';
        $this->load->view("admin/index",$page_data);
    }

    /*Insert*/
    public function savedata()
    {
        /*load registration view form*/

        $this->load->model('adduser_model');
        /*Check submit button */
        $data = array(
            'user_id' => $this->input->post('id'),
            'user_fullname' => $this->input->post('username'),
            'email_idno' => $this->input->post('email_id'),
            'user_password' => $this->input->post('password'),
            'user_login_status' => $this->input->post('login_status'),
        );
       $this->AddUser_Model->insert_data($data);
        }
    public function inserted(){
        $this->index();
    }
    }
?>
