<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_edit_request extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/VendorRequestModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "Vendor Edit Request";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        // $response['addlink'] = base_url('admin/city/add_data');
        // $response['editlink'] = base_url('admin/city/edit_data/');
        $response['approvelink'] = base_url('admin/Vendor_edit_request/approve_request/');
        $response['cancellink'] = base_url('admin/Vendor_edit_request/cancel_request/');
        $response['list'] = $this->VendorRequestModel->GetListWithCat(array('edit_request'=> 1));
        // echo "<pre>";
        // print_r($response);
        // exit;

        $this->load->view('admin/vendor_edit_request/list', $response);
    }

    public function approve_request($id = "") {
        $cond = array("dv_id" => $id);
        $data['edit_access'] = "1";
        $id = $this->VendorRequestModel->UpdateData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/Vendor_edit_request');
    }

    public function cancel_request($id) {
        $cond = array("dv_id" => $id);
        $data['edit_request'] = "0";
        $data['edit_access'] = "0";
        $result = $this->VendorRequestModel->UpdateData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/Vendor_edit_request');
    }
}
