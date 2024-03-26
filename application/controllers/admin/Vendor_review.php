<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor_review extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('ReviewModel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/AdminLogin');
        }
        else{
            $data["result"]=$this->ReviewModel->getreviewdata();
            //var_dump($data);exit;
            $this->load->view('admin/vendor-review/review-list',$data);
        }
    }

    public function givereply()
    {
        $id=$this->uri->segment(4);
        $this->load->view('admin/vendor-review/review-list',$data);

       
    }



}