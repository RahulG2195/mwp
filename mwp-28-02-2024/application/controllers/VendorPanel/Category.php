<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('VendorPanel/CategoryModel');
        if (!$this->session->userdata('dv_id')) {
            redirect('VendorPanel/Login');
        }
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "category";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('VendorPanel/category/add_data');
        $response['editlink'] = base_url('VendorPanel/category/edit_data/');
        $response['deletelink'] = base_url('VendorPanel/category/delete_data/');
        $response['list'] = $this->CategoryModel->GetList(array());

        $this->load->view('VendorPanel/category/list', $response);
    }

    public function add_data() {

        if (null !== ($this->input->post('create'))) {            
            $data = $this->input->post();
            $data = array_slice($data, '1', '2');
//            echo "<pre>";
//            print_r($data);
//            exit;            
            $data['created_date'] = DATETIME;
//            $data['is_deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->CategoryModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ERRMSG);
            }
            redirect('VendorPanel/category');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "category";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('VendorPanel/category/add_data');
            $this->load->view('VendorPanel/category/add', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 2);
//                        echo "<pre>";
//            print_r($data);
//            exit; 
            $data = $this->security->xss_clean($data);
            $id = $this->CategoryModel->UpdateData(array('category_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ERRMSG);
            }
            redirect('VendorPanel/category');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "Category";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->CategoryModel->GetData(array('category_id' => $id));
            $response['editlink'] = base_url('VendorPanel/category/edit_data/');
            $this->load->view('VendorPanel/category/edit', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("category_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->CategoryModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('VendorPanel/category');
    }
    
    public function index2() {
        // echo Get_Vendor_detail();
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['lead_details']=[];    
        $data['visitor_details']=[];
        $data['plan_details']=[]; 
            
        $id = $this->session->userdata('dv_id');
            //Total Leads
            $this->load->model('VendorPanel/VendorLeadModel');
            $data['lead_details'] = $this->VendorLeadModel->Get_vendor_lead_detail($id);
            
            //Total Users
            $this->load->model('VendorPanel/VendorUserModel');
            //$id = 3072; //temp
            $visitor_data = $this->VendorUserModel->Get_vendor_visitor_detail($id);
             $data['visitor_details'] = array('vendor_id' => $id,
                                    'visitor' => '0'
            );
            if(!empty($visitor_data)){
                $data['visitor_details'] = $visitor_data;
            }
            
            //Plan Type
            $this->load->model('VendorPanel/VendorPlanModel');
            //$id = 28922; //temp
            $plan_data = $this->VendorPlanModel->Get_vendor_plan_detail($id);
            $data['plan_details'] = array('vendor_id' => $id,
                                    'plan_name' => 'Free',
                                    'amount' => '',
                                    'short_name' => ''
            );
            if(!empty($plan_data)){
                $data['plan_details'] = $plan_data;
            }
        }

        // echo "<pre>";
        // echo "shankar";
        //print_r($this->session->userdata());
        // print_r($data);

        $this->load->view('VendorPanel/index',$data);
    }
    
     public function visitor() {
        // echo Get_Vendor_detail();
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[];
             
        $id = $this->session->userdata('dv_id');
            
            //Total Users
            $this->load->model('VendorPanel/VendorUserModel');
            //$id = 3072; //temp
            $visitor_data = $this->VendorUserModel->GetList(array('vendor_id'=>$id));
            if(!empty($visitor_data)){
                $data['list'] = $visitor_data;
            }
        }

        // echo "<pre>";
        // print_r($data);

        $this->load->view('VendorPanel/visitor/list',$data);
    }

     public function plan() {
        // echo Get_Vendor_detail();
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[]; 
            
        $id = $this->session->userdata('dv_id');            
            //Plan Type
            $this->load->model('VendorPanel/VendorPlanModel');
            //$id = 28922; //temp
            $plan_data = $this->VendorPlanModel->GetList(array('vendor_id'=>$id));
            $data['list'] = array('vendor_id' => $id,
                                    'plan_name' => 'Free',
                                    'amount' => '',
                                    'short_name' => ''
            );
            if(!empty($plan_data)){
                $data['list'] = $plan_data;
            }
        }

        // echo "<pre>";
        // print_r($data);

        $this->load->view('VendorPanel/plan/list',$data);
    }
}
