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
                '0' => array('count' => '0', 'notification_type' => '0'),
                '1' => array('count' => '0', 'notification_type' => '1'),
                '2' => array('count' => '0', 'notification_type' => '2')
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
    
}
