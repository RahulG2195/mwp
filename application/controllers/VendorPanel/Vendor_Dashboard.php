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
            $lead_data = $this->VendorLeadModel->Get_vendor_lead_detail($id);       
             $data['lead_details'] = array('vendor_id' => $id,
                                    'lead' => '0'
            );
             if(!empty($lead_data)){
                $data['lead_details'] = $lead_data;
            }
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
            
            //Total Users
            $this->load->model('VendorPanel/VendorDealsModel');
            // $id = 3072; //temp
            $deal_data = $this->VendorDealsModel->Get_vendor_deal_detail($id);
             $data['deal_details'] = array('vendor_id' => $id,
                                    'deal' => '0'
            );
            if(!empty($deal_data)){
                $data['deal_details'] = $deal_data;
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
//        echo "<pre>";
//        print_r($data);
//        exit;
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
            
        $id = $this->session->userdata('dv_id');            
        // $id = 28922;  //temp 28922 / 18899 / 90           
        //Plan Type
        $this->load->model('VendorPanel/VendorPlanModel');

        $plan_data = $this->VendorPlanModel->GetListSuccess(array('vendor_id'=>$id,'payment_status'=>'PAYMENT_SUCCESS'));
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
                            'created_date' => '2024-01-01 00:00:01',
							'expire_date' => '2024-12-31 12:59:59'
            );
            if(!empty($plan_data)){
                $data['list'] = $plan_data;
            }
        }
//         echo "<pre>";
//         print_r($data);
//         exit;

        $this->load->view('VendorPanel/plan/list',$data);
    }
    
     public function deals() {
         if(!empty($this->session->userdata('dv_id'))){
            
        $data['list']=[];
        $data['title'] = "List";
        $data['subtitle'] = "city";
        $data['heading'] = $response['title'] . " " . $response['subtitle'];
        $data['addlink'] = base_url('VendorPanel/Vendor_Dashboard/add_deals');
        $data['editlink'] = base_url('VendorPanel/Vendor_Dashboard/edit_deals');
        $data['activelink'] = base_url('VendorPanel/Vendor_Dashboard/active_deals');     
        $data['deactivelink'] = base_url('VendorPanel/Vendor_Dashboard/deactive_deals');     
        $id = $this->session->userdata('dv_id');
            
        //Total Users
        $this->load->model('VendorPanel/VendorDealsModel');
        //$id = 3072; //temp
        $deals_data = $this->VendorDealsModel->GetList(array('vendor_id'=>$id));
            if(!empty($deals_data)){
                $data['list'] = $deals_data;
            }
        }
        $this->load->view('VendorPanel/deals/list',$data);
      
    }
    
    public function add_deals() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '10');
            $data['created_date'] = DATETIME;
            
            $config['upload_path'] = 'uploads/deals';
            // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // fetch image names from database
//            $vid = $this->input->post('vendor_count');
//            $this->load->model('VendorPanel/VendorDealsModel');
//            $data = $this->VendorPanelModel->GetDataVin(array('vendor_id'=>$vid));
            // check logo upload or not 
            $logo = 'logo.tls';
            if ($this->upload->do_upload('image')) {
                $comp_logo = $this->upload->data();
                $logo = $comp_logo['file_name'];
            }
            
            $data['image'] = $logo;
//            echo "<pre>";
//            print_r($data);
//            exit; 
//            $data['deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $this->load->model('VendorPanel/VendorDealsModel');
            $insert_id = $this->VendorDealsModel->InserData($data);
            
            //insert vendor notification
            $insert_data2 = array(
                'vendor_id' => $this->input->post("vendor_id"),
                'notification_type' => '2',
                'custom_id' => $insert_id,
                'is_new' => '1',
                'is_read' => '0',
                'created_date' => date('Y-m-d H:i:s', strtotime("+0 days"))
            );
            $this->VendorDealsModel->InserDataNotification($insert_data2);
            //insert admin notification
            $this->VendorDealsModel->InserDataNotificationAdmin($insert_data2);
            
            if ($insert_id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('VendorPanel/Vendor_Dashboard/deals');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "Deals & Coupons";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('VendorPanel/Vendor_Dashboard/add_deals');
            $this->load->view('VendorPanel/deals/add', $response);
        }
    }

    public function edit_deals($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 11);
//            echo "<pre>";
//            print_r($_FILES);
//            exit;             
            $config['upload_path'] = 'uploads/deals';
            // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // fetch image names from database
//            $vid = $this->input->post('vendor_count');
            $this->load->model('VendorPanel/VendorDealsModel');
            $data2 = $this->VendorDealsModel->GetDataVin(array('deal_id'=>$editid));
            // check logo upload or not 
            $logo = 'logo.tls';
            if ($this->upload->do_upload('image')) {
                $comp_logo = $this->upload->data();
                $logo = $comp_logo['file_name'];
            }else{
                // fetch existing image name
                $logo = $data2['image'];
            }
            $data['image'] = $logo;
            
            $data = $this->security->xss_clean($data);
//            $this->load->model('VendorPanel/VendorDealsModel');
            $id = $this->VendorDealsModel->UpdateData(array('deal_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('VendorPanel/Vendor_Dashboard/deals');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "Deals & Coupons";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $this->load->model('VendorPanel/VendorDealsModel');
            $response['editdata'] = $this->VendorDealsModel->GetData(array('deal_id' => $id));
            $response['editlink'] = base_url('VendorPanel/Vendor_Dashboard/edit_deals');
            $this->load->view('VendorPanel/deals/edit', $response);
        }
    }

    public function active_deals($id) {
        $cond = array("deal_id" => $id);
        $data['is_active'] = "1";
        $this->load->model('VendorPanel/VendorDealsModel');
        $result = $this->VendorDealsModel->ActiveData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('VendorPanel/Vendor_Dashboard/deals');
    }
    
    public function deactive_deals($id) {
        $cond = array("deal_id" => $id);
        $data['is_active'] = "0";
        $this->load->model('VendorPanel/VendorDealsModel');
        $result = $this->VendorDealsModel->ActiveData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('VendorPanel/Vendor_Dashboard/deals');
    }
}