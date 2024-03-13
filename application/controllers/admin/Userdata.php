<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Userdata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('Usermodel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/AdminLogin');
        }
        else{
            $data["result"]=$this->Usermodel->getdashboarduserdata();
            $this->load->view('admin/user-data/user-list',$data);
        }
    }



}