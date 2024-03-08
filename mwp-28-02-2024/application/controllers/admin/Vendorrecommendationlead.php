<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendorrecommendationlead extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('VendorRecommendationModel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/AdminLogin');
        }
        else{
            $data["result"]=$this->VendorRecommendationModel->getpaymentdata();
            //var_dump($data);
            $this->load->view('admin/vendorlead-data/lead-list',$data);
        }
    }

    // public function veiwdetail()
    // {
    //    $id=$this->uri->segment(4);
    //    $data["result"]=$this->VendorRecommendationModel->getdetaildata($id);
    //    $this->load->view('admin/decor-lead/detail-page',$data);
    // }



}