<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admindashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('DashboardModel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('user_id')) {

            $data["user"]=$this->DashboardModel->getdashboarduserdata();
            $data["paidvendor"]=$this->DashboardModel->getpaidvendordata();
            $data["totalvendor"]=$this->DashboardModel->gettotalvendordata();
            $data["totalactivevendor"]=$this->DashboardModel->getactivevendors();
            
            $data["designdecordata"]=$this->DashboardModel->designdecordata();
            $data["vendordata"]=$this->DashboardModel->vendorrecommendata();
            $data["weddinglead"]=$this->DashboardModel->weddingleaddata();
            //Vendor Data
            $data["venuedata"]=$this->DashboardModel->getvenuedata();

            $data["birdaldata"]=$this->DashboardModel->getbridaldata();

            $data["groomdata"]=$this->DashboardModel->getgroomdata();

            $data["photography"]=$this->DashboardModel->photographydata();

            $data["makeup"]=$this->DashboardModel->makeupdata();

            $data["mehendiartist"]=$this->DashboardModel->mehandidata();

            $data["bridaljwellery"]=$this->DashboardModel->bridaljwellerydata();

            $data["decoration"]=$this->DashboardModel->decorationdata();
            
            $data["gift"]=$this->DashboardModel->giftdata();

            $data["catering"]=$this->DashboardModel->cateringdata();

            $data["inivitations"]=$this->DashboardModel->invitationdata();
            //var_dump($data["paidvendor"]);exit;
            $this->load->view("admin/admin-dashboard",$data);
        }
        else{
            redirect('AdminLogin');
        }

        

    }

}