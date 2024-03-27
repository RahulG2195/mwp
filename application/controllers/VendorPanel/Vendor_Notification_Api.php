<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_Notification_Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_notification_count() {
        $post = $this->input->post();
        $response = ['status' => FALSE, 'data' => NULL, 'message' => 'Invalid Parameters'];
        // check post not empty
        if (!empty($post)) {
            $dv_id = $post['vendor_id']; // '28922'; // '90' //temp
            // get user record from db
            $this->load->model('VendorPanel/VendorPanelModel');
            $notification_data2 = $this->VendorPanelModel->fetch_vendor_notification($dv_id);
            $notification_data = array(
                '0' => array('count' => '0', 'notification_type' => '0'), //lead
                '1' => array('count' => '0', 'notification_type' => '1'), //visit
                '2' => array('count' => '0', 'notification_type' => '2'), //deals
                '3' => array('count' => '0', 'notification_type' => '3') //review
            );
            // check record not empty
            if (!empty($notification_data2)) {
                foreach ($notification_data2 as $notification) {
                    if ($notification['notification_type'] == '0') {
                        $notification_data[0]['count'] = $notification['count'];
                    } elseif ($notification['notification_type'] == '1') {
                        $notification_data[1]['count'] = $notification['count'];
                    } elseif ($notification['notification_type'] == '2') {
                        $notification_data[2]['count'] = $notification['count'];
                    } elseif ($notification['notification_type'] == '3') {
                        $notification_data[3]['count'] = $notification['count'];
                    }
                }
            }
            $response = ['status' => TRUE, 'data' => $notification_data, 'message' => 'Data Found'];
        }
//        echo "<pre>";
//        print_r($response);
//        exit;
        echo json_encode($response);
    }
    
    public function update_leads_notification($notification_type) {
        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('VendorPanel/VendorPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->VendorPanelModel->update_vendor_notification($id,$notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/lead');
    }
    public function update_visit_notification($notification_type) {
        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('VendorPanel/VendorPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->VendorPanelModel->update_vendor_notification($id,$notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/visitor');
    }
    public function update_deals_notification($notification_type) {
        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('VendorPanel/VendorPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->VendorPanelModel->update_vendor_notification($id,$notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/deals');
    }
    
    public function update_review_notification($notification_type) {
        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('VendorPanel/VendorPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->VendorPanelModel->update_vendor_notification($id,$notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'user-review');
    }
  
    
}
