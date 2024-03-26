<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	  public function __construct() {
        parent::__construct();
        $this->load->model('admin/CategoryModel');
        $this->load->model('admin/CityModel');
        $this->load->model('VendorModel');
        $this->load->model('BlogModel');
    }
    public function index()
    {   
        $data["blog"]=$this->BlogModel->getblogdata();
        $data["blogcategory"]=$this->BlogModel->getblogcategory();
        $data['category'] = $this->CategoryModel->GetList();
        $data['city'] = $this->CityModel->GetList();
        $data['trusted_vendor'] = $this->VendorModel->Trusted_Vendor();
        $this->load->view('front/index', $data);
    }
    
    public function index1()
    {   
//        $data["blog"]=$this->BlogModel->getblogdata();
//        $data["blogcategory"]=$this->BlogModel->getblogcategory();
        $data['category'] = $this->CategoryModel->GetList();
        $data['city'] = $this->CityModel->GetList();
        $data['vendor_deals'] = $this->VendorModel->Vendor_Deals();
//        echo "<pre>";
//        print_r($data);
//        exit;
        $this->load->view('front/index_1', $data);
    }

}
