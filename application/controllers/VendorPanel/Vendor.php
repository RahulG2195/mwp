<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('VendorPanel/VendorModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "vendor";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('VendorPanel/vendor/add_data');
        $response['editlink'] = base_url('VendorPanel/vendor/edit_data/');
        $response['deletelink'] = base_url('VendorPanel/vendor/delete_data/');
        $response['list'] = $this->VendorModel->GetList(array('role' => '2'));

        $this->load->view('VendorPanel/vendor/list-vendor', $response);
    }

    public function add_data() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '7');
//            echo "<pre>";
//            print_r($data);
//            exit;

            $data['created_date'] = DATETIME;
            $data = $this->security->xss_clean($data);
            $id = $this->VendorModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('VendorPanel/admin');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "vendor";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('VendorPanel/vendor/add_data');
            $this->load->view('VendorPanel/vendor/add-vendor', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 7);
//            echo "<pre>";
//            print_r($data);
//            exit;
            if(empty($data['password'])){
                unset($data['password']);
            } else {
                $data['password'] = md5($data['password']);
            }
//            echo "<pre>";
//            print_r($data);
//            exit;
            $data = $this->security->xss_clean($data);
            $id = $this->VendorModel->UpdateData(array('admin_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('VendorPanel/vendor');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "admin";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->VendorModel->GetData(array('admin_id' => $id));
            $response['editlink'] = base_url('VendorPanel/vendor/edit_data/');
            $this->load->view('VendorPanel/vendor/edit-vendor', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("admin_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->VendorModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('VendorPanel/vendor');
    }
}
