<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Weddingplanninglead extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('Weddingplanningleadmodel');
        
    }
    public function index()
    {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/AdminLogin');
        }
        else{
            $data["result"]=$this->Weddingplanningleadmodel->getdashboarduserdata();
            $this->load->view('admin/wedding-planning-lead/lead-list',$data);
        }
    }

    public function deletelead()
    {
       $id=$this->uri->segment(4);
       $data["result"]=$this->Weddingplanningleadmodel->deletedata($id);

       redirect('admin/Weddingplanninglead');
       //$this->load->view('admin/wedding-planning-lead/lead-list',$data);
    }


}