<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        //$this->load->model('VendorModel');
        $this->load->model('LoginModel');
        $this->load->model('Designdecorleadmodel');
        $this->load->model('VendorRecommendationModel');
        $this->load->model('WeddingchecklistModel');
        $this->load->model('WishlistModel');
        $this->load->model('Myaccountmodel');
    }
    public function index()
    {
        $id=$this->session->userdata('userid');
        $data["result"]=$this->LoginModel->getuserdata($id);
        $data["decorplan"]=$this->Designdecorleadmodel->getdesignuserplandata($id);
        $data["recommendplan"]=$this->VendorRecommendationModel->getrecommenduserdata($id);
        $data["checklistdata"]=$this->WeddingchecklistModel->getid($id);
        $data["wishlistdata"]=$this->WishlistModel->getwishlistdata($id);
        //var_dump($data["wishlistdata"]);exit;
        $this->load->view('front/my-account',$data);
    }
    public function myaccount()
    {
        $this->load->view('front/my-account-new');
    }

    public function changepassword()
    {
        $id=$this->input->post('userid');
        $data=array(
	        'user_password' =>$this->input->post('new-password'));
	    $result=$this->Myaccountmodel->updatepassword($data,$id);
        // $this->session->set_flashdata('pwd_change', 'Your password has been changed sucessfully');
        // //$this->load->view('front/my-account');
        //  redirect('Myaccount');
	    $message.='<script type="text/javascript">
            alert("Region already added");
        </script>';
        echo $message;
       // redirect('Myaccount');
       $this->load->view('front/my-account');

    }

    
 }

?>