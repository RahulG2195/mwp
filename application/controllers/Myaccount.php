<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        //$this->load->model('VendorModel');
        $this->load->model('LoginModel');
        $this->load->model('Designdecorleadmodel');
        $this->load->model('VendorRecommendationModel');
    }
    public function index()
    {
        $id=$this->session->userdata('userid');
        $data["result"]=$this->LoginModel->getuserdata($id);
        $data["decorplan"]=$this->Designdecorleadmodel->getdesignuserplandata($id);

        $data["recommendplan"]=$this->VendorRecommendationModel->getrecommenduserdata($id);

        //    echo "<pre>";
        //   print_r($data["recommendplan"]);
        //   echo "</pre>";
        //var_dump($data["decorplan"]);exit;
        $this->load->view('front/my-account',$data);
    }


    public function myaccount()
    {
        $this->load->view('front/my-account-new');
    }





 }

?>