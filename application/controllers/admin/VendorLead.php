<?php
defined('BASEPATH') or exit('No direct script access allowed');
class VendorLead extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('VendorQueryModel');
        
    }
    // public function index()
    // {
    //     if (!$this->session->userdata('admin_id')) {
    //         redirect('admin/AdminLogin');
    //     }
    //     else{
    //         $data["result"]=$this->VendorQueryModel->getvendorqueryalldata();
    //         $this->load->view('admin/vendor-lead-data/vendor-list',$data);
    //     }
    // }

    public function index()
    {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/AdminLogin');
        }
        else{
            $data["result"]=$this->VendorQueryModel->getvendorqueryalldatanew();
            $this->load->view('admin/vendor-lead-data/vendor-list-new',$data);
        }
    }




}