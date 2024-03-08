<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('admin/AdminModel');
        if (!$this->session->userdata('dv_id')) {
            redirect('VendorPanel/Login');
        }
    }

    public function index() {
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

	public function lead() {
        // echo Get_Vendor_detail();
		
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[];
             
        $id = $this->session->userdata('dv_id');
            
            //Total Users
            $this->load->model('VendorPanel/VendorLeadModel');
            //$id = 3072; //temp
            $lead_data = $this->VendorLeadModel->GetList(array('vendor_id'=>$id));
            if(!empty($lead_data)){
                $data['list'] = $lead_data;
            }
        }

        // echo "<pre>";
        // print_r($data);

        $this->load->view('VendorPanel/lead/list',$data);
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
        // $id = 90;            
        
            //Plan Type
            $this->load->model('VendorPanel/VendorPlanModel');
            //$id = 28922; //temp
            $plan_data = $this->VendorPlanModel->GetList(array('vendor_id'=>$id));
            //$plan_data = array(); ///////////??????????///
            $data['list'][] = array(
                                    'vendor_payment_id'=>'',
                                    'vendor_id' => $id,
                                    'merchant_transaction_id'=>'',
                                    'amount' => '0',
                                    'merchant_order_id' => '',
                                    'short_name' => '',
                                    'plan_name' => 'Palette Express',
                                    'plan_type' => 'Free',
                                    'is_active' => '1',
                                    'created_date' => '',
									'expire_date' => ''
            );
            if(!empty($plan_data)){
                $data['list'] = $plan_data;
            }
        }

        // echo "<pre>";
        // print_r($data);
        // exit;

        $this->load->view('VendorPanel/plan/list',$data);
    }
}
