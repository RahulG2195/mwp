<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminloginModel');
        
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $result = $this->AdminloginModel->getuser($username,$password);
            if(!empty($result))
            {    
                $this->session->set_userdata('user_name', $result->name);
                $this->session->set_userdata('admin_id', $result->admin_id);
                $this->session->set_userdata('email', $result->email);
                redirect('admin/Admindashboard');
            }
            else{
                $this->session->set_flashdata('err_msg', 'Invalid Credentials');
                $this->load->view('admin/admin-login');
            }

        }
        else
        {
            $this->load->view('admin/admin-login');
        }

        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/AdminLogin');
    }
 
    public function forgotpassword()
    {

        $this->form_validation->set_rules('emailid', 'email id ', 'required|trim');

        if($this->form_validation->run() == TRUE)
        {
            $email = $this->input->post('emailid');
            $findemail = $this->AdminloginModel->ForgotPassword($email); 
            
            if(!empty($findemail))
            {
                $this->AdminloginModel->sendpassword($findemail);        
            }
            else
            {
                $this->session->set_flashdata('err_msg',' Email not found!');
                redirect(base_url().'admin/AdminLogin/forgotpassword','refresh');
            }
            
        }
        else
        {
            $this->load->view('admin/forgot-password');
        }
    }

    public function changepassword()
    {
        //$this->form_validation->set_rules('email', 'Username', 'required|trim');
        $this->form_validation->set_rules('old-password', 'Password', 'required|trim');
        $this->form_validation->set_rules('new-password', 'Password', 'required|trim');  

        if($this->form_validation->run() == TRUE)
        {

            $user_id = $this->session->userdata('admin_id');
            $current_password = $this->input->post('old-password');
            $new_password = $this->input->post('new-password');


            $data=$this->AdminloginModel->verify_password($user_id, $current_password);
            //var_dump($data);exit;
            // Check if the current password is correct
            if ($this->AdminloginModel->verify_password($user_id, $current_password)) {
                // Update the password
                $this->AdminloginModel->update_password($user_id, $new_password);
                $this->session->set_flashdata('success', 'Password updated successfully!');
                redirect('admin/AdminLogin/changepassword');
            } else {
                $this->session->set_flashdata('error', 'Incorrect current password!');
                redirect('admin/AdminLogin/changepassword');
            }
            //$email = $this->input->post('emailid');
        }
        else
        {
             $this->load->view('admin/change-password');
        }



        
    }

        


}




