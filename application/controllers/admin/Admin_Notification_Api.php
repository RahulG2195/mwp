<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Notification_Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_notification_count() {
//        $post = $this->input->post();
        $response = ['status' => FALSE, 'data' => NULL, 'message' => 'Invalid Parameters'];
        // check post not empty
//        if (!empty($post)) {
//            $dv_id = $post['vendor_id']; // '28922'; // '90' //temp
            // get user record from db
            $this->load->model('admin/AdminPanelModel');
            $notification_data2 = $this->AdminPanelModel->fetch_vendor_notification();
            $notification_data = array(
                '0' => array('count' => '0', 'notification_type' => '0'), //lead
                '1' => array('count' => '0', 'notification_type' => '1'), //visit
                '2' => array('count' => '0', 'notification_type' => '2'), //deals
                '3' => array('count' => '0', 'notification_type' => '3') //new registration
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
            $vendor_new_count=$this->AdminPanelModel->getvendornewcountgroupby();
            $vendoreditrequest=$this->AdminPanelModel->vendoreditrequestdata();
            //admin new user count categorywise
            $data[0]["vendor_edit_count"]='0';
            $data[0]["venue_count"]='0';
            $data[0]["birdal_count"]='0';
            $data[0]["groom_count"]='0';
            $data[0]["photography_count"]='0';
            $data[0]["makeup_count"]='0';
            $data[0]["mehendiartist_count"]='0';
            $data[0]["bridaljwellery_count"]='0';
            $data[0]["decoration_count"]='0';
            $data[0]["gift_count"]='0';
            $data[0]["catering_count"]='0';
            $data[0]["inivitations_count"]='0';
            if(!empty($vendoreditrequest)){
                $data[0]["vendor_edit_count"]=count($vendoreditrequest);
            }
            foreach($vendor_new_count as $row){
                // echo 'category '.$row['category'];
                if($row['category']=='1'){
                    $data[0]["venue_count"]=$row['count'];
                }else if($row['category']=='2'){
                    $data[0]["birdal_count"]=$row['count'];
                }else if($row['category']=='3'){
                    $data[0]["groom_count"]=$row['count'];
                }else if($row['category']=='4'){
                    $data[0]["photography_count"]=$row['count'];
                }else if($row['category']=='5'){
                    $data[0]["makeup_count"]=$row['count'];
                }else if($row['category']=='6'){
                    $data[0]["mehendiartist_count"]=$row['count'];
                }else if($row['category']=='7'){
                    $data[0]["bridaljwellery_count"]=$row['count'];
                }else if($row['category']=='8'){
                    $data[0]["decoration_count"]=$row['count'];
                }else if($row['category']=='9'){
                    $data[0]["gift_count"]=$row['count'];
                }else if($row['category']=='10'){
                    $data[0]["catering_count"]=$row['count'];
                }else if($row['category']=='13'){
                    $data[0]["inivitations_count"]=$row['count'];
                }
            }
            $response = ['status' => TRUE, 'data' => $notification_data,'data2' => $data, 'message' => 'Data Found'];
//        }
//        echo "<pre>";
//        print_r($response);
//        exit;
        echo json_encode($response);
    }
    
    public function update_leads_notification($notification_type) {
//        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('admin/AdminPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->AdminPanelModel->update_vendor_notification($notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/lead');
    }
    public function update_visit_notification($notification_type) {
//        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('admin/AdminPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->AdminPanelModel->update_vendor_notification($notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/visitor');
    }
    public function update_deals_notification($notification_type) {
//        $id = $this->session->userdata('dv_id');
        //update table
        $this->load->model('admin/AdminPanelModel');
        $data = array(
            'is_new'=> 0,
            'is_read'=> 1
        );
        $this->AdminPanelModel->update_vendor_notification($notification_type,$data);
        //redirect to datatable
        redirect(base_url() .'vendor-dashboard/deals');
    }
    
}
