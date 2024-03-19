<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deals_Coupon extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('admin/VendorModel');
//        echo "shankar";
    }

    public function index() {
        $this->list_data();
    }

    function Deals_all_Data($id) {
//        echo "tab ".$tab.' id '.$id;
        $data['list']=[];
        $data['title'] = "List";
        $data['subtitle'] = "Deals & Coupon";
        $data['heading'] = $response['title'] . " " . $response['subtitle'];
        $data['addlink'] = base_url('admin/Deals_Coupon/add_deals/'.$id);
        $data['editlink'] = base_url('admin/Deals_Coupon/edit_deals/'.$id);
        $data['activelink'] = base_url('admin/Deals_Coupon/active_deals/'.$id);     
        $data['deactivelink'] = base_url('admin/Deals_Coupon/deactive_deals/'.$id);     
//        $id = $this->session->userdata('dv_id');
            
        //Total Users
        $this->load->model('VendorPanel/VendorDealsModel');
        //$id = 3072; //temp
        $deals_data = $this->VendorDealsModel->GetList(array('vendor_id'=>$id));
            if(!empty($deals_data)){
                $data['list'] = $deals_data;
            }
//        }
        $this->load->view('admin/deals-coupon/list', $data);
    }

    public function add_deals($vendor_id="",$id="") {
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
            $id = $this->VendorDealsModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('Single_data_deals/'.$data['vendor_id']);
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "Deals & Coupons";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/Deals_Coupon/add_deals');
            $response['vendor_id'] = $vendor_id;
            $this->load->view('admin/deals-coupon/add', $response);
        }
    }

    public function edit_deals($vendor_id="",$id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 11);
//            echo "<pre>";
//            print_r($data);
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
            redirect('Single_data_deals/'.$data['vendor_id']);
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "Deals & Coupons";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $this->load->model('VendorPanel/VendorDealsModel');
            $response['editdata'] = $this->VendorDealsModel->GetData(array('deal_id' => $id));
            $response['editlink'] = base_url('admin/Deals_Coupon/edit_deals');
            $response['vendor_id'] = $vendor_id;
            $this->load->view('admin/deals-coupon/edit', $response);
        }
    }

    public function active_deals($vendor_id,$id) {
        $cond = array("deal_id" => $id);
        $data['is_active'] = "1";
        $this->load->model('VendorPanel/VendorDealsModel');
        $result = $this->VendorDealsModel->ActiveData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('Single_data_deals/'.$vendor_id);
    }
    
    public function deactive_deals($vendor_id,$id) {
        $cond = array("deal_id" => $id);
        $data['is_active'] = "0";
        $this->load->model('VendorPanel/VendorDealsModel');
        $result = $this->VendorDealsModel->ActiveData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('Single_data_deals/'.$vendor_id);
    }
    
}
