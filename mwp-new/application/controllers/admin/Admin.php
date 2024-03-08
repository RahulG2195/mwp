<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/AdminModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "admin";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('admin/admin/add_data');
        $response['editlink'] = base_url('admin/admin/edit_data/');
        $response['deletelink'] = base_url('admin/admin/delete_data/');
        $response['list'] = $this->AdminModel->GetList(array('role' => '1'));

        $this->load->view('admin/admin/list-admin', $response);
    }

    public function add_data() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '7');
//            echo "<pre>";
//            print_r($data);
//            exit;
            $data['created_date'] = DATETIME;
//            $data['deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->AdminModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/admin');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "admin";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/admin/add_data');
            $this->load->view('admin/admin/add-admin', $response);
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
            $id = $this->AdminModel->UpdateData(array('admin_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/admin');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "admin";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->AdminModel->GetData(array('admin_id' => $id));
            $response['editlink'] = base_url('admin/admin/edit_data/');
            $this->load->view('admin/admin/edit-admin', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("admin_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->AdminModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/admin');
    }
}
