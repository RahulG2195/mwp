<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('dv_id')) {
            redirect('VendorPanel/Login');
        }
    }

    public function index() {
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
            // $id = 3072; //temp
            $visitor_data = $this->VendorUserModel->Get_vendor_visitor_detail($id);
             $data['visitor_details'] = array('vendor_id' => $id,
                                    'visitor' => '0'
            );
            if(!empty($visitor_data)){
                $data['visitor_details'] = $visitor_data;
            }
            //Plan Type
            $this->load->model('VendorPanel/VendorPlanModel');
            // $id = 18899; //temp
            $plan_data = $this->VendorPlanModel->Get_vendor_plan_detail($id);
            $data['plan_details'] = array(
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
                $data['plan_details'] = $plan_data;
            }
        }
      
        $this->load->view('VendorPanel/index',$data);
    }

	public function lead() {
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[];
             
        $id = $this->session->userdata('dv_id'); //$id = 3072;
            
        //Total Users
        $this->load->model('VendorPanel/VendorLeadModel');
            
        $lead_data = $this->VendorLeadModel->GetList(array('vendor_id'=>$id));
            if(!empty($lead_data)){
                $data['result'] = $lead_data;
            }
        }
        $this->load->view('VendorPanel/lead/list',$data);
    }

    public function veiwdetail()
    {
       $id=$this->uri->segment(4);
       $this->load->model('VendorPanel/VendorLeadModel');
       $data["result"]=$this->VendorLeadModel->GetData(array('query_id'=>$id));
       $this->load->view('VendorPanel/lead/detail-page',$data);
    }
	
    public function visitor() {
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

        $this->load->view('VendorPanel/visitor/list',$data);
    }

     public function plan() {
        if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[]; 
            
        $id = $this->session->userdata('dv_id'); //$id = 28922;            
        //$id = 18899;  //temp            
        //Plan Type
        $this->load->model('VendorPanel/VendorPlanModel');

        $plan_data = $this->VendorPlanModel->GetList(array('vendor_id'=>$id));
        $vendor_data = $this->VendorPlanModel->GetDataV(array('dv_id'=>$id));
        $data['vendor_data'] = $vendor_data;
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
