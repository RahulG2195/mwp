<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor_review extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('VendorPanel/ReviewModel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('dv_id')) {
            redirect('VendorPanel/Login');
        }
        else{
            $vendor_id = $this->session->userdata('dv_id');
//            $vendor_id = '1446';
            
            $data["result"]=$this->ReviewModel->getreviewdata($vendor_id);
            //var_dump($data);exit;
            $this->load->view('VendorPanel/review/review-list',$data);
        }
    }

    public function givereply()
    {
        $id=$this->uri->segment(4);
        $this->load->view('VendorPanel/review/review-list',$data);

       
    }



}