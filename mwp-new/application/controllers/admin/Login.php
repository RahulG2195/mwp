<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/LoginModel');
        
    }

    public function index()
    {
        if ($this->session->userdata('dv_id')) {
            redirect('admin/admin');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('Username', 'Username', 'required|trim');
            $this->form_validation->set_rules('Password', 'Password', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("Username");
                $password = md5($this->input->post("Password"));

                $data["password"] = $this->LoginModel->getpassword($username);
                // pr($data["password"], '');exit;

                if ($data["password"][0]["password"] == $password) {

                    $result["user"] = $this->LoginModel->getlogindata($username, $password);

                    if (!empty($result)) {

                        $this->session->set_userdata('user_name', $result["user"]["user_name"]);
                        $this->session->set_userdata('dv_id', $result["user"]["dv_id"]);
                        $this->session->set_userdata('role', $result["user"]["role"]);

                        redirect('admin/Vendor_Dashboard');
                    } else {

                        $this->session->set_flashdata('err_msg', 'Invalid Credentials');

                        $this->load->view('admin/login');
                    }
                }else{
                    $this->session->set_flashdata('err_msg', 'Please Enter Valid Password');
                    $this->load->view('admin/login');
                }
            } else {
                $this->session->set_flashdata('err_msg', 'Someting Went wrong');
                $this->load->view('admin/login');
            }
        } else {
            $this->load->view('admin/login');
        }
        // $this->load->view('admin/login');
    }

    public function logout()
    {
        // echo 1;exit;
        $this->session->sess_destroy();

        redirect('admin/Login');
    }
}
